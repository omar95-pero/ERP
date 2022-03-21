<?php
namespace Modules\HR\Actions;


use Modules\HR\Entities\Employee;
use Modules\Tenant\Entities\User;
use DB;
class EmployeeAttendanceAction{
    public function get(){

      return  Employee::with('user.attendances')->get();

    }
}
