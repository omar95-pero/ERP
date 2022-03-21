<?php

namespace Modules\Company\Actions;

use Illuminate\Support\Facades\File;
use Modules\Company\Entities\Branch;

//use Modules\Support\Helpers\UploaderHelper;

class BranchActions
{
//    use UploaderHelper;
    public function get()
    {
        return Branch::select('id','name')->get();
    }

    public function find($id)
    {
        return Branch::find($id);
    }

    public function save($data)
    {
        return  Branch::create($data);

    }

    public function update($id, $data)
    {
        $branch = $this->find($id);
        $branch->update($data);

    }

    public function delete($id)
    {
        $branch = $this->find($id);
        return $branch->delete();
    }

}
