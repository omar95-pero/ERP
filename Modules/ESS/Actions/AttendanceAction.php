<?php

namespace Modules\ESS\Actions;


use Illuminate\Support\Facades\DB;
use Modules\ESS\Entities\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\ESS\DTO\AttendanceDTO;

class AttendanceAction
{
    protected $attendanceModel;

    public function __construct(Attendance $model)
    {
        $this->attendanceModel = $model;
    }

    public function clockIn(Request $request)
    {
        $request->validate([
            'working_from' => 'required',
        ]);

        // be sure that user does not clock in twice
        $forbddenTwiceClockIn = $this->checkClockIn();


        if ($forbddenTwiceClockIn) {
            return response()->json(['data' => __('app.This user is already logged in'), 'status' => 'logged_before']);
        }

        // dto
        $data = new AttendanceDTO();
        $data = $data->clockInDTO($request);

        $empAttendance = $this->attendanceModel::create($data);

        return $empAttendance;
    }

    public function clockOut(Request $request)
    {
        // check if user is logged in
        $clockInCheck = $this->checkClockIn();


        if ($clockInCheck) {
            // check if user is clocked-out today
            $clockOutCheck = $this->checkClockOut();

            if ($clockOutCheck) {
                return response()->json(['data' => __('app.This user clocked out today.'), 'status' => 'logged_out_before']);
            }
            //
            $userAttend = $this->attendanceModel::where('user_id', auth()->user()->id)
                ->where('date', Carbon::now()->toDateString())
                ->first();

            // dto
            $data = new AttendanceDTO();
            $data =  $data->clockOutDto($userAttend);

            $userAttend->update($data);

            return $userAttend;
        } else {
            return response()->json(['data' => __('app.This user didn\'t clocked in today.'), 'status' => 'not_logged_in_before']);
        }
    }


    public function checkClockIn()
    {
        // be sure that user does not clock in twice
        $forbddenTwiceClockIn = $this->getTodayUserAttendance();

        return $forbddenTwiceClockIn ? true : false;
    }

    //checkClockOut
    public function checkClockOut()
    {
        // check if user clocked-out today
        $forbddenTwiceClockIn = $this->getTodayUserAttendance();

        if ($forbddenTwiceClockIn == null) {
            return response()->json(['data' => __('app.This user didn\'t clocked in today.'), 'status' => 'not_logged_in_before']);
        } else {
            return $forbddenTwiceClockIn->clock_out != null;
        }
    }

    private function getTodayUserAttendance()
    {
        $userAttenance = DB::table('attendances')->where('user_id', auth()->user()->id)
            ->where('date', Carbon::now()->toDateString())
            ->first();

        return $userAttenance;
    }
}
