<?php

namespace Modules\User\DTO;
class UserDTO
{

    public $name;
    public $email;
    public $password;
    public $role;
    public array $branch_ids;
    public $user_id;



    public function __construct($request)
    {

        $this->name = $request->get('name');
        $this->email = $request->get('email');
        $this->role = $request->get('role');
        $this->branch_ids = $request->get('branch_ids')??[];
        if ($request->get('password')) $this->password =  bcrypt($request->get('password'));
        if ($request->get('user_id')) $this->user_id =  $request->get('user_id');


    }

    public function dataFromRequest()
    {
        $data =  json_decode(json_encode($this),true);
        if ($data['password'] == null) unset($data['password']);

        return $data;
    }



}
