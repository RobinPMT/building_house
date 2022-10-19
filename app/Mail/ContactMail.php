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
     * @param $contact
     */
    public function __construct($contact)
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
        if ($this->contact instanceof Contact) {
            $data['name'] = $this->contact->name;
            $data['phone'] = $this->contact->phone;
            $data['email'] = $this->contact->email;
            $data['content'] = $this->contact->content ?? 'Khách hàng không để lại lời nhắn!';
            if ($this->contact->type == Contact::TYPE_PRODUCT) {
                $data['type'] = 'Sản phẩm '. $this->contact->product->title ?? 'Không rõ';
            } else {
                $data['type'] = 'Giải pháp kinh doanh';
            }
        } else {
            $data['name'] = $this->contact->name ?? ($this->contact->creator->name ?? 'Không rõ');
            $data['phone'] = $this->contact->phone ?? ($this->contact->creator->phone ?? 'Không rõ');
            $data['email'] = $this->contact->email ?? ($this->contact->creator->email ?? 'Không rõ');
            $data['slug_product'] = $this->contact->product->slug ?? '';
            $data['code'] = $this->contact->title ?? '';
            $data['creator_id'] = $this->contact->creator_id;
            $data['type'] = 'Sản phẩm '. $this->contact->product->title ?? 'Không rõ';
            $data['link'] = route('get.detail.wishlists.design', [$data['slug_product'], 'code' => $data['code'], 'user_id' => $data['creator_id']]);
        }

        $data['created_at'] = $this->contact->created_at->format('H:i:s m-d-Y');
        return $this->view('mail.contact', $data)->subject('Consolar Housing có khách hàng cần liên hệ');
    }
}
