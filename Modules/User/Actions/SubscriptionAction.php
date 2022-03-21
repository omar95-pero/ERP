<?php

namespace Modules\User\Actions;


use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\User\Entities\Role;

class SubscriptionAction
{
    protected $RoleModel;
    public function __construct()
    {
        $this->RoleModel = new Role();
    }

   public function renewSubscription(){
        $subscription = tenant()->subscriptions();
        $end_date = $subscription->latest()->first()['end_date'];
        if (round((strtotime($end_date) - time()) / 86400) > 7) return [];
        $new_subscription = $subscription->create([
            'start_date' => Carbon::parse($end_date) < Carbon::now() ? Carbon::now() : $end_date ,
            'end_date' => Carbon::createFromFormat('Y-m-d', $end_date)->addDays(15)
        ]);
        return $new_subscription;
   }


}
