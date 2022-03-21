<?php

namespace Modules\ESS\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApplyLeave extends Model
{
    use HasFactory;

    protected $table = 'leaves';

    protected $fillable = [
        'employee_id',
        'number_of_dayes',
        'leave_type',
        'reason',
        'attachment',
    ];

    protected static function newFactory()
    {
        return \Modules\ESS\Database\factories\LeaveFactory::new();
    }
}
