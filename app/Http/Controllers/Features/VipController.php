<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class VipController extends Controller
{
    public function index(){
        return view('subscribe.index');
    }

    public function subscribe(){
        $user = Sentinel::getUser();
        $user->vip_status = 1;
        $user->save();
        return redirect()->route('auth.dashboard')->with('success', 'Anda telah berlangganan paket VIP!');
    }
}
