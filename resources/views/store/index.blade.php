@extends('layouts.master')

@section('page_title', "Dream - " . __('general.store'))

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/store.css') }}">
@stop

@section('content')
<h2>@lang('general.store')</h2>
<br><br>
<h3>@lang('general.search')</h3>
<br>
<form onSubmit="loadGames();" >
  <select name="orderby" id="orderby" onchange="loadGames();">
    <option value="downloads">Most Popular</option>
    <option value="least">Least Popular</option>
   <!--  <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option> -->
  </select>
  <br><br>
</form>
<br><br>
<div id="game-window">
</div>

<script src="{{ URL::asset('js/store.js') }}"></script>
@stop
