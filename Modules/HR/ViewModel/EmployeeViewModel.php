<?php

namespace Modules\HR\ViewModel;


use Modules\Company\Entities\Branch;
use Modules\HR\Entities\Department;
use Modules\HR\Entities\JobTitle;
use DB;
class EmployeeViewModel
{

    public function __construct()
    {

    }

    public function branches()
    {
       return Branch::select('id','name')->get();
    }

    public function departments()
    {
        return  Department::select('id','name')->get();
    }

    public function jobTitles()
    {
        return JobTitle::select('id','title')->get();
    }
    public function countEmployee($gender = null) :int
    {
        if ($gender != null){
            return DB::table('employees')->where(['gender'=>$gender,'tenant_id'=>tenant('id')])->count();
        }
        return DB::table('employees')->where('tenant_id',tenant('id'))->count();

    }

}
