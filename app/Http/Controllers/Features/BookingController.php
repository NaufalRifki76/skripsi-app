<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            return view('lapangan.index');
        }
    }

}
