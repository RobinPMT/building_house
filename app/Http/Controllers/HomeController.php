<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function index(Request $request)
    {
        return view('home.index');
    }

    /**
     * @inheritDoc
     */
    protected function getService()
    {
        // TODO: Implement getService() method.
    }
}
