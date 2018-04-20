{{-- 継承元テンプレート --}}
@extends('layouts.base')

{{-- @section()の第一引数に該当するyieldが継承元にあれば、第2引数の値が埋め込まれる --}}
@section('title','hello')

{{-- @section~@endsection で囲った範囲の中身が、継承元の該当するyieldに埋め込まれる --}}
@section('main_content')
    <h1>Sumple Page</h1>
    <p>This is a sumple page, generated with php-template.</p>
    <h2>Request Param</h2>
    <ul>
    @foreach($requests as $request)
        <li><?=$request?></li>
    @endforeach
    </ul>
    <h2>Response Param</h2>
    {{$response}}
    <br>
    <h2>User Id</h2>
    <p>{{$id}}</p>
@endsection
