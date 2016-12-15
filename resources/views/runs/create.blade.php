@extends('layouts.master')

@section('title')
    Log Run
@stop

@section('content')

    <h1>Log a new run</h1>

    <form method='POST' action='/runs'>

        {{ csrf_field() }}

        <div class='form-group'>
           <label>Run distance</label>
            <input
                type='number'
                id='distance'
                name='distance'
                value='{{ old('distance', '6') }}'
            >
           <div class='error'>{{ $errors->first('title') }}</div>
        </div>


        <div class='form-group'>
           <label>Run time</label>
           <input
               type='time'
               id='runTime'
               name='runTime'
               value='{{ old('01:30:40') }}'
           >
           <div class='error'>{{ $errors->first('published') }}</div>
        </div>


        <div class='form-group'>
            <label>Shoes</label>
            <select name='shoe_id'>
                @foreach($shoe_for_dropdown as $shoe_id => $author)
                    <option
                    value='{{ $shoe_id }}'
                    >{{ $shoes }}</option>
                @endforeach
            </select>
        </div>

        <div class='form-instructions'>
            All fields are required
        </div>

        <button type="submit" class="btn btn-primary">Log Run</button>

        {{--
        <ul class=''>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        --}}

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

    </form>


@stop
