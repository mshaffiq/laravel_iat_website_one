@extends('layouts.app')

@section('content')
<div class="jumbotron container text-center">
        <h1>WELCOME TO JUAL.COM.MY!</h1>
        <h3>One place to sell, One place to buy.</h3>
        <h3>Everything, secure, and faster!</h3>

        @guest
        <a class="btn btn-lg btn-success mt-4" href="{{ route('register') }}">Sign up - It's Free</a>
        @endguest
</div>
@endsection