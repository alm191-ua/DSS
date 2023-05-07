<?php

namespace App\Models;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $subject;
    public $body;
    public $template;

    /**
     * Create a new message instance.
     *
     * @param string $name
     */
    public function __construct(string $name, string $subject, string $body, string $template='default')
    {
        $this->name = $name;
        $this->subject = $subject;
        $this->body = $body;
        $this->template = $template;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                    ->subject($this->subject)
                    ->view('mail_layouts.'.$this->template)
                    ->with(['name' => $this->name],
                           ['body' => $this->body],
                        );
    }
}
