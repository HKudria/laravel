<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMessage extends Mailable
{

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Odpowiedż w sprawie kontaktu na stronie www')
            ->replyTo($this->contact->email)
            ->view('emails.sendMessage')
            ->with([
            'text' => $this->contact->text,
            'email' => $this->contact->email,
            'name' => $this->contact->name,
        ]);


        return $this;
    }
}
