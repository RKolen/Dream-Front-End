@extends('layouts.master')

@section('page_title', "Dream - $userinfo->name")

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/user.css') }}">
@stop

@section('content')
  @if ($userinfo->id == $logininfo->id)
    <h2>Your profile</h2>
    <a>Upload a game</a>
  @else
    <h2>{{$userinfo->name}}</h2>
  @endif
@stop
