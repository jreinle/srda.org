<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $from_email;
    public $from_name;
    public $message;

    /**
     * ContactMessage constructor.
     * @param $from_email
     * @param $from_name
     * @param $message
     */
    public function __construct($from_email, $from_name, $message)
    {
        $this->from_email = $from_email;
        $this->from_name = $from_name;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact_form', [
            'from_email' => $this->from_email,
            'from_name' => $this->from_name,
            'content' => $this->message,
        ]);
    }
}
