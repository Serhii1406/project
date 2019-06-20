<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
    <form method="post">
        {{ csrf_field() }}
        <input type="text" >
        <a href="{{route('login')}}">aaaaaaaaaaa</a>
        <button type="submite">11</button>

    </form>
    </body>
</html>