<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
    <br>
    <h2>Form Area</h2>
    <form action="HelloController.php" method="get">
        {{csrf_field()}}
        <input type="text" name="name" id="">
        <button type="submit">送信</button>
    </form>
</body>
</html>