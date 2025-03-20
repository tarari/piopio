<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    $posts=Post::with('comments')->paginate(3);
    return view('home',compact('posts'));
})->name('home');

Route::get('/dashboard', function () {
    $posts=Post::with('comments')->paginate(3);
    return view('dashboard',compact('posts'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('posts',PostController::class);
    Route::post('posts/{post}/comments',[CommentController::class,'store'])->name('comments.store');

});
Route::prefix('admin')->group(function () {
    Route::get('/posts', [AdminController::class, 'posts'])->name('admin.posts');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users')
;
})->middleware(['check-role:admin'])->name('admin');

Route::get('/users', function () {
    return response()->json(User::select('id', 'name', 'email')->get());
})->name('users.index')->middleware(['check-role:admin']);

Route::get('/notifications', function () {
    return view('notifications', ['notifications' => Auth::user()->notifications]);
})->middleware('auth')->name('notifications');

require __DIR__.'/auth.php';
