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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{task}', function ($id) {

    $name = 'Denis';
    $age = 34;

//    $tasks = [
//        'Go to the store',
//        'Some another task',
//        'Buy fishing rode'
//    ];

    $task = DB::table('tasks')->find($id);
//    $tasks = DB::table('tasks')->get();

    return view('posts.show', compact('task'));
});
