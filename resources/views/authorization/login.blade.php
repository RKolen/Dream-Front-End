@extends('layouts.master')

@section('page_title', "Dream - Login")

@section('stylesheets')
@stop

@section('content')

<form method="POST" action="/login">
    Email: <input type="text" name="email"><br>
    Password: <input type="password" name="password"><br>
    @csrf
    <input type="hidden" name="previous-url" value="{{ url()->previous() }}">
    <input type="submit" value="Submit">
</form>
@stop
