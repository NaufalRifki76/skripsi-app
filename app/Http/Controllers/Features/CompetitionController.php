<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index(){
        return view('info-kompetisi.index');
    }

    public function pendidikan(){
        return view('info-kompetisi.tingkat-sekolah');
    }

    public function umur(){
        return view('info-kompetisi.tingkat-umur');
    }
}
