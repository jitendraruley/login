 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('about', function () {
//
//     //return view('welcome');
//     return "Hi i am About page";
// });
 /*
  Route::get('/contact', function () {
      //return view('welcome');
      return "Hi i am Contact Page";
  });

  Route::get('/post/{id}/{name}', function ($id, $name) {
      //return view('welcome');
      return "This is Number posted Number by  ".$name."= ".$id;
  });

  Route::get('admin/post/example', array('as'=>'admin.home', function(){
      $uri=route('admin.home');
      return "This is Admin Home".$uri;
  }));
 CustomerController
  //Route::get('/post/{id}', 'PostController2@index');

  Route::resource('posts','PostController2');
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get("index", "CustomerController@index");

Route::post('customer/store', 'CustomerController@store')->name('customer');

//Route::get('insert', 'CustomerController@store');
 //Route::resource('admin/post', 'CustomerController');