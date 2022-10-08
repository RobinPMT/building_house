<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
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

    public function index(Request $request)
    {
        SEOTools::setTitle('Liên hệ');
        SEOTools::setDescription('Liên hệ với chúng tôi để được hỗ trợ sớm nhất');
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());
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
