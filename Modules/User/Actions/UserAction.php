<?php


namespace Modules\User\Actions;


use Illuminate\Support\Facades\DB;
use Modules\Tenant\Entities\User;

class UserAction
{

    function findAll()
    {
        $users = User::whereDoesntHave('employee')->get();
        return $users;
    }


    function save($data)
    {
        $user = User::create($data);
        $user->assignRole($data['role']);
        $user->branches()->attach($data['branch_ids']);
        return $user;
    }

    function findById($id)
    {
        $user = User::find($id);
        return $user;
    }

    function findBy($key,$value){
        $user = User::where($key,$value)->get();
        return $user;
    }



    function update($userData,$id)
    {
        $user = User::find($id);
        $user->update($userData);
        DB::table('model_has_roles')->where('model_id',$id)->where('model_type',User::class)->delete();
        $user->assignRole($userData['role']);
        $user->branches()->sync($userData['branch_ids']);
        return $user;
    }

    function delete($id){
        $this->findById($id)->delete();
    }

}
