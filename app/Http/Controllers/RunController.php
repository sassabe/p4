<?php
namespace RunTrainer\Http\Controllers;
use Illuminate\Http\Request;
use RunTrainer\Http\Requests;
use RunTrainer\Run;
use RunTrainer\Shoe;
use RunTrainer\User;
use Session;

class RunController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $user = $request->user();
    # Note: We're getting the user from the request, but you can also get it like this:
    //$user = Auth::user();
    if($user) {
        # Approach 1)
        #$runs = Run::where('user_id', '=', $user->id)->orderBy('id','DESC')->get();
        # Approach 2) Take advantage of Model relationships
        $runs = $user->runs()->get();
    }
    else {
        $runs = [];
    }
    return view('run.index') ->with([
        'runs' => $runs
    ]);
  }
    /**
    * GET
    */
    public function create()
    {
        $shoes_for_dropdown = Shoe::getForDropdown();

        return view('run.create')->with([
            'shoes_for_dropdown' => $shoes_for_dropdown
        ]);
    }
    /**
    * POST
    */
    public function store(Request $request)
    {
        # Validate
        $this->validate($request, [
            'title' => 'required|min:3',
            'distance' => 'required|min:1|numeric',
            'duration' => 'required|min:1|numeric',
        ]);
        # If there were errors, Laravel will redirect the
        # user back to the page that submitted this request
        # The validator will tack on the form data to the request
        # so that it's possible (but not required) to pre-fill the
        # form fields with the data the user had entered
        # If there were NO errors, the script will continue...
        # Get the data from the form
        #$title = $_POST['title']; # Option 1) Old way, don't do this.
        $title = $request->input('title'); # Option 2) USE THIS ONE! :)
        $run = new Run();
        $run->title = $request->input('title');
        $run->distance = $request->input('distance');
        $run->duration = $request->input('duration');
        $run->shoe_id = $request->shoe_id;
        $run->notes = $request->input('notes');
        $run->user_id = $request->user()->id;
        $run->save();

        Session::flash('flash_message', 'Your run has been logged. '.$run->title.' was logged.');
        return redirect('/runs');
    }
    /**
    * GET
    */
    public function show($id)
    {
        $run = Run::find($id);
        if(is_null($run)) {
            Session::flash('message','Run not found');
            return redirect('/runs');
        }
        return view('run.show')->with([
            'run' => $run,
        ]);
    }
    /**
    * GET
    */
    public function edit($id)
      {
        $run = Run::find($id);
        $shoes_for_dropdown = Shoe::getForDropdown();

        return view('run.edit')->with(
            [
                'run' => $run,
                'shoes_for_dropdown' => $shoes_for_dropdown,
            ]
        );
    }
    /**
    * POST
    */
    public function update(Request $request, $id)
    {
        # Validate
        $this->validate($request, [
          'title' => 'required|min:3',
          'distance' => 'required|min:1|numeric',
          'duration' => 'required|min:1|numeric',
        ]);
        # Find and update book
        $run = Run::find($request->id);
        $run->title = $request->title;
        $run->distance = $request->distance;
        $run->duration = $request->duration;
        $run->shoe_id = $request->shoe_id;
        $run->notes = $request->$notes;
        $book->save();

        # Finish
        Session::flash('flash_message', 'Your changes to '.$run->title.' were saved.');
        return redirect('/runs');
    }
    /**
	* GET
    * Page to confirm deletion
	*/
    public function delete($id) {
        $run = Run::find($id);
        return view('run.delete')->with('run', $run);
    }
    /**
    * POST
    */
    public function destroy($id)
    {
        # Get the book to be deleted
        $run = Run::find($id);
        if(is_null($run)) {
            Session::flash('message','Run not found.');
            return redirect('/runs');
        }

        # Then delete the book
        $run->delete();
        # Finish
        Session::flash('flash_message', $run->title.' was deleted.');
        return redirect('/runs');
    }
}
