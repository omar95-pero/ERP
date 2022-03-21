<?php

namespace Modules\Support\Actions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BaseAction
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    function findAll($request)
    {
        $item = $this->model->When($request->search, function ($query) use ($request) {
            return $query->where('name', 'like', '%' . $request->search . '%');
        })->orderBy('id', 'ASC')->get();

        return $item;
    }

    public function findById($id)
    {
        $item =  $this->model->find($id);
        return $item;
    }

    function save($data)
    {
        $data['tenant_id'] = tenant('id');
        $item = $this->model->create($data);
        return $item;
    }


    function update($data, $id)
    {
        $item = $this->model->findOrFail($id);
        $item->update($data);

        return $item;
    }

    function delete($id)
    {
        $item = $this->model->destroy($id);
        return $item;
    }

}
