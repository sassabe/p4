@extends('layouts.master')

@section('title')
  Train for a Marathon
@endsection

@section('navigation')
@endsection

@section('content')
<h1>Lorem Ipsum Generator</h1>
<h4>Specifiy how many paragraphs of lorem ipsum text you want.</h4>
<form method='POST' action='/lorem-ipsum/store'>
    {{ csrf_field() }}
    Number of paragraphs? <input type='text' name='number' maxlength="2" value='{{old("number")}}'>
    <button type='submit' value='Create text!'>Create text!</button>
    @if(count($errors) > 0)
    <ul class="error">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</form>

@endsection
