<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SearchController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
// Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::prefix('admin')->group(function () {
        # auth Kiểm tra xem đã đăng nhập chưa, chưa thì trả về trang login
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);


        #Menu (danh mục)
        Route::prefix('menus')->group(function () {
            Route::get('add',[MenuController::class, 'create']);
            Route::post('add',[MenuController::class, 'store']);
            Route::get('list',[MenuController::class, 'index']);
            Route::get('edit/{menu}',[MenuController::class, 'show']);
            Route::post('edit/{menu}',[MenuController::class, 'update']);
            Route::DELETE('destroy',[MenuController::class, 'destroy']);
            Route::get('/{id}/posts', [MenuController::class, 'showPosts'])->name('menu.showPosts');

        });

        #Tin tức
        Route::prefix('posts')->group(function () {
            Route::get('add',[PostController::class, 'create']);
            Route::post('add',[PostController::class, 'store']);
            Route::get('list',[PostController::class, 'index']);
            Route::get('edit/{post}',[PostController::class, 'show']);
            Route::post('edit/{post}',[PostController::class, 'update']);
            Route::DELETE('destroy', [PostController::class, 'destroy']);
        });

        Route::prefix('users')->group(function () {
            Route::get('list',[UserController::class, 'index']); 
        });

        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);

        Route::prefix('comments')->group(function () {
            Route::get('list', [App\Http\Controllers\Admin\CommentController::class, 'index']);
            Route::delete('destroy/{id}', [App\Http\Controllers\Admin\CommentController::class, 'destroy'])->name('comments.destroy');

        });
    });
});

Route::get('/', [App\Http\Controllers\MainController::class,'index']);
Route::get('posts/{id}', [PostController::class, 'show'])->name('post.show');


Route::get('danh-muc/{id}-{slug}.html', [App\Http\Controllers\MenuController::class, 'index']);
Route::get('bai-viet/{id}-{slug}.html', [App\Http\Controllers\PostController::class, 'index'])->name('posts.show');

# Bình luận
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/comments/reply', [CommentController::class, 'reply'])->name('comments.reply');

Route::get('/search', [SearchController::class, 'index'])->name('search');
