<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        return view('lapangan.index');
    }

}
