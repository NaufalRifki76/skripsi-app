<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\FieldDetail;
use App\Models\Venue;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class RefundController extends Controller{
    public function snk(){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            return view('pengembalian-dana.syarat-ketentuan');
        }
    }

    public function index(){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $user = Sentinel::getUser();
            $venue = Venue::all();
            return view('pengembalian-dana.index', compact('user', 'venue'));
        }
    }

    public function dependentfield($id){
        $field = FieldDetail::where('venue_id', $id)->get();
        return response()->json($field);
    }
}
