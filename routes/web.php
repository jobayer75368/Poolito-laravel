<?php

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

// / ******Frontend starts here *******///

// / ******Backend starts here *******///

Route::prefix('admin')->middleware('auth')->group(function () {

    // Dashboard 
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('admin.dashboard');

    Route::get(
        '/users',
        [UserController::class, 'index']
    )->name('admin.users');

    Route::get('/profile', function () {
        return view('backend.profile');
    })->name('admin.profile');

    Route::get('/user_details', function () {
        return view('backend.user_details');
    })->name('admin.user_details');

    // service management 
    Route::get('/services', function () {
        return view('backend.service.services');
    })->name('admin.services');

    Route::get('/service_add', function () {
        return view('backend.service.service_add');
    })->name('admin.service_add');


    // Blog management 
    Route::get('/blogs', function () {
        return view('backend.blog.blogs');
    })->name('admin.blogs');

    Route::get('/create_blog', function () {
        return view('backend.blog.create_blog');
    })->name('admin.create_blog');

    // Team management 

    Route::get('/team_members', function () {
        return view('backend.team.team_members');
    })->name('admin.team_members');

    Route::get('/member_add', function () {
        return view('backend.team.member_add');
    })->name('admin.member_add');

    // Portfolio management 

    Route::get('/portfolios', function () {
        return view('backend.portfolio.portfolios');
    })->name('admin.portfolios');

    Route::get('/create_portfolio', function () {
        return view('backend.portfolio.create_portfolio');
    })->name('admin.create_portfolio');

    Route::get('/messages', function () {
        return view('backend.message.messages');
    })->name('admin.messages');



    Route::get('/components', function () {
        return view('backend.components');
    })->name('admin.components');

    Route::get('/alerts', function () {
        return view('backend.alerts');
    })->name('admin.alerts');

    Route::get('/modals', function () {
        return view('backend.modals');
    })->name('admin.modals');

    Route::get('/settings', function () {
        return view('backend.settings');
    })->name('admin.settings');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
