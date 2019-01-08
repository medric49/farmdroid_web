<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AlertArrosage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $user;
    public function __construct($id)
    {
        $this->user = User::find($id);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from(config('mail.username'))
            ->subject('Alerte Arrosage')
            ->to($this->user->email)
            ->view('mail.alert_arrosage',['first_name'=> $this->user->first_name,'name'=> $this->user->name]);
    }
}
