@extends('layouts.master')


@section('title')
    Success!
@stop


@section('content')
    Success! Your run {{ $title }} has been logged.

    <a href='/runs/create'>Log another run...</a>
@stop
