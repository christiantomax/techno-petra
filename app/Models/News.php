<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'title',
        'content',
        'start_date',
        'end_date',
        'news_for',
        'is_active',
    ];
}
