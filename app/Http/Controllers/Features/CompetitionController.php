<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\Tournament;
use App\Models\TournamentPhotos;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index(){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            return view('info-kompetisi.index');
        }
    }

    public function pendidikan(){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $tournament = Tournament::where('age_category', null)->get();
            // $tournamentPhotos = Tournament::where('education_category', null)->with('tournament_photos')->get();
            return view('info-kompetisi.tingkat-sekolah', compact('tournament'));
        }
    }

    public function umur(){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $tournament = Tournament::where('education_category', null)->get();
            // $tournamentPhotos = Tournament::where('age_category', null)->with('tournament_photos')->get();
            return view('info-kompetisi.tingkat-umur', compact('tournament'));
        }
    }
}
