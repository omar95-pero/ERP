<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Model::unguard();

        // $this->call("OthersTableSeeder");
        $permissions = [
            'Manage-user',
            'Manage-employee',
            'Manage-department',
            'Manage-branch',
            'Manage-subscription',
            'Manage-role',
            'Manage-ess',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

    }
}
