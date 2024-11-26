<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function () {
    $title = 'About';
    return view('about', compact("title"));
});

Route::get('/contact', function () {
    $title = 'Contact';
    $name = 'Tony';
    $age = '24';

    return view('/contact', compact('title', 'name', 'age'));
});

Route::get('/profile', function () {
    return view('/profile', ["name" => "Tony", "age" => "24", "salary" => "2100"]);
});

Route::get('/params/{name}/{age}/{salary}', function ($name, $age, $salary) {
    return view('/params', compact('name', 'age', 'salary'));
});

Route::get('/post', function () {
    return view('/post');
});

Route::post('/post', function (Request $request) {
    $name = $request->name;
    return json_encode(['name' => $name]);
});
