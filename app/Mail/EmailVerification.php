<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $email;
    protected $remember_token;

    public function __construct($email, $remember_token)
    {
        $this->email = $email;
        $this->remember_token = $remember_token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('no_reply@sendab.com')
            ->markdown('emails.EmailVerification')
            ->with(['email'=>$this->email, 'remember_token'=>$this->remember_token]);
    }
}
