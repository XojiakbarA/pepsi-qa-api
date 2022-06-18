<?php

namespace App\Enums;

enum ShiftValues : string
{
    case Day = 'day';
    case Night = 'night';
    case Weekend = 'weekend';
    case Leave = 'leave';
    case SickLeave = 'sick_leave';
}