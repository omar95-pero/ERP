<?php

namespace Modules\HR\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Modules\Tenant\Entities\Tenant;
use Modules\Tenant\Entities\User;

class DepartmentTest extends TestCase
{

    // use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * A department test example.
     *
     * @return void
     */
    public function test_a_department_request()
    {
        $user = User::find(1);

        // $tenant = Tenant::create([
        //     'id' => '1',
        //     'company_name' => 'company1',
        //     'created_at' => '2021-12-21 11:15:33',
        //     'updated_at' => '2021-12-21 11:15:33',
        //     'data' => NULL
        // ]);


        // $domain = Tenant::create([
        //     'id' => '1',
        //     'domain' => 'company1.kafi.local',
        //     'tenant_id' => $tenant->id,
        //     'created_at' => '2021-12-21 11:15:33',
        //     'updated_at' => '2021-12-21 11:15:33'
        // ]);

        // $user = User::create([
        //     'id' => '1',
        //     'name' => 'company1',
        //     'phone' => '+1 (212) 831-5684',
        //     'tenant_id' =>  $tenant->id,
        //     'email' => 'company1@example.com',
        //     'email_verified_at' => NULL,
        //     'password' => Hash::make('123456789'),
        //     'remember_token' => NULL,
        //     'created_at' => '2021-12-21 11:15:33', 'updated_at' => '2021-12-21 11:15:33'
        // ]);

        $response = $this->actingAs($user, 'web')->get('http://kafi.local/admin/hr/departments');
        // $response = $this->get('/kafi.local/admin/hr/departments');

        $response->assertStatus(200);
    }
}
