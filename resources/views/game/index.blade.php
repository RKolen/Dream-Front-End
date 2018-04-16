@extends('layouts.master')

@section('page_title', "Dream - $gameinfo->title")

@section('stylesheets')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/game.css') }}">
@stop

@section('content')

	<h1 id="logo">
		{{$gameinfo->title}}
	</h1>

	<div id="banner" style="background-image: url('{{env('BACKEND_URL') . '/games/' . $gameinfo->id . '/image'}}')">
	</div>

	<h2>Description</h2>
	<p>
		{{$gameinfo->description}}
	</p>
	<br>

	<a id="switch-link" href="https://switch.vps.codegorilla.nl/">Watch it on <img src="https://switch.vps.codegorilla.nl/images/Switch-logo.png" alt="Switch"></a>

	@if ($logininfo->loggedin)
		<a id="download-button" href="{{env('BACKEND_URL') . '/games/' . $gameinfo->id . '/download'}}">Download</a>
	@endif

@stop
