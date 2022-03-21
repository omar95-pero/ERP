<?php

namespace Modules\ESS\DTO;

use Carbon\Carbon;
use Modules\ESS\Contracts\AttendenceStatus;
use Modules\ESS\Contracts\AttendenceWorkFrom;

class AttendanceDTO
{
    public function clockInDto($request)
    {
        $data['user_id'] = auth()->user()->id;
        $data['date'] = Carbon::now()->toDateString();
        $data['clock_in'] = Carbon::now()->toTimeString();
        $data['clock_out'] = null;
        $data['hours_per_day'] = null;
        $data['status'] = null;

        if ($request->working_from == 1) {
            $data['working_from'] = AttendenceWorkFrom::OFFICE;
        } elseif ($request->working_from == 2) {
            $data['working_from'] = AttendenceWorkFrom::HOME;
        } else {
            $data['working_from'] = AttendenceWorkFrom::OTHERS;
        }

        // $request['working_from'] = $request->working_from;
        $data['notes'] = $request->notes;

        return $data;
    }

    public function clockOutDto($userAttend)
    {

        $clockOut = Carbon::now()->toTimeString();
        $data['clock_out'] = $clockOut;

        $startTime = Carbon::parse($userAttend->clock_in);
        $finishTime = Carbon::parse($clockOut);

        $diffTimeInSeconds = $finishTime->diffInSeconds($startTime);
        $diffTimeInMinutes =  $diffTimeInSeconds / 60;
        $diffTimeInHours =  $diffTimeInMinutes / 60;

        // dd($startTime->diff($finishTime)->format('%H:%I:%S'));

        $hours_per_day = round($diffTimeInHours, 3);
        $data['hours_per_day'] = $hours_per_day;

        /**
         * status >>> overtime if >>> hours_per_day > 8
         *
         * status >>> present if >>> hours_per_day<=8 and  >= 7.5hrs
         *
         * status >>> late if >>> hours_per_day <7.5 hrs and >= 7hrs
         *
         * else >>> status >>> absent
         */
        if ($hours_per_day > 8) {
            $data['status'] = AttendenceStatus::OVERTIME;
        } elseif ($hours_per_day <= 8 && $hours_per_day >= 7.5) {
            $data['status'] = AttendenceStatus::Present;
        } elseif ($hours_per_day < 7.5 && $hours_per_day >= 7) {
            $data['status'] = AttendenceStatus::LATE;
        } else {
            $data['status'] = AttendenceStatus::Absent;
        }

        return $data;
    }
}
