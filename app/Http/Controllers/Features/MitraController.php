<?php

namespace App\Http\Controllers\Features;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RentItems;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class MitraController extends Controller
{
    public function index(){
        if(!Sentinel::getUser()) {
            return redirect()->route('auth.login');
        } else{
            $rent = RentItems::all();
            return view('mitra.join', compact('rent'));
        }
    }

    public function store(){
        
    }
}
