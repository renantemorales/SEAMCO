<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisteredApplicant extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd('applicantID', session('applicantID'));
        $applicantID = session('applicantID');
        //dd($applicantID);

        return $this->markdown('emails.registeredapplicant')
            ->with(['link' => 'http://localhost:8000/admin/applicants/'.$applicantID.'/vote']);
    }
}
