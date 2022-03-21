<?php

namespace Modules\HR\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\HR\Actions\DepartmentAction;
use Modules\HR\Entities\Department;
use Modules\HR\Http\Requests\CreateDepartmentRequest;
use Modules\HR\Http\Requests\UpdateDepartmentRequest;

class DepartmentController extends Controller
{
    public $departmentAction;

    public function __construct(DepartmentAction $departmentAction)
    {
        $this->middleware(['auth', 'prevent-back-history']);
        $this->departmentAction = $departmentAction;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $departments = $this->departmentAction->findAll($request);
        return view('hr::departments.index', ['departments' => $departments]);
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
    public function store(CreateDepartmentRequest $request)
    {

        $data = $request->except('_token');
        $department = $this->departmentAction->save($data);

        if ($department) {
            return redirect()->route('departments.index')->with('success', __('hr::hr.created successfully'));
        } else {
            return redirect()->back()->with('error', 'created_failed');
        }
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
    public function update(UpdateDepartmentRequest $request)
    {
        $department = Department::find($request->id);

        $data = $request->except('_token');
        $department = $this->departmentAction->update($data, $data['id']);

        if ($department) {
            // return redirect()->route('departments.index')->with('success', 'update_successfully');
            return response()->json(['data' => $department, 'status' => 'done']);
        } else {
            // return redirect()->back()->with('error', 'update_failed');
            return response()->json(['data' => $department, 'status' => 'failed']);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {

        $department = $this->departmentAction->delete($id);

        if ($department) {
            return redirect()->route('departments.index')->with('success', 'deleted successfully');
        } else {
            return redirect()->back()->with('error', 'deleted failed');
        }
    }
}
