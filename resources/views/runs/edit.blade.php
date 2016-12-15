@extends('layouts.master')

@section('title')
    Edit {{ $run->title }}
@stop

@section('head')
    <link href='/css/runs.css' rel='stylesheet'>
@endsection

@section('content')

    <h1>Edit {{ $run->title }} </h1>

    <form method='POST' action='/runs/{{ $run->id }}'>

        {{ method_field('PUT') }}

        {{ csrf_field() }}

        <input name='id' value='{{$run->id}}' type='hidden'>

        <div class='form-group'>
            <label>Title</label>
            <input
            type='text'
            id='title'
            name='title'
            value='{{ old('title', $run->title) }}'
            >
            <div class='error'>{{ $errors->first('title') }}</div>
        </div>


        <div class='form-group'>
          <label>Run distance</label>
           <input
               type='number'
               id='distance'
               name='distance'
               value='{{ old('distance', $run->distance) }}'
           >
            <div class='error'>{{ $errors->first('distance') }}</div>
        </div>

      <!--  <div class='form-group'>
           <label>Run time</label>
           <input
               type='time'
               id='runTime'
               name='runTime'
               value='{{ old('01:30:40') }}'
           >
           <div class='error'>{{ $errors->first('runTime') }}</div>
        </div>-->

        <div class='form-group'>
          <label>Notes</label>
          <input
              type='text'
              id='notes'
              name='notes'
              value='{{ old('notes', $run->notes) }}'
          >
          <div class='error'>{{ $errors->first('notes') }}</div>
        </div>

        <div class='form-group'>
            <label>Shoes</label>
            <select name='shoe_id'>
                @foreach($shoes_for_dropdown as $shoe_id => $shoe)
                    <option
                    value='{{ $shoe_id }}'
                    >{{ $shoe }}</option>
                @endforeach
            </select>
        </div>



        <div class='form-instructions'>
            All fields are required
        </div>

        <button type="submit" class="btn btn-primary">Save changes</button>


        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

    </form>


@stop
