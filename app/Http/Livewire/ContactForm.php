<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class ContactForm extends Component
{
    public $firstName, $lastName, $email, $message;
    
    public function submit(){
        
        $this->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
           

        DB::table('contact_us')->insert([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'message' => $this->message,
        ]);

       
        $this->firstName = '';
        $this->lastName = '';
        $this->email = '';
        $this->message = '';

        return redirect()->to('/contact-table');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
