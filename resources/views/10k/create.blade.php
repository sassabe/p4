@extends('layouts.master')

@section('title')
  10k
@endsection
<head>
  <link href="/css/calendar.css" type='text/css' rel='stylesheet'>
</head>
@section('navigation')
@endsection

@section('content')
<h1>Train for a 10k</h1>
<h4>This training program follows our standard format of approximately 4 runs per week over a period of 2 months. <br /> The plan focuses on speed and distance, to build your endurance and stamina for racing middle distance. <br />The long run in the first week of training is a relatively easy 4-miler. Each weekend, the long run gets longer, peaking at 10 miles 2 weeks before the 10k. A tapering period in the last week allows you to gather energy for the race.</h4>
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
  <li><a href="/runs/create">3 mile run</a></li>
  <li><a href="/runs/create">3.5 mile run</a></li>
  <li><a href="/runs/create">8x400 @ 5K pace</a></li>
  <li>4 mile run</li>
  <li>Rest</li>
  <li>60 min cross-training</li>
  <li>6 mile run</li>
  <li>3 mile run</li>
  <li>4.5 mile run</li>
  <li>40 min tempo</li>
  <li>3 mile run</li>
  <li>Rest</li>
  <li>60 min cross-training</li>
  <li>6 mile run</li>
  <li>Rest</li>
  <li>3 mile run</li>
  <li>5.5 mile run</li>
  <li>10x400m @ 5k pace</li>
  <li>4 mile run</li>
  <li>Rest</li>
  <li>60 min cross-training</li>
  <li>7 mile run</li>
  <li>3 mile run</li>
  <li>6 mile run</li>
  <li>50 min tempo</li>
  <li>4 mile run</li>
  <li>Rest</li>
  <li>60 min cross-training</li>
  <li>Rest</li>
  <li>Rest</li>
  <li>10K!</li>
</ul>
    <h4 class="highlight">Log your miles to start training!</h4>
    <div class="links">
      <a href="/runs/create">Log new run</a>
    </div>


@endsection
