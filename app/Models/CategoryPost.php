<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $table = 'category_post';

    use HasFactory;

    protected $fillable = [
        'category_id',
        'post_id'
    ];
}