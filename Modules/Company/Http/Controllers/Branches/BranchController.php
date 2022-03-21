<?php

namespace Modules\Company\Http\Controllers\Branches;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Company\Actions\BranchActions;
use Modules\Company\DTO\BranchDTO;
use Modules\Company\Http\Requests\BranchRequest;

class BranchController extends Controller
{
    public $branchAction;

    public function __construct(BranchActions $branchAction)
    {
        $this->middleware(['auth', 'prevent-back-history','check-subscription','permission:Manage-branch']);
        $this->branchAction = $branchAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = $this->branchAction->get();
        return view('company::branches.index', ['branches' => $branches]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BranchRequest $request)
    {
        $data = new BranchDTO($request);
        $data = $data->dataFromRequest();
         $this->branchAction->save($data);
        return redirect()->route('branches.index')->with('success','Data Created Successfully');

    }

    public function edit(Request $request, $id)
    {
        $branch = $this->branchAction->find($id);
        if ($request->ajax()) {
            $view = view('company::branches.partails.edit')
                ->with([
                    'branch' => $branch
                ])
                ->render();
            return response()->json($view, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BranchRequest $request, $id)
    {
        $data = new BranchDTO($request);
        $data = $data->dataFromRequest();
         $this->branchAction->update($id, $data);
        return back()->with('success','Data Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */


    public function destroy($id)
    {
        $this->branchAction->delete($id);
        return back();
    }
}
