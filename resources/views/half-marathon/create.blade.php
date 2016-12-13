@extends('layouts.master')

@section('title')
   Half
@endsection

@section('navigation')
@endsection

@section('content')
<h1>Train for a Half Marathon</h1>
<h4>This training program follows our standard format of approximately 4 runs per week over a period of 2 months. The long run in the first week of training is a relatively easy 6-miler. Each weekend, the long run gets longer, peaking at 20 miles 2 weeks before the half marathon. A tapering period in the last week allows you to gather energy for the race.</h4>

<form method='POST' action='/lorem-ipsum/store'>
    {{ csrf_field() }}
    <h4 class="highlight">To train using this program, enter your current average pace per mile (for example, enter "8" for 8min/mile)</h4><input type='text' name='number' maxlength="2" value='{{old("number")}}'>
    <button type='submit' value='Create text!'>Calculate pace and view program</button>
    @if(count($errors) > 0)
    <ul class="error">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</form>

@endsection
