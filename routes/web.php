<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {

    $jobs = Job::with('employer')->simplePaginate(3);
//    $jobs = Job::all();

    return view('jobs.index', ['jobs' =>  $jobs]);
});

Route::get('/jobs/create', function () {

    return view('jobs.create');

});

Route::get('/jobs/{id}', function ($id) {

    return view('jobs.show', ['job' => Job::find($id)]);

});

Route::get('/contact', function () {
    return view('contact');
});


