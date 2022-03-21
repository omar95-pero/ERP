<?php

namespace Modules\User\Tests\Feature;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Modules\Company\Entities\Branch;
use Modules\Tenant\Database\Seeders\TenantDatabaseSeeder;
use Modules\Tenant\Entities\User;
use Modules\User\Database\Seeders\UserDatabaseSeeder;
use Modules\User\Entities\Role;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserFeatureTest extends TestCase
{
    use RefreshDatabase;

    public $branch;
    public function setUp() : void
    {
        parent::setUp();
        (new DatabaseSeeder())->call(UserDatabaseSeeder::class);
        (new DatabaseSeeder())->call(TenantDatabaseSeeder::class);
        $this->branch = Branch::first();

    }
    private function createAdminUser(){
       $user = User::create([
            'name'=> 'test',
            'email' => 'test@test.com',
            'password' => bcrypt('12345679'),
           'tenant_id' => 4
        ]);
       $user->assignRole('Super Admin');
       return $user;

    }

    private function createHRUser(){
        $user = User::create([
            'name'=> 'hr',
            'email' => 'hr@hr.com',
            'password' => bcrypt('12345679'),
            'tenant_id' => 4
        ]);
        $user->branches()->sync([$this->branch['id']]);
        $role = Role::where('name','HR')->first();
        $role->syncPermissions(['Manage-user']);
        $user->assignRole('HR');
        return $user;

    }

    private function createEmpUser(){
        $user = User::create([
            'name'=> 'emp',
            'email' => 'emp@emp.com',
            'password' => bcrypt('12345679'),
            'tenant_id' => 4
        ]);
        $user->branches()->sync([$this->branch['id']]);
        $user->assignRole('ESS');
        return $user;

    }

    private function createEmpUserInDifferentBranch(){
        $user = User::create([
            'name'=> 'emp123',
            'email' => 'emp123@emp.com',
            'password' => bcrypt('12345679'),
            'tenant_id' => 4
        ]);
        $branch = Branch::where('id','!=',$this->branch['id'])->first();
        $user->branches()->sync([$branch['id']]);
        $user->assignRole('ESS');
        return $user;

    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_all_users_as_admin()
    {
        $user = $this->createAdminUser();
        $response = $this->actingAs($user)->get('http://osama.kafi/admin/users');
        $response->assertSee($user['email']);
    }

    public function test_other_users_not_show_admin(){
        $user = $this->createHRUser();
        $response = $this->actingAs($user)->get('http://osama.kafi/admin/users');
        $response->assertDontSee('osama@osama.com');

    }

    public function test_roled_user_see_user_in_same_branch(){
        $HR = $this->createHRUser();
        $Emp = $this->createEmpUser();
        $response = $this->actingAs($HR)->get('http://osama.kafi/admin/users');
        $response->assertSee($Emp['name']);
    }

    public function test_roled_user_dont_see_user_in_different_branch(){
        $HR = $this->createHRUser();
        $Emp = $this->createEmpUserInDifferentBranch();
        $response = $this->actingAs($HR)->get('http://osama.kafi/admin/users');
        $response->assertDontSee($Emp['email']);
    }
    public function test_redirect_to_login_if_not_Authenticated(){
        $response = $this->get('http://osama.kafi/admin/users');
        $response->assertRedirect('http://osama.kafi/admin/login');
        $response->assertRedirectContains('login');
    }
}
