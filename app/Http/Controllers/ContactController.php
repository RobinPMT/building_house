<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends FrontendController
{
    /**
     * @inheritDoc
     */
    protected function getRequest()
    {
        return request();
    }

    protected function getService()
    {
        return services()->contactService();
    }

    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $result = $this->getService()->create($request->all());
        if ($result->get('status')) {
            return redirect()->back()->with('success', 'Đã gửi thông tin thành công!');
        }
        return redirect()->back()->with('danger', $result->get('message'));
    }
}
