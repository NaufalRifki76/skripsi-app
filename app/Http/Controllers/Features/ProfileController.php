<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\RentOrder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        if(!Sentinel::getUser()) {
            return redirect()->route('return.login')->with('failed', 'Silahkan login terlebih dahulu!');
        } else{
            $user = Sentinel::getUser();
            $orders = RentOrder::where('user_id', $user->id)->get();
            return view('riwayat-pemesanan.index', compact('orders'));
        }
    }
}
