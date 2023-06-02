<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ActivationMail;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Venue;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index(){
        $venue = Venue::all();
        if (Sentinel::check()) {
            $userId = Sentinel::getUser()->id;
            $role = UserRole::where('user_id', $userId)->first();
            if ($role->role_id == 2) {
                return view('home.index', compact('venue'));
            } elseif ($role->role_id == 3) {
                return view('layout.penyedia-lapangan.index');
            }
        } else {
            return view('home.index', compact('venue'));
        }
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

    public function returnLogin(){
        return view('auth.login');
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
                        return redirect()->route('auth.dashboard');
                    }
                }
                else{
                    $message = 'Your account is not active.';
                    return redirect()->route('auth.dashboard');
                }
            }
            else{
                return redirect()->route('return.login')->with('failed', 'Username atau password anda salah!');
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
