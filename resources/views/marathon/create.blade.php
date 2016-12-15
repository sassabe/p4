@extends('layouts.master')

@section('title')
  Marathon
@endsection
<head>
  <link href="/css/calendar.css" type='text/css' rel='stylesheet'>
</head>
@section('navigation')
@endsection

@section('content')
<h1>Train for a Marathon</h1>
<h4>This training program lasts one month <br /> The plan focuses on speed and distance, to build your endurance and stamina for racing long distance. <br />The long run in the first week of training is a relatively easy 5-miler. Each weekend, the long run gets longer, peaking at 7 miles. The last two days are rest days before the race.</h4>

<h4>Training Calendar</h4>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li>Rest</a></li>
  <li>3 mile run</li>
  <li>6 x 400m</li>
  <li>3 mile run</li>
  <li>Rest</li>
  <li>3 miles fast</li>
  <li>5 mile run</li>
  <li>Rest</li>
  <li>3 mile run</li>
  <li>35 min tempo</li>
  <li>3 mile run</li>
  <li>Rest</li>
  <li>4 miles fast</li>
  <li>6 mile run</li>
  <li>Rest</li>
  <li>3 mile run</li>
  <li>7x400m</li>
  <li>3 mile run</li>
  <li>Rest</li>
  <li>5 miles fast</li>
  <li>7 mile run</li>
  <li>Rest</li>
  <li>3 mile run</li>
  <li>40 min tempo</li>
  <li>3 mile run</li>
  <li>Rest</li>
  <li>5 mile run</li>
  <li>7 mile run</li>
  <li>Rest</li>
  <li>Rest</li>
  <li>5K!</li>
</ul>
    <h4 class="highlight">Log your miles to start training!</h4>
    <div class="links">
      <a href="/runs/create">Log your run</a>
    </div>

@endsection
