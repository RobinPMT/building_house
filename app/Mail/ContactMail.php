<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'email' => null,
//            'code' => $this->user->code_reset,
            'phone_company' => '091 905 05 60',
            'address' => '357 Lê Hồng Phong, Phường 2, Quận 10, Thành phố Hồ Chí Minh',
//            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'app_name' => env('APP_NAME'),
            'app_url' => env('APP_URL'),
        ];
        return $this->view('mail.contact', $data);
    }
}
