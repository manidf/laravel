<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('customer', fucntion () {
//	$customer = App\Customer::find(1);
//	echo '<pre>';
//	print_r($customer);
//});

Route::get('hello/{name}', function ($name) {
    echo 'Hello There ' . $name;
});

// Create an item
Route::post('test', function () {
    echo 'POST';
});

// Read an item
Route::get('test', function () {
    echo '<form method="POST" action="test">';
    echo '<input type="submit">';
    echo '<input type="hidden" value="DELETE" name="_method">';
    echo '</form>';
});

// Update an item
Route::put('test', function () {
    echo 'PUT';
});

// delete an item
Route::delete('test', function () {
    echo 'DELETE';
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
