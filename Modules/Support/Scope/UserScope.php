<?php


namespace Modules\Support\Scope;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\Company\Entities\Branch;

class UserScope implements Scope
{


    public function apply(Builder $builder, Model $model)
    {

        if( Auth::hasUser() ) {

            $branch_ids = Auth::user()->branches->pluck('id');
            $user_ids = DB::table("branch_user")
                        ->whereIn("branch_user.branch_id",$branch_ids)
                        ->pluck('branch_user.user_id')
                        ->all();
            $employee_ids = DB::table("employees")
                ->whereIn("employees.branch_id",$branch_ids)
                ->pluck('employees.user_id')
                ->all();

            $ids = array_merge($user_ids, $employee_ids);
            // some constrains based on the $user object
            $builder->whereIn($model->qualifyColumn('id'),$ids);
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
