<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
    use HasFactory;

    protected $fillable = ['first_title', 'first_description', 'second_title', 'second_description', 'third_title', 'third_description'];
}
