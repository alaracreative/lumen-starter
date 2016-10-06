<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactForm extends Mailable
{
    public function build()
    {
        return $this->view('emails.contact');
    }
}
