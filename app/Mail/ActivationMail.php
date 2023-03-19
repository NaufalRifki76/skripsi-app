<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ActivationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $code)
    {
        //
        $this->user  = $user;
        $this->code  = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user  = $this->user;
        $code  = $this->code;

        return $this->subject('Instruksi untuk mengaktivasi akun anda.')
                    ->view('email.email-activation', compact('user','code'));
    }
}
