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
        app()->setLocale('id');
        $validated = $request->validate([
            'name'                  => 'required|max:255',
            'email'                 => ['required','unique:App\Models\User', 'email'],
            'no_telephone'          => 'required',
            'password'              => ['required', 'confirmed', Password::min(8), 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
            'password_confirmation' => ['required', 'min: 8', 'same:password']
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->with('failed', 'cek form anda!');
        }

        $credentials = [
            'name'              => $validated['name'],
            'email'             => $validated['email'],
            'password'          => $validated['password'],
            'no_telephone'      => $validated['no_telephone'],
        ];

        // dd($credentials);

        $user = Sentinel::register($credentials);
        $activation = Activation::create($user);
        $role = Sentinel::findRoleBySlug('user');
        $role->users()->attach($user);
        Mail::to($user->email)->send(new ActivationMail($user, $activation->code));
        if ($activation) {
            return Redirect::route('auth.view')->with('success', 'Registrasi berhasil, silahkan cek email anda untuk melakukan verifikasi!');
        }
    }
}
