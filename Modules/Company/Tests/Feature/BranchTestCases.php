<?php

namespace Modules\Company\Tests\Feature;

use Modules\Tenant\Entities\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BranchTestCases extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth_when_get_branches()
    {
//        $user = User::factory()->count(1)->create();
//        dd($user);
        $this->actingAs(User::find(4))
            ->get('http://kafi.local/admin/branches')
            ->assertStatus(200);
    }
    public function test_create_branch(){
        $branch = [
            'tenant_id'=>4,
            'name'=>'omar pero',
        ];

        $this->actingAs(User::find(4))
            ->post('http://kafi.local/admin/branches', $branch)
            ->assertStatus(200);

    }
}
