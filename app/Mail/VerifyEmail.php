<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Lang;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The user who will receive the verification email
     *
     * @var mixed
     */
    protected $notifiable;

    /**
     * Verification email URL
     *
     * @var mixed
     */
    protected $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($notifiable, $url)
    {
        $this->notifiable = $notifiable;
        $this->url = $url;
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->notifiable->getEmailForPasswordReset())
            ->subject(Lang::get('Verify Email Address'))
            ->line(Lang::get('Please click the button below to verify your email address.'))
            ->action(Lang::get('Verify Email Address'), $this->url)
            ->line(Lang::get('If you did not create an account, no further action is required.'));

    }
}
