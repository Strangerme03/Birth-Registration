<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $emailmessage;

    /**
     * Create a new message instance.
     */
    public function __construct( array $data)
    {
        // Make sure data is passed correctly to the variables
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->subject = $data['subject'];
        $this->emailmessage =(string) $data['emailmessage'];
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('New Contact Us Message')
                    ->view('emails.contact') // Ensure you are passing data to the view
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'subject' => $this->subject,
                        'emailmessage' => $this->emailmessage,
                    ]);
    }
}
