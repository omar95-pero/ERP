<?php

namespace Modules\HR\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class JobTitle extends Model
{
    use HasFactory, BelongsToTenant;

    protected $fillable = ['title','tenant_id'];

    protected static function newFactory()
    {
        return \Modules\HR\Database\factories\JobTitleFactory::new();
    }
}
