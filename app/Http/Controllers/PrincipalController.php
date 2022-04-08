<?php

namespace App\Http\Controllers;

class PrincipalController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('principal');
    }
}
