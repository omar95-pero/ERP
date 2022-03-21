<?php

namespace Modules\Tenant\Entities;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\HasApiTokens;
use Modules\Company\Entities\Branch;
use Modules\HR\Entities\Employee;
use Modules\ESS\Entities\Attendance;
use Modules\Support\Scope\BranchScope;
use Modules\Support\Scope\UserScope;
use Modules\User\Entities\Role;
use Spatie\Permission\Traits\HasRoles;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;
use Modules\Tenant\Database\factories\UserFactory;

class User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable,BelongsToTenant,HasRoles,SoftDeletes;

    use HasApiTokens, HasFactory, Notifiable, BelongsToTenant, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tenant_id',
        'name',
        'email',
        'image',
        'password',
        'user_type',
        'phone'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function branches(){
        return $this->belongsToMany(Branch::class);
    }
  public function employee(){
        return $this->hasOne(Employee::class);
  }

    protected static function factory()
    {
        return UserFactory::new();
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'user_id');
    }

    public static function boot()
    {

        parent::boot();
        static::addGlobalScope(new UserScope());

    }

}
