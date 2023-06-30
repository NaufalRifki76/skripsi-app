<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Models\User;
use App\Mail\forgotPasswordEmail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Carbon\Carbon;

class ForgotPassController extends Controller
{
    public function index()
    {
        return view('lupa-password.kirim-email');
    }

    public function requestEmail(Request $request)
    {
        try {
            // validasi email
            $cek = $request->validate([
                'email' => 'required|exists:App\Models\User,email',
            ]);

            // dapatkan id database
            $user = User::where('email', $request->email)->first();

            // buat code activation baru
            $activation = Activation::create($user);

            // jika validasi lolos, maka kirim email; Jika tidak, return error yang mengecoh 
            // supaya tidak terjadi bruteforce dan doxing
            if($cek){
                Mail::to($user->email)->send(new forgotPasswordEmail($user, $activation->code));
            }
            else{
                return redirect()->route('auth.view')->with('success','Silahkan Cek Email Anda :)');
            }
            return redirect()->route('auth.view')->with('success','Silahkan Cek Email Anda :)');
        } 
        catch (\Throwable $th) {
            return redirect()->route('auth.view')->with('success','Silahkan Cek Email Anda :)');
        }
    }

    public function changePass(Request $request){
        if($request->isMethod('get')){
            $token = $request->token;
            return view('lupa-password.ganti-password', compact('token'));
        }

        $request->validate([
            'password'             => 'required|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'password_confirmation'=> 'required|same:password',
        ]);

        $activation = Activation::where('code', $request->token)->first();
        $user       = User::where('id', $activation->user_id)->first();

        $activation->completed = 1;
        $activation->completed_at = Carbon::now();
        $activation->save();

        $user->password = Hash::make($request->password);
        $user->save();
        
        return redirect()->route('auth.view')->with('success','Password Berhasil Diganti');;
    }
}
