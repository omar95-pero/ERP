<?php

namespace Modules\HR\DTO;
use Illuminate\Support\Facades\Hash;
use Modules\HR\Http\Traits\UploaderTrait;
class EmployeeDTO
{
    use UploaderTrait;
        public $emp_code;
        public $name;
        public $email;
        public $password;
        public $image;
        public $phone;
        public $date_of_birth;
        public $personal_email;
        public $gender;
        public $email_status;
        public $emergency_phone;
        public $address;
        public $branch_id;
        public $department_id;
        public $job_title_id;
        public $date_of_join;
        public $account_number;
        public $bank_name;
        public $bank_location;
        public $salary;
        public $job_type;
        public $document;
        public $created_by;


    public function __construct($request)
    {

        $this->name   = $request->get('first_name') .'-'. $request->get('last_name')??'';
//        $this->last_name   = $request->get('last_name')??'';
        $this->password   = $request->get('password')??'';
        $this->image   = $request->file('image');
        $this->email   = $request->get('email');
        $this->phone   = $request->get('phone')??'';
        $this->emp_code  = $request->get('emp_code')??'';
        $this->address  = $request->get('address')??'';
        $this->date_of_birth = $request->get('date_of_birth')??'';
        $this->personal_email = $request->get('personal_email')??'';
        $this->gender = $request->get('gender')??'male';
        $this->email_status = $request->get('email_status')??0;
        $this->emergency_phone = $request->get('emergency_phone')??'';
        $this->branch_id = $request->get('branch_id');
        $this->department_id = $request->get('department_id');
        $this->job_title_id = $request->get('job_title_id');
        $this->date_of_join = $request->get('date_of_join')??date('yy-mm-dd');
        $this->account_number = $request->get('account_number')??'';
        $this->bank_name = $request->get('bank_name')??'';
        $this->bank_location = $request->get('bank_location')??'';
        $this->salary = $request->get('salary')??0;
        $this->job_type = $request->get('job_type')??'full';
        $this->document = $request->file('document')??'';
        $this->created_by = $request->get('created_by')??auth()->user()->id;


    }

//    public function dataFromRequest()
//    {
//        $data = json_decode(json_encode($this),true);
//        $data['image'] = $this->image;
//        $data['document'] = $this->document;
//        return $data;
//
//    }
    public function dataOfUser(){
        $data['name']=$this->name;
        $data['email']=$this->email;
        $data['password']=Hash::make($this->password);
        $data['phone']=$this->phone;
        $data['user_type']="employee";
        if ($this->image) {
            $data['image'] = $this->upload($this->image,'users');
        }
        return $data;
    }

    public function dataOfEmployee($user_id){
        $data['emp_code']=$this->emp_code;
        $data['user_id']=$user_id;
        $data['date_of_birth']=$this->date_of_birth;
        $data['personal_email']=$this->personal_email;
        $data['gender']=$this->gender;
        $data['email_status']=$this->email_status;
        $data['emergency_phone']=$this->emergency_phone;
        $data['address']=$this->address;
        $data['branch_id']=$this->branch_id;
        $data['department_id']=$this->department_id;
        $data['job_title_id']=$this->job_title_id;
        $data['date_of_join']=$this->date_of_join;
        $data['account_number']=$this->account_number;
        $data['bank_name']=$this->bank_name;
        $data['bank_location']=$this->bank_location;
        $data['salary']=$this->salary;
        $data['job_type']=$this->job_type;
        $data['created_by']=auth()->user()->id;
        if ($this->document) {
            $data['document'] = $this->upload($this->document,'employee_documents');
        }
        return $data;
    }

    public function editOfEmployee(){
        $data['emp_code']=$this->emp_code;
        $data['date_of_birth']=$this->date_of_birth;
        $data['personal_email']=$this->personal_email;
        $data['gender']=$this->gender;
        $data['email_status']=$this->email_status;
        $data['emergency_phone']=$this->emergency_phone;
        $data['address']=$this->address;
        $data['branch_id']=$this->branch_id;
        $data['department_id']=$this->department_id;
        $data['job_title_id']=$this->job_title_id;
        $data['date_of_join']=$this->date_of_join;
        $data['account_number']=$this->account_number;
        $data['bank_name']=$this->bank_name;
        $data['bank_location']=$this->bank_location;
        $data['salary']=$this->salary;
        $data['job_type']=$this->job_type;
        $data['created_by']=auth()->user()->id;
        if ($this->document) {
            $data['document'] = $this->upload($this->document,'employee_documents');
        }
        return $data;
    }



}
