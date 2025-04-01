<?php


namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostPublished extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $description;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function build()
    {
        return $this->subject('New Post Published')
                    ->view('emails.post_published')
                    ->with([
                        'title' => $this->title,
                        'description' => $this->description,
                    ]);
    }
}