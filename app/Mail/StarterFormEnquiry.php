<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class StarterFormEnquiry extends Mailable {

    use SerializesModels;

    public $starterdatas;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($input) {
        $this->starterdatas = $input;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        $files = $this->starterdatas['files']; // array of all files to be attached 
        
        $message = $this->markdown('emails.starterformenquiry')->with('starterdatas', $this->starterdatas);

        foreach ($files as $file) {
            $message->attachData(Storage::disk('public')->url($file),['mime' => 'application/pdf']); // attach each file
        }
        return $message; //Send mail
    }

}
