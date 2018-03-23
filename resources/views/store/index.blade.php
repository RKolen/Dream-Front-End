@extends('layouts.master')

@section('page_title', "Dream - " . __('general.store'))

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/store.css') }}">
@stop

@section('content')
<h2>@lang('general.store')</h2>
<br><br><br><br><br><br>

<div id="game-window">
</div>

<script src="{{ URL::asset('js/store.js') }}"></script>
@stop
