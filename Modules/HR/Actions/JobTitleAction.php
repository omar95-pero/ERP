<?php

namespace Modules\HR\Actions;


use Modules\HR\Entities\JobTitle;

class JobTitleAction
{

    public function get()
    {
      return JobTitle::select('id','title')->get();

    }

    public function find($id)
    {
        return JobTitle::find($id);
    }

    public function save($data)
    {
          JobTitle::create($data);
    }

    public function update($id, $data)
    {
        $jobTitile = $this->find($id);

        $jobTitile->update($data);

    }

    public function delete($id)
    {
        $jobTitile = $this->find($id);
        $jobTitile->delete();
    }

}
