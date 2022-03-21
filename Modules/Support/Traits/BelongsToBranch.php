<?php


namespace Modules\Support\Traits;


use Modules\Support\Scope\BranchScope;

trait BelongsToBranch
{


    public static function bootBelongsToTenant()
    {
        static::addGlobalScope(new BranchScope());

    }

}
