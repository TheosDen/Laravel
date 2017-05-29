<?php

namespace App\Http\Controllers;

//use App\Post;
//use Carbon\Carbon;

use App\Repositories\Posts;

class PostsController extends Controller
{
    public function __construct()
    {

    }

    public function index(Posts $posts)
    {
        return view('posts.index', compact($posts->all()));
    }
}