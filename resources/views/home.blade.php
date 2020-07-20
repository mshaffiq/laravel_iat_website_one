@extends('layouts.app')

@section('content')
<div class="jumbotron container text-center">
    <h1>~<u>WELCOME TO JUAL!</u>~</h1>
    <br/>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h4>Hi, {{Auth::user()->name}}!</h4>
    <h4>You are logged in.</h4>
    <h4>Start by going to "Services" :)</h4>
</div>
@endsection
