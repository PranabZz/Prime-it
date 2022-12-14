<?php

use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\EventCategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SpeakerController;
use App\Http\Controllers\Admin\MerchandiesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\FrontendController;

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('/login', 'index')->name('login-form');
            Route::post('/login', 'login')->name('login');
        });
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

        Route::controller(ProfileController::class)->group(function () {
            Route::get('/profile', 'edit')->name('profile');
            Route::patch('/profile', 'update')->name('profile.update');
        });

        Route::resource('users', UserController::class);

        Route::resource('blog-categories', BlogCategoryController::class);
        Route::resource('blogs', BlogController::class);
        Route::post('blogs/create',[BlogController::class,'image_upload'])->name('image_upload');

        Route::resource('event-categories', EventCategoryController::class);
        Route::resource('events', EventController::class);
        Route::resource('speakers', SpeakerController::class);

        Route::resource('members', MemberController::class);

        Route::resource('testimonial', TestimonialController::class);

        Route::resource('merchandies', MerchandiesController::class);

        Route::resource('albums', AlbumController::class);

        Route::post('/images/store',[ImageController::class,'store'])->name('images.store');
        Route::delete('/images/destroy/{image}',[ImageController::class,'destroy'])->name('images.destroy');
    });
});

Route::get('/', [FrontendController::class,'index']);

