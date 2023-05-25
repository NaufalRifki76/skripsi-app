<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ActivationMail;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function create(Request $request){
        // dd($request->name);
        $validated = $request->validate([
            'name'                  => 'required|max:255',
            'email'                 => ['required','unique:App\Models\User', 'email'],
            'no_telephone'          => 'required',
            'password'              => ['required', 'confirmed', Password::min(8), 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
            'password_confirmation' => ['required', 'min: 8', 'same:password']
        ]);
        return redirect()->back()->withInput()->withErrors($validated)->with('failed', 'cek form anda!');

        $credentials = [
            'name'              => $validated['name'],
            'email'             => $validated['email'],
            'password'          => $validated['password'],
            'no_telephone'      => $validated['no_telephone'],
        ];

        if (!$validated) {
            return Redirect::route('register-user')->with('failed', 'cek form anda!');
        }

        // dd($credentials);

        $user = Sentinel::register($credentials);
        $activation = Activation::create($user);
        Mail::to($user->email)->send(new ActivationMail($user, $activation->code));
        if ($activation) {
            return Redirect::route('auth.view')->with('success', 'Silahkan cek inbox email anda untuk verifikasi!');
        }
    }
}
