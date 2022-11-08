<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;
    protected $fillable = [
        'year',
        'semester',
        'start_date_vote',
        'end_date_vote',
        'start_date_submission',
        'end_date_submission',
        'is_active',
    ];
}
