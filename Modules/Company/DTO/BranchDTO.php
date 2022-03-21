<?php

namespace Modules\Company\DTO;
class BranchDTO
{

    public $name;



    public function __construct($request)
    {

        $this->name = $request->get('name');


    }

    public function dataFromRequest()
    {
        $data =  json_decode(json_encode($this),true);

        return $data;
    }



}
