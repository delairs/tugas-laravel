<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Import HasFactory
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // Add the trait

    protected $fillable = ['title', 'author', 'slug', 'body'];
}
