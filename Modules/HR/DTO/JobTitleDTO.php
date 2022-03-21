<?php

namespace Modules\HR\DTO;
class JobTitleDTO
{

    public $title;



    public function __construct($request)
    {

        $this->title = $request->get('title');


    }

    public function dataFromRequest()
    {
        $data =  json_decode(json_encode($this),true);

        return $data;
    }



}
