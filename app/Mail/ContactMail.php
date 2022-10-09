<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $contact;

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
        $data['name'] = $this->contact->name;
        $data['phone'] = $this->contact->phone;
        $data['email'] = $this->contact->email;
        $data['content'] = $this->contact->content ?? 'Khách hàng không để lại lời nhắn!';
        if ($this->contact->type == Contact::TYPE_PRODUCT) {
            $data['type'] = 'Sản phẩm '. $this->contact->product->title ?? 'Không rõ';
        } else {
            $data['type'] = 'Giải pháp kinh doanh';
        }
        $data['created_at'] = $this->contact->created_at->format('H:i:s m-d-Y');
        return $this->view('mail.contact', $data)->subject('Consolar Housing có khách hàng cần liên hệ');
    }
}
