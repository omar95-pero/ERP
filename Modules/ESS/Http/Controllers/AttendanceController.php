<?php

namespace Modules\ESS\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ESS\Actions\AttendanceAction;

class AttendanceController extends Controller
{

    public $attendanceAction;

    public function __construct(AttendanceAction $attendanceAction)
    {
        $this->middleware(['auth', 'prevent-back-history', 'check-subscription', 'permission:Manage-ess']);
        $this->attendanceAction = $attendanceAction;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('ess::attendnaces.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('ess::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('ess::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('ess::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function clockIn(Request $request)
    {
        $empAttendance = $this->attendanceAction->clockIn($request);

        if ($empAttendance) {
            return response()->json(['data' => $empAttendance, 'status' => 'done']);
        } else {
            return response()->json(['data' => $empAttendance, 'status' => 'failed']);
        }
    }

    public function clockOut(Request $request)
    {

        $userAttend = $this->attendanceAction->clockOut($request);

        if ($userAttend) {
            return response()->json(['data' => $userAttend, 'status' => 'done']);
        } else {
            return response()->json(['data' => $userAttend, 'status' => 'failed']);
        }
    }

    public function checkClockIn()
    {
        return $this->attendanceAction->checkClockIn();
    }

    //checkClockOut
    public function checkClockOut()
    {
        return $this->attendanceAction->checkClockOut();
    }
}
