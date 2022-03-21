<?php


namespace Modules\Support\Scope;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\Company\Entities\Branch;

class BranchScope implements Scope
{


    public function apply(Builder $builder, Model $model)
    {

        if( Auth::hasUser() ) {

            $branch_ids = Auth::user()->branches->pluck('id');
            // some constrains based on the $user object
            $builder->whereIn($model->qualifyColumn('branch_id'),$branch_ids);
        }
    }

    public function extend(Builder $builder)
    {
        if( Auth::hasUser() ) {

            $role_name = Auth::user()->roles[0]['name'];
            if ($role_name == 'Super Admin')
            return $builder->withoutGlobalScope($this);
        }

    }
}
