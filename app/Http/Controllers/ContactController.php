<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Events\ContactUsEvent;
use App\Mail\Contact_Us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){


        return view('partials.contact-us');
    }




    public function contact_us(){

        $data = \request()->validate([

            'name'  => 'required',
            'email' => 'required|email',
            'message' => 'required'

        ]);


        $contact = Contact::create($data);

        event(new ContactUsEvent($contact));



        return redirect(route('portfolio'))->with('toast_success' , 'Yours Message has been sent');
    }
}
