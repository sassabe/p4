@extends('layouts.master')

@section('head')
    <link href='/css/runs.css' rel='stylesheet'>
@endsection

@section('title')
    View all Runs
@endsection

@section('head')
  <link href="/css/runs.css" type='text/css' rel='stylesheet'>
@endsection

@section('content')

    <h1>My Running Log</h1>

    @if(sizeof($runs) == 0)
        <h4>You don't have any runs to show.</h4>
        <div class="links">
          <a href='/runs/create'>Log a run now to get started</a>
        </div>
    @else
        <div id='run' class='cf'>
            @foreach($runs as $run)

                <section class='run'>
                    <a href='/runs/{{ $run->id }}'><h2>{{ $run->title }}</h2></a>

                    <h3>{{ $run->shoe->model }} {{ $run->shoe->make }}</h3>

                      <a class='button' href='/runs/{{ $run->id }}/edit'> Edit</a>
                      <a class='button' href='/runs/{{ $run->id }}'> View</a>
                      <a class='button' href='/runs/{{ $run->id }}/delete'> Delete</a>

                </section>
            @endforeach
        </div>
    @endif

@endsection
