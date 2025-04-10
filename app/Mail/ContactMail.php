<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


// Mailable クラスを継承した子クラスで上書きする
class ContactMail extends Mailable 
{
    use Queueable, SerializesModels;

    public $body;

    public function __construct($body)
    {
        $this->body = $body;
    }

    public function build()
    {
        return $this->subject('お問い合わせが届きました')
                    ->view('emails.contact')
                    ->with(['body' => $this->body]);
    }
}
