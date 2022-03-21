<?php

namespace Modules\Tenant\Database\Seeders;

use App\Events\NewTenantWithUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\Tenant\Entities\Tenant;
use Modules\Tenant\Entities\User;
use Stancl\Tenancy\Database\Models\Domain;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        /* `kafi`.`tenants` */
        $tenants = array(
            [
                'id' => '1',
                'company_name' => 'company1',
                'created_at' => '2021-12-21 11:15:33',
                'updated_at' => '2021-12-21 11:15:33',
                'data' => NULL
            ],
            [
                'id' => '2',
                'company_name' => 'company2',
                'created_at' => '2021-12-21 11:15:33',
                'updated_at' => '2021-12-21 11:15:33',
                'data' => NULL
            ],
            [
                'id' => '3',
                'company_name' => 'mallah',
                'created_at' => '2021-12-21 11:15:33',
                'updated_at' => '2021-12-21 11:15:33',
                'data' => NULL
            ],
            [
                'id' => '4',
                'company_name' => 'osama',
                'created_at' => '2021-12-21 11:15:33',
                'updated_at' => '2021-12-21 11:15:33',
                'data' => NULL
            ],
            [
                'id' => '5',
                'company_name' => 'omar',
                'created_at' => '2021-12-21 11:15:33',
                'updated_at' => '2021-12-21 11:15:33',
                'data' => NULL
            ],

        );

        $subscriptions = array(
            [
                'id' => '1',
                'tenant_id' => '1',
            ],
            [
                'id' => '2',
                'tenant_id' => '2',
            ],
            [
                'id' => '3',
                'tenant_id' => '3',
            ],
            [
                'id' => '4',
                'tenant_id' => '4',
            ],
            [
                'id' => '5',
                'tenant_id' => '5',
            ],

        );

        /* `kafi`.`domains` */
        $domains = array(
            [
                'id' => '1',
                'domain' => 'company1.kafi.local',
                'tenant_id' => '1',
                'created_at' => '2021-12-21 11:15:33',
                'updated_at' => '2021-12-21 11:15:33'
            ],
            [
                'id' => '2',
                'domain' => 'company2.kafi.net',
                'tenant_id' => '2',
                'created_at' => '2021-12-21 11:15:33',
                'updated_at' => '2021-12-21 11:15:33'
            ],
            [
                'id' => '3',
                'domain' => 'kafi.test',
                'tenant_id' => '3',
                'created_at' => '2021-12-21 11:15:33',
                'updated_at' => '2021-12-21 11:15:33'
            ],
            [
                'id' => '4',
                'domain' => 'osama.kafi',
                'tenant_id' => '4',
                'created_at' => '2021-12-21 11:15:33',
                'updated_at' => '2021-12-21 11:15:33'
            ],
            [
                'id' => '5',
                'domain' => 'kafi.local',
                'tenant_id' => '1',
                'created_at' => '2021-12-21 11:15:33',
                'updated_at' => '2021-12-21 11:15:33'
            ],            
            [
                'id' => '6',
                'domain' => 'kafi.admin',
                'tenant_id' => '5',
                'created_at' => '2021-12-21 11:15:33',
                'updated_at' => '2021-12-21 11:15:33'
            ],
        );


        /* `kafi`.`users` */
        $users = array(
            [
                'id' => '1',
                'name' => 'company1',
                'phone' => '+1 (212) 831-5684',
                'tenant_id' => '1',
                'email' => 'company1@example.com',
                'email_verified_at' => NULL,
                'password' =>Hash::make('123456789'),
                'remember_token' => NULL,
                'created_at' => '2021-12-21 11:15:33', 'updated_at' => '2021-12-21 11:15:33'
            ],
            [
                'id' => '2',
                'name' => 'company2',
                'phone' => '+1 (212) 831-5684',
                'tenant_id' => '2',
                'email' => 'company2@example.com',
                'email_verified_at' => NULL,
                'password' =>Hash::make('123456789'),
                'remember_token' => NULL,
                'created_at' => '2021-12-21 11:15:33', 'updated_at' => '2021-12-21 11:15:33'
            ],
            [
                'id' => '3',
                'name' => 'mallah',
                'phone' => '+1 (212) 831-5684',
                'tenant_id' => '3',
                'email' => 'mallah@example.com',
                'email_verified_at' => NULL,
                'password' =>Hash::make('123456789'),
                'remember_token' => NULL,
                'created_at' => '2021-12-21 11:15:33', 'updated_at' => '2021-12-21 11:15:33'
            ],
            [
                'id' => '4',
                'name' => 'osama',
                'phone' => '+1 (212) 831-5684',
                'tenant_id' => '4',
                'email' => 'osama@osama.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('123456789'),
                'remember_token' => NULL,
                'created_at' => '2021-12-21 11:15:33', 'updated_at' => '2021-12-21 11:15:33'
            ],
            [
                'id' => '5',
                'name' => 'omar',
                'phone' => '+1 (212) 831-5684',
                'tenant_id' => '5',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('123456'),
                'remember_token' => NULL,
                'created_at' => '2021-12-21 11:15:33', 'updated_at' => '2021-12-21 11:15:33'
            ],

        );

        $branches = array(
            [
                'name' => 'branch 1',
                'tenant_id' => '1',
            ],
            [
                'name' => 'branch 2',
                'tenant_id' => '1',
            ],
            [
                'name' => 'branch 3',
                'tenant_id' => '1',
            ],
            [
                'name' => 'branch 1',
                'tenant_id' => '4',
            ],
            [
                'name' => 'branch 2',
                'tenant_id' => '4',
            ],
            [
                'name' => 'branch 3',
                'tenant_id' => '4',
            ],

        );
       $departments = array(
            [
                'name' => 'department 1',
                'tenant_id' => '1',
            ],
            [
                'name' => 'department 2',
                'tenant_id' => '1',
            ],
            [
                'name' => 'department 3',
                'tenant_id' => '1',
            ],
            [
                'name' => 'department 1',
                'tenant_id' => '4',
            ],
            [
                'name' => 'department 2',
                'tenant_id' => '4',
            ],
            [
                'name' => 'department 3',
                'tenant_id' => '4',
            ],

        );
       $job_titles = array(
            [
                'title' => 'Manager',
                'tenant_id' => '1',
            ],
            [
                'title' => 'Assistant',
                'tenant_id' => '1',
            ],
            [
                'title' => 'Employee',
                'tenant_id' => '1',
            ],
            [
                'title' => 'Manager',
                'tenant_id' => '4',
            ],
            [
                'title' => 'Assistant',
                'tenant_id' => '4',
            ],
            [
                'title' => 'Employee',
                'tenant_id' => '4',
            ],

        );
        DB::table('tenants')->insert($tenants);
        DB::table('subscriptions')->insert($subscriptions);
        DB::table('domains')->insert($domains);
        DB::table('branches')->insert($branches);
        DB::table('departments')->insert($departments);
        DB::table('job_titles')->insert($job_titles);
//        DB::table('users')->insert($users);
        foreach ($users as $user){
            User::create($user);
            event(new \Modules\User\Events\NewTenantWithUser($user));
        }
    }
}
