<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class BookingController extends Controller{
    public function index(){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            $venue = Venue::all();
            return view('lapangan.index', compact('venue'));
        }
    }


}
