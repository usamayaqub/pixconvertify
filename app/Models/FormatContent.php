<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormatContent extends Model
{
    use HasFactory;

    protected $fillable = [
           'format_id',
           'heading',
           'content',
           'image',
    ];
}
