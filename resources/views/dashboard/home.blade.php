@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <h2>{{ trans('strings.hi') }} {{ auth()->user()->name }}</h2>
            <p>{{ trans('strings.welcome') }} {{ date('Y') }}</p>
        </div>
    </div>
@stop
