<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public string $name = '';
    public string $surname = '';
    public string $email = '';
    public string $message = '';

    public function submit(): void
    {
        $this->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        Mail::to(config('web.contact.mail'))->send(new ContactMail($this->name, $this->surname, $this->email, $this->message));

        $this->name = '';
        $this->surname = '';
        $this->email = '';
        $this->message = '';

        session()->flash('title', 'Mail sent correctly 📬');
        session()->flash('description', 'Thank you for contact me! I\'ll reply you as soon as possible 😄');
    }

    public function render(): View
    {
        return view('livewire.contact');
    }
}
