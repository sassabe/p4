<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
# Homepage
Route::get('/', function(){
  return view('welcome');
 });

#5k plan
Route::get('/5k/create', 'FiveKController@create')->name('5k.create')-> middleware('auth');
Route::post('/5k/store', 'FiveKController@store')->name('5k.store');

#10k plan
Route::get('/10k/create', 'TenKController@create')->name('10k.create')-> middleware('auth');
Route::post('/random-user/store', 'RandomUserController@store')->name('random-user.store');

#Half Marathon plan
Route::get('/half-marathon/create', 'HalfController@create')->name('half-marathon.create')->middleware('auth');

#Marathon plan
Route::get('/marathon/create', 'MarathonController@create')->name('marathon.create')->middleware('auth');

##code to make sure DB connection is working, test it at localhost/debug
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logout','Auth\LoginController@logout')->name('logout');
