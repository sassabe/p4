@extends('layouts.master')

@section('navigation')
@endsection

@section('content')
            <div class="content">
                <h1>RunTrainer</h1>
                <h4>Train for your next race following our distance-specific running plans!<br />
                  Our training plans are a series of progressive runs spread out over the course of a months. Each plan varies in the number of runs per week depending on the distance you are training for.
                <br />Sign in or register to log your runs and keep track of your progress!</h4>

                <div class="links">
                    <a href="/5k/create">Train for a 5k</a>
                    <a href="/10k/create">Train for a 10K</a>
                    <a href="/half-marathon/create">Train for a Half Marathon</a>
                    <a href="/marathon/create">Train for a Marathon</a>
                    <a href="/runs/create">Or, just log a run!</a>
                </div>
                <div class="image">
                  <img src="images/runner.gif" alt="runner">
                </div>
            </div>
@endsection
