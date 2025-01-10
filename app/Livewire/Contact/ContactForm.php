<?php

namespace App\Livewire\Contact;

use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $namaDepan;
    public $namaBelakang;
    public $email;
    public $nohp;
    public $pesan;

    protected $rules = [
        'namaDepan' => 'required|string|max:255',
        'namaBelakang' => 'required|string|max:255',
        'email' => 'required|email',
        'nohp' => 'required|regex:/^[0-9]{10,15}$/',
        'pesan' => 'required|string',
    ];

    public function sendMessage()
    {
        $this->validate();

        $details = [
            'namaDepan' => $this->namaDepan,
            'namaBelakang' => $this->namaBelakang,
            'email' => $this->email,
            'nohp' => $this->nohp,
            'pesan' => $this->pesan,
        ];

        Mail::to('breadfactorypbl@gmail.com')->send(new ContactUsMail($details));

        flash('Pesan Anda telah terkirim!', 'success');
        $this->reset();
        return redirect()->route('contact');
    }

    public function render()
    {
        return view('livewire.contact.contact-form');
    }
}
