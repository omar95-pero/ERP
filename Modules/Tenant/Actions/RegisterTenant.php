<?php

namespace Modules\Tenant\Actions;


use Illuminate\Support\Facades\Hash;
use Modules\Tenant\Entities\Subscription;
use Modules\Tenant\Entities\Tenant;
use Modules\Tenant\Entities\User;
use Stancl\Tenancy\Database\Models\Domain;

class RegisterTenant
{

    public function register($data)
    {
        $tenant = $this->addTenant($data);
        $admin = $this->AddCredentials($data, $tenant->id);
        event(new \Modules\User\Events\NewTenantWithUser($admin));
        $this->AddSubscription($admin);
    }

    private function addTenant($data)
    {
        $tenant = Tenant::create($data);
        $data['tenant_id'] = $tenant->id;

        // remove spaces and concat with kafi.local
        $data['domain'] = strtolower(str_replace(' ', '', $data['domain']));
        $data['domain'] = $data['domain'] . '.' . env('DOMAIN', 'localhost');


        Domain::create(['domain' => $data['domain'], 'tenant_id' => $tenant->id]);
        return $tenant;
    }

    private function AddCredentials($data, $tenant_id)
    {
        $data['name'] = $data['company_name'];
        $data['tenant_id'] = $tenant_id;
        $data['password'] = Hash::make($data['password']);

        return $admin = User::create($data);
    }

    private function AddSubscription($user)
    {
        $user->subscriptions()->create();
    }
}
