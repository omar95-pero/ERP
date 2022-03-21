<?php

namespace Modules\User\Observers;

use Modules\HR\Http\Traits\UploaderTrait;
use Modules\Tenant\Entities\User;
use Modules\User\Entities\Role;
use Spatie\Permission\Models\Permission;
use DB;
class UserObserver
{
    use UploaderTrait;

    /**
     * Handle the User "created" event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(User $user)
    {
        //create roles for each user
//        $this->roleCreation($user);
    }
//
//    function roleCreation($user){
//        $role = Role::create(['name' => 'Super Admin', 'tenant_id' => $user['tenant_id']]);
//        Role::create(['name' => 'HR', 'tenant_id' => $user['tenant_id']]);
//        Role::create(['name' => 'Accountant', 'tenant_id' => $user['tenant_id']]);
//        Role::create(['name' => 'ESS', 'tenant_id' => $user['tenant_id']]);
//        $permissions = Permission::all();
//        $role->syncPermissions($permissions);
//        $user->assignRole($role);
//    }
    public function deleted(User $user)
    {
        $this->deleteImage('users',$user->image);
        DB::table('employees')->where(['user_id'=>$user->id,'tenan_id'=>tenant('id')])->delete();
    }
}
