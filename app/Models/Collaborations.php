<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborations extends Model
{
    use HasFactory;
    protected $fillable = ['img_path', 'name'];

    public function getSocialMediasAttribute($value)
    {
        return json_decode($value);
    }
}
