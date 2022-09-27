<?php

namespace Modules\Admin\Http\Controllers;

use App\Jobs\ContactSendMailJob;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
//        dispatch(new ContactSendMailJob('hello', 'phanminhtuan02365@gmail.com'));
        return view('admin::dashboard.index');
    }
}
