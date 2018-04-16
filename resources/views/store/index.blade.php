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
  	<div style="display:inline-block;">
      <select name="orderby" id="orderby" onchange="loadGames();">
        <option value="desc">Most Popular</option>
        <option value="asc">Least Popular</option>
      </select>
      Filter By Category: 
      <select name="category_id" id="category_id" onchange="loadGames();">
      	<option value="all">All</option>
      	<option value="1">MMO</option>
        <option value="2">Simulations</option>
        <option value="3">Adventure</option>
        <option value="4">RTS</option>
        <option value="5">Puzzle</option>
        <option value="6">Action</option>
        <option value="7">Stealth Shooter</option>
        <option value="8">Combat</option>
        <option value="9">FPS</option>
        <option value="10">Sports</option>
        <option value="11">RPG</option>
        <option value="12">Educational</option>
      </select>
      <br><br>
    </div>
  </form>
  <br><br>
  <div id="game-window">
  </div>
  <script src="{{ URL::asset('js/store.js') }}"></script>
@stop
