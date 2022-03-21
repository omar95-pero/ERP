<?php

namespace Modules\ESS\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Tenant\Entities\User;
// use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'clock_in',
        'clock_out',
        'hours_per_day',
        'status',
        'working_from',
        'notes',
    ];

    protected static function newFactory()
    {
        return \Modules\ESS\Database\factories\AttendanceFactory::new();
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
