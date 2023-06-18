<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <h1>Ini Halaman News</h1>
    </body>
</html> -->

@extends('layouts.app')

@section('titlePage', 'home')

@section('content')

    @parent
    <h1>Ini halaman News</h1>

@endsection