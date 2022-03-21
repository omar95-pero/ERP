<?php

namespace Modules\HR\Http\Traits;

use Illuminate\Support\Facades\Hash;
use Modules\HR\Entities\Employee;
use Modules\HR\Http\Requests\EmployeeRequest;
use Modules\Tenant\Entities\User;
use Modules\HR\Http\Traits\UploaderTrait;
use Illuminate\Http\Request;
trait EmployeeTrait
{
    use UploaderTrait;
    private $user;

        /*
         * @Create User
         */
        private function createUser($data){
            $imageObj = $data['image']??'';
            $data = json_decode(json_encode($data,true));
            $user = new User();
            $user->name = $data->first_name.'-'.$data->last_name ;
            $user->email = $data->email ;
            $user->phone = $data->phone ;
            $user->password = Hash::make($data->password) ;
            if ($imageObj) {
                $user->image = $this->upload($imageObj,'users');
            }
            $user->save() ;
            return $this->user = $user->id;
        }
        /*
       * @Create Employee
       */
         private function CreateEmployee($data){
            $documentObg = $data['document']??'';
            $data = json_decode(json_encode($data,true));
            $employee = new Employee();
            $employee->emp_code =$data->emp_code ;
            $employee->user_id =$this->user;
            $employee->date_of_birth =$data->date_of_birth ;
            $employee->personal_email =$data->personal_email ;
            $employee->gender =$data->gender ;
            $employee->email_status =$data->email_status ;
            $employee->emergency_phone =$data->emergency_phone ;
            $employee->address =$data->address ;
            $employee->branch_id =$data->branch_id ;
            $employee->department_id =$data->department_id ;
            $employee->job_title_id =$data->job_title_id ;
            $employee->date_of_join =$data->date_of_join ;
            $employee->account_number =$data->account_number ;
            $employee->bank_name =$data->bank_name;
            $employee->bank_location =$data->bank_location ;
            $employee->salary =$data->salary ;
            $employee->job_type =$data->job_type ;
            if ($documentObg){
                $employee->document = $this->upload($documentObg, 'employee_documents');
            }
            $employee->created_by =auth()->user()->id ;
            $employee->save();
        }
        /*
        * @Save User && Employee
        */
        public function employeeRequestStore($data){
            $this->createUser($data);
            $this->CreateEmployee($data);
        }


        /*
         * @Update User
         */
      private function updateUser($id,$data){
            $user = User::find($id);
            $imageObj = $data['image']??'';
            $data = json_decode(json_encode($data,true));
            $userData = [
                'name'     =>$data->first_name.'-'.$data->last_name,
                'email'    => $data->email,
                'phone'    => $data->phone,
                'password' => Hash::make($data->password),
            ];
            if ($imageObj) {
                $this->deleteImage('users',$user->image);
                $userData['image'] = $this->upload($imageObj,'users');
            }
              $user->update($userData);

            return $this->user = $user->id;
        }
        /*
        * @Update Employee
        */
        private function updateEmployee($id,$data){
            $employee = Employee::where('user_id',$id);
            $documentObg = $data['document']??'';
            $data = json_decode(json_encode($data,true));
            $employeeData = [
            'emp_code' =>$data->emp_code ,
            'user_id' =>$this->user ,
            'date_of_birth' =>$data->date_of_birth ,
            'personal_email' =>$data->personal_email ,
            'gender' =>$data->gender ,
            'email_status' =>$data->email_status ,
            'emergency_phone' =>$data->emergency_phone ,
            'address' =>$data->address ,
            'branch_id' =>$data->branch_id ,
            'department_id' =>$data->department_id ,
            'job_title_id' =>$data->job_title_id ,
            'date_of_join' =>$data->date_of_join ,
            'account_number' =>$data->account_number ,
            'bank_name' =>$data->bank_name,
            'bank_location' =>$data->bank_location ,
            'salary' =>$data->salary ,
            'job_type' =>$data->job_type
            ];
            if ($documentObg){
                $employeeData['document'] = $this->upload($documentObg, 'employee_documents');
            }
            $employee->update($employeeData);
        }
        /*
        * @Update user && employee && save
        */
        public function employeeRequestUpdate($id,$data){
            $this->updateUser($id,$data);
            $this->updateEmployee($id,$data);
        }
}
