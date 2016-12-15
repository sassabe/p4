@extends('layouts.master')

@section('title')
    {{ $run->title }}
@endsection

@section('head')

@endsection

@section('content')

    <h1 class='truncate'>{{ $run->title }}</h1>
    <h2 class='truncate'>{{ $run->distance }}</h2>
    <h2 class='truncate'>{{ $run->shoe->model }} {{ $book->shoe->make }}</h2>



    <a class='button' href='/runs/{{ $run->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
    <a class='button' href='/runs/{{ $run->id }}/delete'><i class='fa fa-trash'></i> Delete</a>

    <br><br>
    <a class='return' href='/runs'>&larr; Return to your running log</a>

@endsection
