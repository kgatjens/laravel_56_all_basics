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

Route::get('/hi', function () {
    //return 'hihi';
    return view('hi');
});

Route::post('/hi', function () {
    return 'hihi';
});

Route::match(['get','post'],'contact/{name?}/{age?}', function ($name='default', $age=null) {
    // return view('contact', array(
    // 	"name" => $name,
    // 	"age" => $age
    // ));
    return view('contact.contact')
    	->with('name', $name)
    	->with('age', $age)
    	->with('numbers', array('one','two','three','four', 'five'));
    
})->where([
	'name'=>'[A-Za-z]+',
	'age'=>'[0-9]+',
]);

Route::any('/hello', function () {
    return 'hello';
});

Route::group(['prefix'=>'number'],function(){
 Route::get('/numbers', 'NumbersController@getIndex');
 Route::get('/getNumber1', 'NumbersController@getNumber1');
 //Route::get('/anyNumber2', 'NumbersController@anyNumber2');

 Route::get('/anyNumber2/{admin?}', ['middleware'=>'IsAdmin',
		'uses'=>'NumbersController@anyNumber2',
		'as'=>'anum'
 ]);

});

Route::post('/receive', 'NumbersController@getForm');

//Route::resource('photo', 'PhotoController');

Route::resources([
    'photos' => 'PhotoController'
]);

//Route::resource('numbers', 'NumbersController');

Route::get('notes', 'NotesController@index');
Route::get('notes/note/{id?}', 'NotesController@getNote');
Route::post('notes/store', 'NotesController@store');
Route::post('notes/update/{id?}', 'NotesController@update');
Route::get('notes/delete-note/{id?}', 'NotesController@destroy');
Route::get('notes/update-note/{id?}', 'NotesController@edit');



Route::get('notes/save-note', 'NotesController@getSaveNote');





