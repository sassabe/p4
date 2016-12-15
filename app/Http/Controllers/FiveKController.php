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
/*   #validate
   $this->validate($request, [
     'pace'=>'required|numeric|min:4|max:30',
   ]);
   #put title submitted via form into variable "title"
   $paceValue= $request->input('pace');

   $paceValue = 1; // default value

    // Make sure a value was sent
    if(isset($_POST['pace'])) {
        // Check that sets is numeric, and above 0
    }

    $runs = array(
    'run1' => 7 * $paceValue,
    'run2' => 3 * $paceValue,
    'run3' => 2 * $paceValue
);

// Main routine for Pace
// Validate required data, do computation, and display results
// Pace = Time / Dist
{
		dunit = form.dunit.options[form.dunit.selectedIndex].value
		punit = form.punit.options[form.punit.selectedIndex].value
		var factor = convUnit(dunit, punit)
		pace = (time / dist) / factor

		form.phr.value = HrsFromTSecs(pace)
		form.pmin.value = MinsFromTSecs(pace)
		form.psec.value = SecsFromTSecs(pace)
	}
}

   #code to generate adjusted running plan
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


  #?*/
   #view results
 return view('5k.store'/*, ['output' => $output]*/);

 }
}
