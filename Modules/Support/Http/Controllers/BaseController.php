<?php

namespace Modules\Support\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{

    protected $action;
    protected $route;
    protected $view;
    protected $module;

    public function __construct($action, $route, $view, $module)
    {
        $this->action = $action;
        $this->route = $route;
        $this->view = $view;
        $this->module = $module;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
//        dd('asdasd');

        $items = $this->action->findAll($request);
        return view($this->module . '::' . $this->view . '.index', ['departments' => $items]);
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view($this->module . '::' . $this->view . '.create');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $item = $this->action->find($id);

        return view($this->module . '::' . $this->view . '.show', compact('item'));
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $item = $this->action->find($id);
        return view($this->module . '::' . $this->view . '.edit', compact('item'));
    }



    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {

        $item = $this->action->delete($id);

        if ($item) {
            return redirect()->route($this->route . '.index')->with('success', 'deleted successfully');
        } else {
            return redirect()->back()->with('error', 'deleted failed');
        }
    }

}
