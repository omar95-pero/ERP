<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\User\Actions\RoleAction;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public $roleAction;

    public function __construct(RoleAction $roleAction)
    {
        $this->middleware(['auth','prevent-back-history','check-subscription','permission:Manage-role']);
        $this->roleAction = $roleAction;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $roles = $this->roleAction->findAll(['id','name','created_at']);
        $permissions = Permission::all(['id','name']);
        return view('user::roles.index',['roles' => $roles,'permissions' => $permissions]);
    }


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $this->roleAction->saveRole($data);
        return redirect('/admin/roles')->with('success','Role Created Successfully');
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return array
     */
    public function edit($id)
    {
        $id = $_GET['id'];
//        $role = $this->roleAction->findById($id);
//        $permissions = Permission::get();
        return $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id')
            ->all();
//        return view('useer::roles.edit',['role' => $role,'permissions' => $permissions,'rolePermissions' => $rolePermissions]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        $data = $request->except('_token');
        $this->roleAction->update($data,$data['role_id']);
        return redirect('/admin/roles')->with('updated','Role updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->roleAction->delete($id);
        return redirect()->back()->with('deleted','Role deleted Successfully');

    }
}
