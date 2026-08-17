<?php

use App\Http\Controllers\backend\MessageController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;



// / ******Frontend starts here *******///
Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/service', function () {
    return view('frontend.service');
})->name('service');

Route::get('/service_details', function () {
    return view('frontend.service_details');
})->name('service_details');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/blog_details', function () {
    return view('frontend.blog_details');
})->name('blog_details');

Route::get('/team', function () {
    return view('frontend.team');
})->name('team');

Route::get('/team_details', function () {
    return view('frontend.team_details');
})->name('team_details');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

// Send Message 
Route::post('/contact', [MessageController::class, 'store'])->name('message.store');

Route::get('/404', function () {
    return view('frontend.404');
});
Route::get('/portfolio', function () {
    return view('frontend.portfolio');
})->name('portfolio');

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

    Route::get(
        '/users',
        [UserController::class, 'index']
    )->name('users');

    Route::get('/profile', function () {
        return view('backend.profile');
    })->name('profile');

    Route::get('/user_details', function () {
        return view('backend.user_details');
    })->name('user_details');

    // service management 
    Route::get('/services', [ServiceController::class, 'index'])->name('service.index');

    Route::get('/services/create', [ServiceController::class, 'create'])->name('service.create');

    Route::post('/services/store', [ServiceController::class, 'store'])->name('service.store');

    Route::get('/services/{id}', [ServiceController::class, 'show'])->name('service.show');

    Route::get('/services/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');

    Route::post('/services/update/{id}', [ServiceController::class, 'update'])->name('service.update');

    Route::post('/services/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');



    // Blog management 
    Route::get('/blogs', function () {
        return view('backend.blog.blogs');
    })->name('blogs');

    Route::get('/create_blog', function () {
        return view('backend.blog.create_blog');
    })->name('create_blog');

    // Team management 

    Route::get('/team_members', function () {
        return view('backend.team.team_members');
    })->name('team_members');

    Route::get('/member_add', function () {
        return view('backend.team.member_add');
    })->name('member_add');

    // Portfolio management 

    Route::get('/portfolios', function () {
        return view('backend.portfolio.portfolios');
    })->name('portfolios');

    Route::get('/create_portfolio', function () {
        return view('backend.portfolio.create_portfolio');
    })->name('create_portfolio');

    // Message management 
    Route::get('/messages', [MessageController::class, 'index'])->name('message.index');

    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('message.show');

    Route::post('/messages/{id}', [MessageController::class, 'destroy'])->name('message.destroy');



    Route::get('/components', function () {
        return view('backend.components');
    })->name('components');

    Route::get('/alerts', function () {
        return view('backend.alerts');
    })->name('alerts');

    Route::get('/modals', function () {
        return view('backend.modals');
    })->name('modals');

    Route::get('/settings', function () {
        return view('backend.settings');
    })->name('settings');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
