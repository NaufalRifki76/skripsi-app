<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request; 

class VerificationController extends Controller
{
    public $validLink;
    public $token;

    public $password;
    public $repassword;

    protected $user_id;

    protected function parsingUrl(Request $request)
    {
        try {
            $activation = Activation::where('code', $request->token)->first();
            if($activation){
                if($activation->completed == 0){
                    $userDb = Sentinel::findById($activation->user_id);

                    $activation->completed    = 1;
                    $activation->completed_at = date('Y-m-d H:i:s');
                    $activation->save();
                    
                    $userDb->email_verified_at = date('Y-m-d H:i:s');
                    $userDb->save();

                    $request->validLink = true;
                    $request->user_id   = $userDb->id;
                }
                else{
                    $request->validLink = false;
                    session()->flash("error", "Link expired. Akun kamu sudah terverifikasi.");
                }
            }
            else{
                $request->validLink = false;
                session()->flash("error", "Link tidak valid.");
            }
        }
        catch (\Exception $e) {
            $request->validLink = false;
            session()->flash("error", "Link tidak valid.");
        }
        $validLink  = $request->validLink;
        return view('auth.activation', compact('validLink'))->with('success', 'Akun telah terverifikasi!');
    }
}
