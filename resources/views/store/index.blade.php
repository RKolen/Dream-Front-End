@extends('layouts.master')

@section('page_title', "Dream - " . __('general.store'))

@section('stylesheets')
@stop

@section('content')
<h2>@lang('general.store')</h2>

<div id="game-window">
</div>

<script src="{{ URL::asset('js/store.js') }}"></script>
@stop
