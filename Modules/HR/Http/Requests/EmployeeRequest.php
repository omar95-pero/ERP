<?php

namespace Modules\HR\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\HR\Entities\Employee;
use DB;
class EmployeeRequest extends FormRequest
{
//    public $id;
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */


    public function rules()
    {
        switch (request()->method()) {
            case "POST":
                return [
                    'emp_code'=>'nullable|max:100',
                    'branch_id'=>'required|exists:branches,id',
                    'department_id'=>'required|exists:departments,id',
                    'job_title_id'=>'required|exists:job_titles,id',
                    'first_name'=>'required',
                    'last_name'=>'required',
                    'email'=>'required|email|unique:users,email',
                    'password'=>'required|min:8',
                    'date_of_birth'=>'nullable|date_format:Y-m-d',
                    'personal_email'=>'nullable|email|max:200',
                    'gender'=>'nullable|in:male,female',
                    'email_status'=>'nullable|in:0,1',
                    'phone'=>'required|unique:users,phone|max:50',
                    'emergency_phone'=>'nullable',
                    'address'=>'nullable|max:200',
                    'date_of_join'=>'required|date_format:Y-m-d',
                    'account_number'=>'nullable|integer',
                    'bank_name'=>'nullable|max:200',
                    'bank_location'=>'nullable|max:1000',
                    'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:10000',
                    'salary'=>'required|numeric',
                    'job_type'=>'required|in:part,full',
                    'document'=>'nullable',
                ];
            case "PUT":
                return [
                    'emp_code'=>'nullable|max:100',
                    'branch_id'=>'sometimes|exists:branches,id',
                    'department_id'=>'sometimes|exists:departments,id',
                    'job_title_id'=>'sometimes|exists:job_titles,id',
                    'first_name'=>'sometimes',
                    'last_name'=>'sometimes',
                    'email'=>'sometimes|email|unique:users,id',
                    'password'=>'sometimes',
                    'date_of_birth'=>'nullable|date_format:Y-m-d',
                    'personal_email'=>'nullable|email|max:200',
                    'gender'=>'nullable|in:male,female',
                    'email_status'=>'nullable|in:0,1',
//                    'phone'=>'sometimes|max:50|unique:users,phone,'.$this->id,
                    'phone'=>'sometimes|max:50|unique:users,phone,'.$this->route("employee"),
                    'emergency_phone'=>'nullable',
                    'address'=>'nullable|max:200',
                    'date_of_join'=>'sometimes|date_format:Y-m-d',
                    'account_number'=>'nullable|integer',
                    'bank_name'=>'nullable|max:200',
                    'bank_location'=>'nullable|max:1000',
                    'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:10000',
                    'salary'=>'sometimes|numeric',
                    'job_type'=>'sometimes|in:part,full',
                    'document'=>'nullable',
                ];


        }

    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
