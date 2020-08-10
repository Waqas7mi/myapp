<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Subscription extends Component
{
    public $email = '';
    public function render()
    {
        return view('livewire.subscription');
    }

    public function subscribe(){


       $data =   $this->validate([
                 'email' => 'required|email'
                ]);

        $data = \App\Subscription::where('email'  , $this->email)->first();
        if ($data){

            session()->flash('message' , 'You have Already subscribed');

        }
      else{

          $subscribe = \App\Subscription::create([
              'email'=> $this->email
          ]);
          session()->flash('message' , 'Welcome You have subscribed , will receive new update...');
      }

    }


}
