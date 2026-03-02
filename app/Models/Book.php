<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Explicit table name because your table is singular
    protected $table = 'book';

    // Fields that are mass assignable
    protected $fillable = [
        'title',
        'author',
        'description',
    ];
}