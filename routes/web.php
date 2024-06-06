<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()->is_admin) {
            return redirect('/admin');
        } else {
            return redirect('/posts');
        }
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware('role:user')->group(function () {
        Route::get('/posts', [UserController::class, 'index'])->name('posts.index');
    });

    Route::middleware('role:admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'admin'])->name('posts.admin');
    });

    Route::resource('/posts', PostController::class);
    Route::get('/admin', [PostController::class, 'admin'])->name('admin');
});
Route::get('/categories/{category}', [PostController::class, 'postsByCategory'])->name('categories.posts');

require __DIR__.'/auth.php';
