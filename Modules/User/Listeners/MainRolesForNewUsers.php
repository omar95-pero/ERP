<?php

namespace Modules\User\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Modules\Tenant\Entities\User;
use Modules\User\Entities\Role;
use Spatie\Permission\Models\Permission;

class MainRolesForNewUsers
{

    public function handle($event)
    {
        $this->roleCreation($event->user);
    }

    function roleCreation($user){
        $role = Role::create(['name' => 'Super Admin', 'tenant_id' => $user['tenant_id']]);
        Role::create(['name' => 'HR', 'tenant_id' => $user['tenant_id']]);
        Role::create(['name' => 'Accountant', 'tenant_id' => $user['tenant_id']]);
        Role::create(['name' => 'ESS', 'tenant_id' => $user['tenant_id']]);
        $permissions = Permission::all();
        $role->syncPermissions($permissions);
        User::find($user['id'])->assignRole($role);
    }
}
