<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
* [HomeController]
* @package laravel controller
* @author Ajay Nautiyal
*/
class HomeController extends Controller
{

    /**
    * [serve]
    * Serve Angular index from public path.
    * @return \Illuminate\Http\Response
    */
    public function serve()
    {
        $html = public_path('app/index.html');
        $headers = [ 'Content-Type' => 'text/html' ];
        return response()->file($html, $headers);
    }
}
