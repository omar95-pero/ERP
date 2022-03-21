<?php

namespace Modules\Tenant\Entities;

use Illuminate\Support\Facades\Auth;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant
{
    use HasDomains;

    protected $fillable=['company_name'];
    protected $appends =['rest_days_in_subscription'];
    public function getIncrementing()
    {
        return true;
    }
    public static function getCustomColumns(): array
    {
        return [
            'id',
            'company_name'
        ];
    }

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }

    public function getRestDaysInSubscriptionAttribute(){
        return round((strtotime(tenant()->subscriptions()->latest()->first()->end_date) - time()) / 86400);
    }

}
