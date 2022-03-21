<?php


namespace Modules\ESS\Contracts;


interface AttendenceStatus
{
    const OVERTIME = 1;
    const Present = 2;
    const LATE = 3;
    const Absent = 4;

}
