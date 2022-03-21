<?php

namespace Modules\User\ViewModel;


use Modules\Company\Entities\Branch;
use Modules\User\Entities\Role;

class UserViewModel
{

    public function __construct()
    {

    }

    public function branches()
    {
       return Branch::select('id','name')->get();
    }

    public function roles()
    {
        return  $roles = Role::all(['id','name']);
    }

}
