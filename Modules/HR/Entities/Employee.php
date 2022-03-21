<?php

namespace Modules\HR\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Company\Entities\Branch;
use Modules\ESS\Entities\Attendance;
use Modules\Support\Scope\BranchScope;
use Modules\Tenant\Entities\User;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;
class Employee extends Model
{
    use HasFactory,BelongsToTenant,SoftDeletes;

    protected $fillable = ['tenant_id',
        'name',
        'date_of_birth',
        'gender',
        'phone',
        'address',
        'user_id',
        'emp_code',
        'email',
        'password',
        'branch_id',
        'job_title_id',
        'job_title_id',
        'department_id',
        'date_of_join',
        'document',
        'emergency_phone',
        'personal_email',
        'account_holder_name',
        'bank_location',
        'account_number',
        'bank_name',
        'branch_location',
        'salary_type',
        'job_type',
        'salary',
        'email_status',
        'created_by',
        'is_active'];


        public function department(){
            return $this->belongsTo(Department::class);
        }
        public function jobTitle(){
            return $this->belongsTo(JobTitle::class);
        }
        public function branch(){
            return $this->belongsTo(Branch::class);
        }
        public function user(){
            return $this->belongsTo(User::class,'user_id','id');
        }
    protected static function newFactory()
    {
        return \Modules\HR\Database\factories\EmployeeFactory::new();
    }

    public static function boot()
    {

        parent::boot();
        static::addGlobalScope(new BranchScope());

    }
}
