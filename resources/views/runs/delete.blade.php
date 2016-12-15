@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $run->title }}
@endsection

@section('content')

    <h1>Confirm deletion</h1>
    <form method='POST' action='/runs/{{ $run->id }}'>

        {{ method_field('DELETE') }}

        {{ csrf_field() }}

        <h2>Are you sure you want to delete <em>{{ $run->title }}</em>?</h2>

        <input type='submit' value='Yes'>
        
    </form>

@endsection
