<?php

namespace App\Listeners;

use App\Mail\Contact_Us;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ContactUsListener implements ShouldQueue
{
    public $contact ;

    public function handle($event)
    {
        $this->contact = $event;
        $email = Mail::to($event->contact->email)->send(new Contact_Us($this->contact));
    }
}
