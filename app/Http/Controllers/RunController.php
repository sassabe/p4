<?php
namespace RunTrainer\Http\Controllers;
use Illuminate\Http\Request;
use RunTrainer\Http\Requests;
use RunTrainer\Run;

class RunController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    /*$user = $request->user();
    # Note: We're getting the user from the request, but you can also get it like this:
    //$user = Auth::user();
    if($user) {
        # Approach 1)
        $runs = Run::where('user_id', '=', $user->id)->orderBy('id','DESC')->get();
        # Approach 2) Take advantage of Model relationships
        #$books = $user->books()->get();
    }
    else {
        $runs = [];
    }*/
    return view('runs.index'); /*->with([
        'runs' => $runs
    ]);*/
  }
    /**
    * GET
    */
  /*  public function create()
    {
        # Author
        $authors_for_dropdown = Author::getForDropdown();
        # Author
        $tags_for_checkboxes = Tag::getForCheckboxes();
        return view('book.create')->with([
            'authors_for_dropdown' => $authors_for_dropdown,
            'tags_for_checkboxes' => $tags_for_checkboxes
        ]);
    }
    /**
    * POST
    *
    public function store(Request $request)
    {
        # Validate
        $this->validate($request, [
            'title' => 'required|min:3',
            'published' => 'required|min:4|numeric',
            'cover' => 'required|url',
            'purchase_link' => 'required|url',
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
        $book = new Book();
        $book->title = $request->input('title');
        $book->published = $request->input('published');
        $book->cover = $request->input('cover');
        $book->author_id = $request->author_id;
        $book->purchase_link = $request->input('purchase_link');
        $book->user_id = $request->user()->id;
        $book->save();
        # Save Tags
        $tags = ($request->tags) ?: [];
        $book->tags()->sync($tags);
        $book->save();
        Session::flash('flash_message', 'Your book '.$book->title.' was added.');
        return redirect('/books');
    }
    /**
    * GET
    *
    public function show($id)
    {
        $book = Book::find($id);
        if(is_null($book)) {
            Session::flash('message','Book not found');
            return redirect('/books');
        }
        return view('book.show')->with([
            'book' => $book,
        ]);
    }
    /**
    * GET
    *
    public function edit($id)
    {
        $book = Book::find($id);
        # Possible authors
        $authors_for_dropdown = Author::getForDropdown();
        # Possible tags
        $tags_for_checkboxes = Tag::getForCheckboxes();
        # Just the tags for this book
        $tags_for_this_book = [];
        foreach($book->tags as $tag) {
            $tags_for_this_book[] = $tag->name;
        }
        return view('book.edit')->with(
            [
                'book' => $book,
                'authors_for_dropdown' => $authors_for_dropdown,
                'tags_for_checkboxes' => $tags_for_checkboxes,
                'tags_for_this_book' => $tags_for_this_book,
            ]
        );
    }
    /**
    * POST
    *
    public function update(Request $request, $id)
    {
        # Validate
        $this->validate($request, [
            'title' => 'required|min:3',
            'published' => 'required|min:4|numeric',
            'cover' => 'required|url',
            'purchase_link' => 'required|url',
        ]);
        # Find and update book
        $book = Book::find($request->id);
        $book->title = $request->title;
        $book->cover = $request->cover;
        $book->published = $request->published;
        $book->author_id = $request->author_id;
        $book->purchase_link = $request->purchase_link;
        $book->save();
        # If there were tags selected...
        if($request->tags) {
            $tags = $request->tags;
        }
        # If there were no tags selected (i.e. no tags in the request)
        # default to an empty array of tags
        else {
            $tags = [];
        }
        # Above if/else could be condensed down to this: $tags = ($request->tags) ?: [];
        # Sync tags
        $book->tags()->sync($tags);
        $book->save();
        # Finish
        Session::flash('flash_message', 'Your changes to '.$book->title.' were saved.');
        return redirect('/books');
    }
    /**
	* GET
    * Page to confirm deletion
	*
    public function delete($id) {
        $book = Book::find($id);
        return view('book.delete')->with('book', $book);
    }
    /**
    * POST
    *
    public function destroy($id)
    {
        # Get the book to be deleted
        $book = Book::find($id);
        if(is_null($book)) {
            Session::flash('message','Book not found.');
            return redirect('/books');
        }
        # First remove any tags associated with this book
        if($book->tags()) {
            $book->tags()->detach();
        }
        # Then delete the book
        $book->delete();
        # Finish
        Session::flash('flash_message', $book->title.' was deleted.');
        return redirect('/books');
    }*/
}
