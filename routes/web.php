<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\frontend\HomeController;

// / ******Frontend starts here *******///
Route::get('/', HomeController::class)->name('home');

// Service 
Route::get('/services', [HomeController::class, 'serviceIndex'])->name('services');

Route::get('/services/{slug}', [HomeController::class, 'serviceDetails'])->name('service_details');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

// Blogs 
Route::get('/blogs', [HomeController::class, 'blogIndex'])->name('blogs');

Route::get('/blogs/{slug}', [HomeController::class, 'blogDetails'])->name('blog_details');

// Team 
Route::get('/team_members', [HomeController::class, 'teamIndex'])->name('team_members');

Route::get('/team_members/{slug}', [HomeController::class, 'memberDetails'])->name('team_details');


Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

// Send Message 
Route::post('/contact', [MessageController::class, 'store'])->name('message.store');

Route::get('/404', function () {
    return view('frontend.404');
});

// Portfolio 
Route::get('/portfolios', [HomeController::class, 'portfolioIndex'])->name('portfolio');
Route::get('/portfolios/{slug}', [HomeController::class, 'portfolioDetails'])->name('portfolio_details');

Route::get('/portfolio_details', function () {
    return view('frontend.portfolio_details');
})->name('portfolio_details');

Route::get('/shop', function () {
    return view('frontend.shop');
})->name('shop');

// / ******Frontend ends here *******///



// / ******Backend starts here *******///

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

    // Dashboard 
    Route::get('/dashboard', [UserController::class, 'dashboardIndex'])->name('dashboard');

    // User manage 
    Route::middleware('admin')->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('user.index');
        Route::get('/users/show/{id}', [UserController::class, 'show'])->name('user.show');
        Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/users/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::post('/users/{id}', [UserController::class, 'approve'])->name('user.approve');
        Route::post('/users/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    });

    Route::get('/users/inaccessible', function () {
        return view('backend.user.inaccessible');
    })->name('user.inaccessible');


    // Profile manage 
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');



    // service management 
    Route::get('/services', [ServiceController::class, 'index'])->name('service.index');

    Route::get('/services/create', [ServiceController::class, 'create'])->name('service.create');

    Route::post('/services/store', [ServiceController::class, 'store'])->name('service.store');

    Route::get('/services/{id}', [ServiceController::class, 'show'])->name('service.show');

    Route::get('/services/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');

    Route::post('/services/update/{id}', [ServiceController::class, 'update'])->name('service.update');

    Route::post('/services/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');



    // Blog management 
    Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');

    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blogs/store', [BlogController::class, 'store'])->name('blog.store');

    Route::get('/blogs/show/{id}', [BlogController::class, 'show'])->name('blog.show');

    Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');

    Route::post('/blogs/update/{id}', [BlogController::class, 'update'])->name('blog.update');

    Route::post('/blogs/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');


    // Team management 

    Route::controller(MemberController::class)->group(function () {
        Route::get('/team_members', 'index')->name('team.index');
        Route::get('/team_members/create', 'create')->name('team.create');
        Route::post('/team_members/store', 'store')->name('team.store');
        Route::get('/team_members/show/{id}', 'show')->name('team.show');
        Route::get('/team_memebers/edit/{id}', 'edit')->name('team.edit');
        Route::post('/team_memebers/update/{id}', 'update')->name('team.update');
        Route::post('/team_memebers/delete/{id}', 'destroy')->name('team.destroy');
    });


    // Portfolio management 
    Route::controller(PortfolioController::class)->group(function () {
        Route::get('/portfolios', 'index')->name('portfolio.index');
        Route::get('/portfolios/create', 'create')->name('portfolio.create');
        Route::post('/portfolios/store', 'store')->name('portfolio.store');
        Route::get('/portfolios/show/{id}', 'show')->name('portfolio.show');
        Route::get('/portfolios/edit/{id}', 'edit')->name('portfolio.edit');
        Route::post('/portfolios/update/{id}', 'update')->name('portfolio.update');
        Route::post('/portfolios/delete/{id}', 'destroy')->name('portfolio.destroy');
    });



    // Message management 
    Route::get('/messages', [MessageController::class, 'index'])->name('message.index');

    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('message.show');

    Route::post('/messages/{id}', [MessageController::class, 'destroy'])->name('message.destroy');


    Route::get('/settings/general', function () {
        return view('backend.settings');
    })->name('settings');
});


require __DIR__ . '/auth.php';
