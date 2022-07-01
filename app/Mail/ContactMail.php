<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMail extends Mailable
{
    public function __construct(private string $name, private string $surname, private string $email, private string $message)
    {
    }

    public function build(): ContactMail
    {
        return $this->subject("📬 {$this->name} {$this->surname} is contacting through ".config('web.domain'))
            ->markdown('emails.contact', [
                'name' => $this->name,
                'surname' => $this->surname,
                'email' => $this->email,
                'message' => $this->message,
            ]);
    }
}
