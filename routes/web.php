<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Models\Project;
use App\Http\Controllers\ChatbotController;

Route::post('/chatbot', [ChatbotController::class, 'chat']);

Route::get('/', function () {
    $projects = Project::latest()->get();

    return view('portfolio', compact('projects'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('projects', ProjectController::class);

});

require __DIR__.'/auth.php';
