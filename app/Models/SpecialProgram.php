<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SpecialProgram extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    /**
     * @return HasMany
     */
    public function specialProgramImages(): HasMany
    {
        return $this->hasMany(SpecialProgramImage::class, 'special_programs_id', 'id');
    }
}
