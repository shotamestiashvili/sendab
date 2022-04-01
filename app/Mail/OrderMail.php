<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf)
    {
        $this->build($pdf);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build($pdf)
    {
        return $this
            ->markdown('emails.order')
            ->from('no_reply@sendab.com')
            ->attachData($pdf, 'order.pdf');
    }
}
