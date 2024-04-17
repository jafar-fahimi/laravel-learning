<?php

use Illuminate\Support\Facades\Route; // case insensitive
use App\Http\Middleware\MiddleCode; // start from root parent folder

// Route::get('/', function () { //::post
//     return view('welcome');
// }) -> middleware(MiddleCode :: class);

// Route::get('/', function(){
//     return redirect('/profile'); // global function
// });

// Route::redirect("/", "profile"); // static methods
// Route::get(uri: "/myUser", action:"CONTROLLER", "METHOD");// controller class & its method

// Route::get("/{id}", function($id){return $id;});
// Route::get("/{id}/{status}", function($id, $myStatus){return $myStatus;});

// Route::get("/{?id}", function(?int $id = 100){return $id;}); // optional parameter

Route::get("/user/{id}", function($id){return $id;}) -> where("id","24"); // regular exp

// Route::get('/user/{name}', function($name){return $name;})->where('name','[A-Za-z]+');
// Route::get('user/{name}/{id}', function(string $name, int $id){return $name;})->where("name", '[a-z]+')->where("id", '[0-9]+');
// Route::get('user/{name}/{id}', function(string $name, int $id){return $id;})->Where(["name" => "[a-z]+", 'id'=>"[0-9]+"]);

Route::get('user/{name}/{id}',function($name){return $name;})->whereAlpha('name');//whereNumber('id');
Route::get('item/{cat}',function($name){return $name;})->whereIn('cat',['java','python', 'php']);


// Route::get('/profile', function(){return "Profile Page";})->name('company.profile'); // <a href={{'company.profile'}} />

Route::get('/work', function(){return "Work Page";})-> name('work'); // <a href={{'work'}} /> 

// to use controller;
Route::get('/',[App\Http\Controllers\PostsController::class, "index"]);
// php artisan make:controller CategoriesController --resource // to build all necessary methods
