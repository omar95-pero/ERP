<?php

namespace Modules\ESS\Actions;


use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\ESS\Contracts\AttendenceStatus;
use Modules\ESS\Contracts\AttendenceWorkFrom;
use Modules\ESS\Entities\ApplyLeave;

class ApplyLeavesAction
{
    protected $attendanceModel;

    public function __construct(ApplyLeave $model)
    {
        $this->attendanceModel = $model;
    }


}
