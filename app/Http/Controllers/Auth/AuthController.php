<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ActivationMail;
use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function view(){
        if(request()->isMethod('get')){
            if(!Sentinel::getUser()){
                return view('auth.login');
            }
            else{
                return redirect()->route('auth.dashboard');
            }
        }
    }

    public function login(){
        $form = request()->validate([
            'email'     => "required|email",
            'password'  => "required"
        ]);

        $credentials = array(
            'email'    => request()->email,
            'password' => request()->password,
        );

        try {
            if(Sentinel::authenticate($credentials)){
                $user = User::where('email', request()->email)->first();
                $activation = Activation::where('user_id', $user->id)->first();
    
                if($activation){
                    if($activation->completed == 0){
                        Mail::to($user->email)->send(new ActivationMail($user, $activation->code));
                        $message = 'Your account is not active. Check your email for activation.';
                        return back();
                    }
                }
                else{
                    $message = 'Your account is not active.';
                    return back();
                }
            }
            else{
                back();
            }

            return redirect()->route('auth.dashboard');
        } catch (\Throwable $th) {
            dd($th);
            // return back()->withInput()->withErrors(["error" => $th->getMessage()]);
        }
    }

    public function logout(){
        Sentinel::logout();
        return redirect()->route('auth.dashboard');
    }
}
