<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/toppage', function () {
        return view('toppage');
    })->name('toppage');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    Route::get('/create', [PostController::class, 'create'])->name('todo.create');
    Route::post('post', [PostController::class, 'store'])->name('post.store');
    Route::get('post', [PostController::class, 'index'])->name('posts.index');
    
    Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
    Route::post('/show/{post}', [PostController::class, 'show'])->name('post.show');
    Route::get('/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/{post}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/{post}', [PostController::class, 'destroy'])->name('post.destroy');
    Route::get('/posts', [PostController::class, 'index'])->name('index');

});

require __DIR__.'/auth.php';
