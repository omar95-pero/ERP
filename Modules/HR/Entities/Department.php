<?php

namespace Modules\HR\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class Department extends Model
{
    use HasFactory, BelongsToTenant;

    protected $fillable = [
        'name',
        'tenant_id',
    ];

    protected static function factory()
    {
        return \Modules\HR\Database\factories\DepartmentFactory::new();
    }
}
