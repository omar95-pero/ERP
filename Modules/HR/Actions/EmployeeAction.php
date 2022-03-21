<?php

namespace Modules\HR\Actions;

use Modules\HR\Entities\Employee;
use Modules\HR\Http\Traits\UploaderTrait;
use Modules\HR\ViewModel\EmployeeViewModel;
use Modules\Tenant\Entities\User;
use Carbon\Carbon;
use Modules\HR\DTO\EmployeeDTO;

class EmployeeAction
{
use UploaderTrait;
    public function get()
    {
        return Employee::with('department','jobTitle','branch','user')->get();
    }


    public function find($id)
    {
        return Employee::where('user_id',$id)->first();
    }


    public function findUser($id)
    {
        return User::findOrFail($id);
    }

    /*
     * Data We Nead To Create Or Update  Employee
     * @return Branches,Departments,JobTitles
     */
     public function viewModel(){
         return new EmployeeViewModel();
     }



    public function save($data)
    {
        $newData = new EmployeeDTO($data);
//        $user = new User();
        $userData = User::create($newData->dataOfUser());
        $emp =$newData->dataOfEmployee($userData->id);
        Employee::create($emp);
    }



    public function dismissalEmployee($id){
        $embloyee =$this->find($id);
        $embloyee->update(['termination_date'=> Carbon::now()->format('Y-m-d')]);
        return $embloyee;
    }
    public function update($id, $data)
    {
        $newData = new EmployeeDTO($data);
        $user = $this->findUser($id);
        $userUpdatedData = $newData->dataOfUser();
        if (isset($userUpdatedData["image"])){
            $this->deleteImage('users',$user->image);
        }
        $user->Update($userUpdatedData);
        $employee = $this->find($id);
        $employeeUpdatedData =$newData->editOfEmployee();
        if (isset($employeeUpdatedData["document"])){
            $this->deleteImage('employee_documents',$employee->document);
        }
        $employee->update($employeeUpdatedData);

    }

    public function delete($id)
    {
        $embloyee = $this->findUser($id);
        $embloyee->delete();
    }

}
