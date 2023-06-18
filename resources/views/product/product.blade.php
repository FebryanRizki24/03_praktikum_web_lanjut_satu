@extends('layouts.app')

@section('titlePage', 'home')

@section('content')

    @parent
    <h1>Ini halaman Product</h1>
    <a href="/product/edu">Edu games</a> <br>
    <a href="/product/kids">Kids games</a>
@endsection