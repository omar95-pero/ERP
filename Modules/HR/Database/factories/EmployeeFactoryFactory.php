<?php
namespace Modules\HR\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\HR\Entities\Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $data['emp_code']=$this->faker->postcode();
        $data['user_id']=function () {
            return factory(\Modules\HR\Entities\User::class)->create()->id;
        };
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
        $data['document'] = $this->upload($this->document,'employee_documents');
        
        
        return $data;
        
    }
}

