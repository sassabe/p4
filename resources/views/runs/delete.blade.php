@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $run->title }}
@endsection

@section('head')
    <link href='/css/runs.css' rel='stylesheet'>
@endsection

@section('content')

    <h1>Confirm deletion</h1>
    <form method='POST' action='/runs/{{ $run->id }}'>

        {{ method_field('DELETE') }}

        {{ csrf_field() }}

        <h2>Are you sure you want to delete <em style="color:#9BCC31;">{{ $run->title }}</em>?</h2>

        <!--<input type='submit' value='Yes'>-->
        <button type="submit" class="btn btn-primary">Yes</button>

    </form>

@endsection
