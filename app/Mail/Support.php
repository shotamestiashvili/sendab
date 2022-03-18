<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Support extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public  $subject;
    public  $name;
    public  $email;
    public  $parcel_code;
    public  $comment;


    public function __construct($support)
    {
        $this->subject = $support->subject;
        $this->name = $support->name;
        $this->email = $support->email;
        $this->parcel_code = $support->parcel_code;
        $this->comment = $support->comment;
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
            ->markdown('emails.Support')
            ->with([
                'subject'=>$this->subject,
                'name'=>$this->name,
                'email'=>$this->email,
                'parcel_code'=>$this->parcel_code,
                'comment'=>$this->comment,
        ]);

    }
}
