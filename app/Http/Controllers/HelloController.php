<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request,Response $response){
        $html = <<<EOM
        <html>
        <head>
            <title>test page</title>
        </head> 
        <body>
            <h1>Hello!</h1>
            <h2>Request</h2>
            <pre>{$request}</pre>
            <br>
            <h2>Response</h2>
            <pre>{$response}</pre>            
        </body>
        </html>
EOM;
        $response->setContent($html);
        return $response;
    }
}