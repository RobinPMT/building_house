<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactSendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $contact;

    protected $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Contact $contact, $email)
    {
        $this->contact = $contact;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new ContactMail($this->contact);
        Mail::to($this->email)->send($email);
    }
}
