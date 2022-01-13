<?php

namespace App\Http\Controllers;
use App\Models\SpecialProgram;
use Illuminate\Http\Request;

class SpecialProgramsController extends Controller
{
    public function index() {

        $showSpecialProgram = SpecialProgram::with('specialProgramImages')->limit(15)->get();
        return view ('special-programs.special-programs', compact('showSpecialProgram'));
    }

    public function getPrograms($skip, $limit)
    {
        $programs = SpecialProgram::with('specialProgramImages')
            ->skip($skip)->limit($limit)->get();

  //     return
    }
}

