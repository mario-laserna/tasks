<?php

Route::get('api/tasks', function(){
    return \App\Task::latest()->get();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('alerts', function () {
    return view('alerts');
});
