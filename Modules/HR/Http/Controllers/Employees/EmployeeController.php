<?php

namespace Modules\HR\Http\Controllers\Employees;


use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\HR\Actions\EmployeeAction;
use Modules\HR\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{

    private $employeeAction;
     public function __construct(EmployeeAction $employeeAction){
         $this->middleware(['auth', 'prevent-back-history','check-subscription','permission:Manage-employee']);
         return $this->employeeAction = $employeeAction;
     }
    public function index()
    {
        $employees = $this->employeeAction->get();
        $countOfEmployees = $this->employeeAction->viewModel();
        return view('hr::employees.index',compact('employees','countOfEmployees'));
    }

    /**
     * Show the form for creating a new resource.
     * @create View
     */
    public function create()
    {
        $data = $this->employeeAction->viewModel();
        return view('hr::employees.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     * @store Employee
     */
    public function store(EmployeeRequest $request)
    {
        $this->employeeAction->save($request);
        return redirect()->route('employees.index')->with('success','Data Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
       $employee =$this->employeeAction->find($id);
       $data =$this->employeeAction->viewModel();
        return view('hr::employees.edit',compact('employee','data'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(EmployeeRequest $request,int $id)
    {
        $this->employeeAction->update($id,$request);
        return redirect()->route('employees.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(int $id)
    {
            $this->employeeAction->dismissalEmployee($id);
            $this->employeeAction->delete($id);
            return back()->with('success','Data Cleared Successfully');
    }
}
