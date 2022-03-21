<?php

namespace Modules\Tenant\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = ['start_date','end_date','tenant_id'];

    protected static function newFactory()
    {
        return \Modules\Tenant\Database\factories\SubscriptionFactory::new();
    }
}
