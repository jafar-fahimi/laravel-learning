<?php

namespace app\Http\Controllers; // what is this for???? to declare the class
use App\Http\Controllers\Controller;

class PostsController extends Controller{
    public function index()
    {
        return view('welcome');
    }
}
