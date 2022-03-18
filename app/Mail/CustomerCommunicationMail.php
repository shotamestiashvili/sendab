<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerCommunicationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $email;
    public $subject;
    public $text;

    public function __construct($customerCommunication)
    {
        $this->email = $customerCommunication->email;
        $this->subject = $customerCommunication->subject;
        $this->text = $customerCommunication->text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->markdown('mail.customer-communication-mail');

        return $this
            ->from('no_reply@sendab.com')
            ->subject($this->subject)
            ->markdown('emails.customer-communication-mail')
            ->with(['email'=>$this->email,
                'subject'=>$this->subject,
                'text'=>$this->text]);
    }
}
