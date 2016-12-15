@extends('layouts.master')

@section('title')
    {{ $run->title }}
@endsection

@section('head')
    <link href='/css/runs.css' rel='stylesheet'>
@endsection

@section('head')

@endsection

@section('content')
    <section class='run'>
      <h1>{{ $run->title }}</h1>
      <h2>Distance: {{ $run->distance }} miles</h2>
      <h2>Shoes: {{ $run->shoe->model }} {{ $run->shoe->make }}</h2>
      <h2>Notes: {{ $run->notes }}</h2>



      <a class='button' href='/runs/{{ $run->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
      <a class='button' href='/runs/{{ $run->id }}/delete'><i class='fa fa-trash'></i> Delete</a>

      <br><br>
      <a class='return' href='/runs'>&larr; Return to your running log</a>
    </section>
@endsection
