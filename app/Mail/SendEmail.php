<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from('himanshu@7continentsmedia.com')->subject("Contact Form of Fly2abroad")->view('email_template')->with('data', $this->data);

        return $this->from('himanshu@7continentsmedia.com','fly2abroad')
                    ->to('himanshu@7continentsmedia.com',$this->details['name'])
                    ->subject('contact has been successfully post')
                    ->view('EMailer.success');
    }
}
