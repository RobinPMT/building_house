<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService()
    {
        // TODO: Implement getService() method.
    }

    public function index(Request $request)
    {
        return view('home.index');
    }
}
