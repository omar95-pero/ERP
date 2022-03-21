<?php

namespace Modules\Company\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Tenant\Entities\User;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class Branch extends Model
{
    use HasFactory, BelongsToTenant;

    protected $fillable = ['tenant_id','name'];

    protected static function factory()
    {
        return \Modules\Company\Database\factories\BranchFactory::new();
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
