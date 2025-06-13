<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Models\Job;
use App\Jobs\TranslateJob;

Route::get('test', function (){
    $job = Job::first();
    TranslateJob::dispatch($job);

    return 'Done';
});

Route::view('/', 'index');

Route::view('/about', 'about');

//Route::resource('jobs', JobController::class)->except(['index', 'show'])->middleware('auth'); // Same as code below
Route::controller(JobController::class)->group(function () {
    // Show jobs
    Route::get('/jobs', 'index');

    // Create job
    Route::post('/jobs', 'store')->middleware('auth');

    // Show create page for job
    Route::get('/jobs/create', 'create')->middleware('auth');

    // Update job
    Route::patch('/jobs/{job}', 'update')->middleware('auth');

    // Delete job
    Route::delete('/jobs/{job}', 'destroy')->middleware('auth');

    // Show a job
    Route::get('/jobs/{job}', 'show');

    // Show edit page for job
    Route::get('/jobs/{job}/edit', 'edit')->middleware('auth')->can('edit', 'job');
});

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);

