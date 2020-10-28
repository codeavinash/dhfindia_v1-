<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;


    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sb)
    {
        $this->details = $sb;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('a new contact us user')
            ->view('emails.ContactUs')->with(['details'=>$this->details]);
    }
}
 