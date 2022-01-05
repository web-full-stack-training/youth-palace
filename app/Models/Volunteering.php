<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteering extends Model
{
    use HasFactory;
    protected $fillable = ['full_name', 'image_path', 'email','description'];
}
