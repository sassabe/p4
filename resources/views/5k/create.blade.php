@extends('layouts.master')

@section('title')
  5K
@endsection
<head>
  <link href="/css/calendar.css" type='text/css' rel='stylesheet'>
</head>
@section('navigation')
@endsection

@section('content')
<h1>Train for a 5k</h1>
<h4>This training program follows our standard format of approximately 4 runs per week over a period of 2 months. <br /> The plan focuses on speed and distance, to build your endurance and stamina for racing middle distance. <br />The long run in the first week of training is a relatively easy 3-miler. Each weekend, the long run gets longer, peaking at 7 miles 2 weeks before the 5K. A tapering period in the last week allows you to gather energy for the race.</h4>

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
  <li><a href="/runs/create">Rest</a></li>
  <li><a href="/runs/create">3 mile run</a></li>
  <li><a href="/runs/create">6 x 400m</a></li>
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
      <a href="/runs/create">Log new run</a>
    </div>

@endsection
