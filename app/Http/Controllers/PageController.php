<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Github;

class PageController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $client = new Github\Client();
        $repositories = $client->api('user')->repositories('kevin-neven');
        // dump($repositories);

        return view('index');
    }
}
