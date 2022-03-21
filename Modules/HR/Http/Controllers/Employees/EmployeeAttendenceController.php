<?php

namespace Modules\HR\Http\Controllers\Employees;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\HR\Actions\EmployeeAttendanceAction;

class EmployeeAttendenceController extends Controller
{
    public $attendanceAction;
    public function __construct(EmployeeAttendanceAction $attendanceAction){
        $this->middleware(['auth', 'prevent-back-history','check-subscription','permission:Manage-employee']);
        return $this->attendanceAction = $attendanceAction;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
      $empAttendances  =  $this->attendanceAction->get();
        return view('hr::employees_attendnces.index',compact('empAttendances'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('hr::create');
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
        return view('hr::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('hr::edit');
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
}
