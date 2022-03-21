<?php

namespace Modules\User\Actions;


use Illuminate\Support\Facades\DB;
use Modules\User\Entities\Role;

class RoleAction
{
    protected $RoleModel;
    public function __construct()
    {
        $this->RoleModel = new Role();
    }

    function findAll($select=['*'])
    {
        $roles = $this->RoleModel->orderBy('id','ASC')->get($select);
        return $roles;
    }


    function findById($id)
    {
        $role =  $this->RoleModel->find($id);
        return $role;
    }

    function saveRole($data)
    {

        $role = $this->RoleModel->create(['name' => $data['name'],'tenant_id' => tenant('id')]);
        $permissions = $data['permission'];
        $role->syncPermissions($permissions);
        return $role;
    }


    function update($roleData,$id)
    {
        $role = $this->RoleModel->find($id);
        $role->name = $roleData['name'];
        $role->save();

        $role->syncPermissions($roleData['permission']);
        return $role;
    }

    function delete($id){

        DB::table("roles")->where('id',$id)->delete();
    }


}
