@extends('layouts.master')

@section('page_title', "Dream - Home")

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home.css') }}">
@stop

@section('content')
<h1 id="logo">
    @lang('general.name')
</h1>

<h2>@lang('home.spotlight')</h2>
<div class="section-container">
    <div class="game-image" style="background-image: url('{{'http://' . env('BACKEND_URL') . '/games/' . $games->spotlight[0]->id . '/image'}}')";>
    </div>
</div>

<h2>@lang('home.discover')</h2>
<div class="section-container">
    @foreach ($games->discover as $discoverGame)
      <div class="game-image-small" style="background-image: url('{{'http://' . env('BACKEND_URL') . '/games/' . $discoverGame->id . '/image'}}')";>
      </div>
    @endforeach
</div>

<a href="#" id="storelink">Go to store →</a>

@stop
