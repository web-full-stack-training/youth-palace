<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialProgramImage extends Model
{
    use HasFactory;

    protected $fillable = ['special_programs_id', 'image_path'];

    public function specialProgram()
    {
        return $this->belongsTo(SpecialProgram::class, 'id', 'special_programs_id');
    }
}
