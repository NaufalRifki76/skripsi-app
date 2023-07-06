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

    public function pendidikan(Request $request){
        if(request()->isMethod('get')){
            if(!Sentinel::getUser()) {
                return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
            }
            $tournament = Tournament::where('age_category', null)->get();
            return view('info-kompetisi.tingkat-sekolah', compact('tournament'));
        }
        $tournament = Tournament::when($request->tour_name, function($q) use($request){
            $q->where('tournament_name', 'LIKE', '%'.$request->tour_name.'%');
        })
        ->when($request->category != '-', function($q) use($request){
            $q->where('education_category', 'LIKE', '%'.$request->category.'%');
        })
        ->where('age_category', null)
        ->get();

        return view('info-kompetisi.tingkat-sekolah', compact('tournament'));
    }

    public function umur(Request $request){
        if(request()->isMethod('get')){
            if(!Sentinel::getUser()) {
                return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
            }
            $tournament = Tournament::where('education_category', null)->get();
            return view('info-kompetisi.tingkat-umur', compact('tournament'));
        }

        $tournament = Tournament::when($request->tour_name, function($q) use($request){
            $q->where('tournament_name', 'LIKE', '%'.$request->tour_name.'%');
        })
        ->when($request->category != '-', function($q) use($request){
            $q->where('age_category', 'LIKE', '%'.$request->category.'%');
        })
        ->where('education_category', null)
        ->get();

        return view('info-kompetisi.tingkat-umur', compact('tournament'));
    }

    public function detail($id){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else {
            $tournament = Tournament::where('id', $id)->first();
            return view('info-kompetisi.detail', compact('tournament'));
        }
    }
}
