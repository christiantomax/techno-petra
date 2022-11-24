<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamDocument extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_team',
        'id_team_require_documents',
        'type',
        'name',
        'ext',
        'sort',
        'url_document',
        'file_size',
        'is_active',
    ];
}
