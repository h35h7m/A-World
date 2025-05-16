<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Auth\LoginController;

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

// Ensure the LoginController exists in the specified namespace or create it if missing

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AuthController;

Route::get('/notifications', [NotificationController::class, 'getNotifications']);
Route::post('/notifications/mark-seen', [NotificationController::class, 'markNotificationsSeen']);




Route::get('/', [FrontController::class, 'home'])->name('front.home');
Route::get('/login', function() {
    return view('front.login');  // بدون extends master
})->name('front.login');


Route::name('front.')->controller(FrontController::class)->group(function () {
    Route::post('/subscribe/store','subscriberStore' )->name('subscribe.store');

    Route::get('/', 'index')->name('index');

    Route::get('/about', 'about')->name('about');
    Route::post('/contact/store','contactrStore' )->name('contact.store');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/services', 'services')->name('services');
    Route::get('/blog', 'blog')->name('blog');
    
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

    
    
    
});


Route::name('admin.')->prefix( LaravelLocalization::setLocale().'/admin')->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]) ->group(function () {
    Route::middleware('auth')->group(function(){

        // =========HOME
        Route::view('/', 'admin.index')->name('index');

        // =========SERVICE
        Route::resource('services',ServiceController::class);

        // =========ABOUT
        Route::resource('abouts',AboutController::class);

        // =========BLOG
        Route::resource('blogs',BlogController::class);

        // =========TESTIMONIAL
        Route::resource('testimonials',TestimonialController::class);

        // =========CONTACT
        Route::resource('contacts',ContactController::class)->only(['index','show','destroy']);

        // =========SUBSCRIBER
        Route::resource('subscribers',SubscriberController::class)->only(['index','destroy']);

        // =========SETTINGS
        Route::resource('settings',SettingController::class)->only(['index','update']);

    
    });
    

    
    require __DIR__.'/auth.php';

});


 

