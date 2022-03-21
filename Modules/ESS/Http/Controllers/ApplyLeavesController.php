<?php

namespace Modules\ESS\Http\Controllers;

use DateTime;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ESS\Actions\ApplyLeavesAction;
use Modules\ESS\Entities\ApplyLeave;
use Modules\HR\Entities\Employee;
use Modules\ESS\Contracts\LeaveType;

class ApplyLeavesController extends Controller
{

    public $leaveAction;

    public function __construct(ApplyLeavesAction $leaveAction)
    {
        $this->middleware(['auth', 'prevent-back-history', 'check-subscription', 'permission:Manage-ess']);
        $this->leaveAction = $leaveAction;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('ess::apply_leaves.index');
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
        $request->validate([
            'leaves_days' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',
            'leave_type' => 'required',
            'reason' => 'required',
        ]);

        // employee_id
        $employee_id =  Employee::select('id')->where('user_id', auth()->user()->id)->first()->id;
        $request['employee_id'] = $employee_id;

        //number_of_dayes
        if ($request->leaves_days == 1) { // 1 >> single
            $request['number_of_dayes'] = 1;
        } else { // multi days for vacation
            $datetime1 = new DateTime($request->date_from);
            $datetime2 = new DateTime($request->date_to);
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');
            $request['number_of_dayes'] = $days; // difference between from days_from and days_to
        }

        //Leaves_Types
        switch ($request->leaves_types) {
            case "1":
                $request['leave_type'] = LeaveType::ORDINARY_LEAVE;
                break;
            case "2":
                $request['leave_type'] = LeaveType::CASUAL_LEAVE;
                break;
            case "3":
                $request['leave_type'] = LeaveType::SICK_LEAVE;
                break;
            default:
                $request['leave_type'] = LeaveType::OTHER_LEAVE;
        }

        // dd($request->all());
        $appLeave =  ApplyLeave::create([
            'employee_id' =>  $request['employee_id'],
            'number_of_dayes' =>  $request['number_of_dayes'],
            'leave_type' =>  $request['leave_type'],
        ]);

        if ($appLeave) {
            return redirect()->route('apply-leaves.index')->with('success', __('app.Created Successfully'));
        } else {
            return redirect()->back()->with('error', __('app.Created Failed'));
        }
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


    public function applyLeaves()
    {
        return view('ess::leaves.apply_leaves');
    }
}
