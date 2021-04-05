<?php

namespace App\Listeners;

use App\Mail\WelcomeUserMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserHasRegisteredListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //ca permet d'envoyer l'email apres 5 seconde
        sleep(5);
        //envoie l'email
        //$event represent l'evenement ainsi aue l'utilisateur passer dans le constructeur
        Mail::to($event->user->email)->send(new WelcomeUserMail($event->user));
    }
}
