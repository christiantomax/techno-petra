<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_period',
        'id_user',
        'name',
        'nrp_leader',
        'member',
        'slug',
        'is_active',
    ];
}
