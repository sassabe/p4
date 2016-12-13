<?php

namespace RunTrainer\Http\Controllers;

use Illuminate\Http\Request;
use RunTrainer\Http\Requests;

class FiveKController extends Controller

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
        return view('5k.create');
    }
/**
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
   #validate
   $this->validate($request, [
     'uAmount'=>'required|numeric|min:1|max:99',
   ]);
   #put title submitted via form into variable "title"
   $uAmount= $request->input('uAmount');

   #code to generate random User
   $gen = new \RandomUser\Generator();
   $users = $gen->getUsers($uAmount);
   $userArray = array();
   foreach($users as $user) {
       array_push($userArray, '<ul class="user-output">');
       array_push($userArray, '<li><strong>Name: </strong>'.$user->getFirstName().' '.$user->getLastName().'</li>');
       array_push($userArray, '<li><strong>Email: </strong>'.$user->getEmail().'</li>');
       array_push($userArray, '<li><strong>Username: </strong>'.$user->getUsername().'</li>');
       array_push($userArray, '<li><strong>Password: </strong>'.$user->getPassword().'</li>');
       array_push($userArray, '</ul>');
   }
   $output = implode("", $userArray);


  #?
   #view results
   return view('random-user.store', ['output' => $output]);

 }
}
