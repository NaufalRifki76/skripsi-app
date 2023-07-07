<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class MiscController extends Controller{
    public function aboutus(){
        return view('tentang-kami.index');
    }
}
