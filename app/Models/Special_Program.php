<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Special_Program extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image_path'];

}
