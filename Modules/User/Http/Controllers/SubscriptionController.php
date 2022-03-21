<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Actions\SubscriptionAction;

class SubscriptionController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth','prevent-back-history','permission:Manage-subscription']);
    }

    public function renewSubscription(SubscriptionAction $subscriptionAction){
        $subscription = $subscriptionAction->renewSubscription();
        if ($subscription) return back()->with('success','Subscription Renewed Successfully');
        return back()->with('success','It Is too Early For Renew');
    }


}
