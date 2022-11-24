<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamRequireDocument extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_team',
        'name',
        'type',
        'ext',
        'sort',
        'is_active',
    ];
}
