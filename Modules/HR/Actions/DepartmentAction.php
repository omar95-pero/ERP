<?php

namespace Modules\HR\Actions;


use Illuminate\Support\Facades\DB;
use Modules\HR\Entities\Department;

class DepartmentAction
{
    protected $DepartmentModal;

    public function __construct()
    {
        $this->DepartmentModal = new Department();
    }

    function findAll($request)
    {
        $departments = $this->DepartmentModal->When($request->search, function ($query) use ($request) {
            return $query->where('name', 'like', '%' . $request->search . '%');
        })->orderBy('id', 'ASC')->get();

        return $departments;
    }

    public function findById($id)
    {
        $department =  $this->DepartmentModal->find($id);
        return $department;
    }

    function save($data)
    {
        $department = $this->DepartmentModal->create(['name' => $data['name']]);
        return $department;
    }


    function update($data, $id)
    {

        $department = $this->DepartmentModal->find($id);
        $department->name = $data['name'];
        $department->save();

        return $department;
    }

    function delete($id)
    {
        DB::table("departments")->where('id', $id)->delete();
    }
}
