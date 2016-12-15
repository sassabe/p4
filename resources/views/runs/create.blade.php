@extends('layouts.master')

@section('title')
    Log Run
@stop

@section('content')

    <h1>Log a new run</h1>

    <form method='POST' action='/runs'>

        {{ csrf_field() }}
        <div class='form-group'>
           <label>Title</label>
            <input
                type='text'
                id='title'
                name='title'
                value='{{ old('title', 'Minuteman Slingshot') }}'
            >
           <div class='error'>{{ $errors->first('title') }}</div>
        </div>

        <div class='form-group'>
           <label>Run distance</label>
            <input
                type='number'
                id='distance'
                name='distance'
                value='{{ old('distance', '6') }}'
            >
           <div class='error'>{{ $errors->first('distance') }}</div>
        </div>


      <!--  <div class='form-group'>
           <label>Run time</label>
           <input
               type='numer'
               id='runTime'
               name='runTime'
               value='{{ old('01:30:40') }}'
           >
           <div class='error'>{{ $errors->first('runTime') }}</div>
        </div>-->

        <div class='form-group'>
          <label>Notes</label>
          <input
              type='notes'
              id='notes'
              name='notes'
              value='{{ old('Great run!') }}'
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

        <button type="submit" class="btn btn-primary">Log Run</button>

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

    </form>


@stop
