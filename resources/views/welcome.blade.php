@extends('layouts.master')

@section('navigation')
@endsection

@section('content')
            <div class="content">
                <h1>RunTrainer</h1>
                <h4>Train for your next race following our custom running plans, designed to fit your running ability!</h4>

                <div class="links">
                    <a href="/5k/create">Train for a 5k</a>
                    <a href="/10k/create">Train for a 10K</a>
                    <a href="/half-marathon/create">Train for a Half Marathon</a>
                    <a href="/marathon/create">Train for a Marathon</a>
                </div>
                <div class="image">
                  <img src="images/runner.gif" alt="runner">
                </div>
            </div>
@endsection
