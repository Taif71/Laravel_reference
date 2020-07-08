<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/pizzas', function() {

    // Query parameters
    $pizzas = [
        ['type' => 'hawaiin', 'base' => 'Cheesy crust'],
        ['type' => 'volcano', 'base' => 'Garlic crust'],
        ['type' => 'veg supreme', 'base' => 'Thin and Crispy']
    ];
    
    // redundant.
    // $name = request('name');
    // $age= request('age');


    return view('pizzas', 
        [
            // 'pizzas' =>  $pizzas,
            // 'name' => $name,
            // 'age' => $age
            'pizzas' => $pizzas,
            'name' => request('name'),
            'age' => request('age')
            // request() here is to get the query params sent through the URL  request
        ]);
        
});


//  ROutes parameter
Route::get('/pizzas/{id}/{string}', function($id, $str) {
//  ROutes parameter

    return view('details', ['id' => $id, 'str' => $str]); 
});


Route::get('/post/{id}', 'postController@index');

Route::resource('post', 'postController');

Route::get('/contact', 'postController@contact');