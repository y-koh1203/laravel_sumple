<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function hello(Request $request,Response $response){
        $parse_request = explode(';',$request);
        $data = array(
            'requests' => $parse_request,
            'response' => $response,
            'id' => $request->id
        );
        return view('hello.hello',$data);
    }

    public function post(Request $request,Response $response){
        $name = $request->name;
        $parse_request = explode(';',$request);
        $data = array(
            'name' => $name,
            'requests' => $parse_request,
            'response' => $response
        );

        return view('hello.hello',$data);
    }
}