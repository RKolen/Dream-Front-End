@extends('layouts.master')

@section('page_title', "Dream - Login")

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/login.css') }}">
@stop

@section('content')
<h2>Login</h2>

<form method="POST" action="/login">
    <label>Email:</label><br>
    <input type="text" name="email" required><br>
    <label>Password:</label><br>
    <input type="password" name="password" required><br>
    @csrf
    <input type="hidden" name="previous-url" value="/login">
    <input type="submit" value="Submit">
</form>
<br>
<div>
    <a href="/reset" style="color:black">Forgot Your Password?</a>
</div>
@stop
