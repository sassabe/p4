@extends('layouts.master')

@section('head')
    <link href='/css/styles.css' rel='stylesheet'>
@endsection

@section('title')
    View all Runs
@endsection

@section('content')

    <h1>My Running Log</h1>

    @if(sizeof($books) == 0)
        You don't have any runs to show. You can <a href='/runs/create'>log a run now to get started</a>.
    @else
        <div id='run' class='cf'>
            @foreach($books as $book)

                <section class='run'>
                    <a href='/runs/{{ $run->id }}'><h2 class='truncate'>{{ $run->title }}</h2></a>

                    <h3 class='truncate'>{{ $run->shoe->model }} {{ $run->shoe->make }}</h3>


                    <a class='button' href='/runs/{{ $run->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
                    <a class='button' href='/runs/{{ $run->id }}'><i class='fa fa-eye'></i> View</a>
                    <a class='button' href='/runs/{{ $run->id }}/delete'><i class='fa fa-trash'></i> Delete</a>
                </section>
            @endforeach
        </div>
    @endif

@endsection
