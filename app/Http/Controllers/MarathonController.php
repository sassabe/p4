<?php

namespace RunTrainer\Http\Controllers;

use Illuminate\Http\Request;
use RunTrainer\Http\Requests;

class MarathonController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marathon.create');
    }
  }
