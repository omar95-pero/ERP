<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\Company\Entities\Branch;
use Modules\Tenant\Entities\User;
use Modules\User\Actions\UserAction;
use Modules\User\DTO\UserDTO;
use Modules\User\Entities\Role;
use Modules\User\ViewModel\UserViewModel;

class UserController extends Controller
{
    private $userAction;
    public function __construct(UserAction $userAction)
    {
        $this->middleware(['auth:web','prevent-back-history','check-subscription']);
        $this->middleware('permission:Manage-user', ['except' => ['dashboard']]);
        $this->userAction = $userAction;
    }

    public function dashboard(){
        return view('user::index');
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $users = $this->userAction->findAll();
        $viewModel = new UserViewModel();
        return view('user::users.index',compact('users','viewModel'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = (new UserDTO($request))->dataFromRequest();
        $this->userAction->save($data);
        return redirect('/admin/users')->with('success','User Created Successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $id = $_GET['id'];
        $user = $this->userAction->findById($id);
        $userRole = $user->roles->pluck('id')->all();
        $userBranches = $user->branches->pluck('id')->all();
        return ['roles' => $userRole,'branches' => $userBranches];
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        $data = (new UserDTO($request))->dataFromRequest();
        $this->userAction->update($data,$data['user_id']);
        return redirect('/admin/users')->with('updated','User updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->userAction->delete($id);
        return redirect()->back()->with('deleted','User deleted Successfully');

    }
}
