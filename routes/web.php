<?php

use App\Http\Controllers\Award\AwardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\Event\EventsController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\Sponsor\SponsorController;
use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Broker\BrokerController;
use App\Http\Controllers\Frontend\Vote\VoteController;
use App\Http\Controllers\Voter\VoterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', [HomeController::class, 'home'])->name('home');




// IPAY payment routes
Route::post('/ipay_payment', [PaymentController::class, 'payment'])->name('payment');

// user routes
Route::post('user/store', [UserController::class, 'store'])->name('user.store');
Route::get('user/logout', [UserController::class, 'userLogout'])->name('user.logout');
Route::get('user/signin', [UserController::class, 'showPage'])->name('user.signin');
Route::post('user/signin', [UserController::class, 'userLogin'])->name('user.login');

// Reset Password routes
Route::get('user/forgot_password', [AuthController::class, 'forgot'])->name('user.forgot');
Route::post('user/forgot/password', [AuthController::class, 'sendUsersLink'])->name('user.forgot.link');
Route::get('user/password/reset/{token}', [AuthController::class, 'showResetForm'])->name('reset.password.form');
Route::post('user/password/reset', [AuthController::class, 'resetPassword'])->name('reset.password');


// categories
Route::get('category/{slug}', [CategoryController::class, 'singlecategory'])->name('single.category');

// single event
Route::get('/event-details/{id}', [EventController::class, 'singleEvent'])->name('single.event');

//Load more events
Route::post('/load_data', [EventController::class, 'load_data'])->name('loadmore.load_data');

// Sponsor
Route::get('become_a_sponsor', [SponsorController::class, 'apply'])->name('apply');
Route::post('become_a_sponsor', [SponsorController::class, 'store'])->name('sponsor.store');

// awards
Route::get('awards', [SponsorController::class, 'list'])->name('list.awards');

// brokers
Route::get('brokers/all', [BrokerController::class, 'show'])->name('brokers.list');
Route::get('create/brokers', [BrokerController::class, 'create'])->name('brokers.create');


Route::get('/voters/signup/form', [VoterController::class, 'showRegForm'])->name('showRegForm');
Route::post('voter/signup', [VoterController::class, 'store'])->name('voter.signup');
Route::get('voter/login/page', [VoterController::class, 'showLogin'])->name('voter.showLogin');
Route::post('voter/signin', [VoterController::class, 'signIn'])->name('voter.sign_in');
Route::post('vote/', [VoteController::class, 'save_votes'])->name('save.votes');
Route::delete('change/vote/{id}', [VoteController::class, 'change'])->name('change');


Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest:user', 'PreventBackHistory'])->group(function () {
        // awards
        // route::get('/awards/signup/form', [AwardController::class, 'showAwardForm'])->name('awardForm');
    });

});

Route::prefix('admin')->name('admin.')->group(function() {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/login', [AdminController::class, 'login'])->name('login');
        Route::post('/check', [AdminController::class, 'check'])->name('check');

        // Reset Password routes
        Route::get('forgot_password', [AdminController::class, 'forgot'])->name('forgot');
        Route::post('forgot/password', [AdminController::class, 'sendAdminLink'])->name('forgot.link');
        Route::get('password/reset/{token}', [AdminController::class, 'showResetForm'])->name('reset.password.form');
        Route::post('password/reset', [AdminController::class, 'resetPassword'])->name('reset.password');

    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin logout
    Route::post('/admin_logout', [AdminController::class, 'logout'])->name('logout');

   
    //Events Routes
    Route::get('/events/create', [EventsController::class, 'create'])->name('event.create');
    Route::post('/events/store', [EventsController::class, 'store'])->name('event.store');
    Route::get('/events', [EventsController::class, 'index'])->name('event.index');
    Route::get('/event/{id}', [EventsController::class, 'edit'])->name('event.edit');
    Route::patch('/events/update/{id}', [EventsController::class, 'update'])->name('event.update');
    Route::delete('/delete/event/{id}', [EventsController::class, 'destroy'])->name('event.delete');

    // Event Subsidaries
    Route::get('/events/conferences', [EventsController::class, 'conf'])->name('event.conf');
    Route::get('/events/competitions', [EventsController::class, 'comp'])->name('event.comp');
    Route::get('/events/webinars', [EventsController::class, 'webinar'])->name('event.webinar');
    Route::get('/events/expos', [EventsController::class, 'expo'])->name('event.expos');
    Route::get('/events/awards', [EventsController::class, 'awards'])->name('event.awards');
    
    //Users Routes
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/delete/user/{id}', [UserController::class, 'destroy'])->name('user.delete');

    //Categories Routes
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::patch('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/delete/category/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

        // Brokers
        Route::get('/broker/create', [BrokerController::class, 'create'])->name('broker.create');
        Route::post('/broker/store', [BrokerController::class, 'store'])->name('broker.store');
        Route::get('/brokers', [BrokerController::class, 'index'])->name('broker.index');
        Route::get('/broker/{id}', [BrokerController::class, 'edit'])->name('broker.edit');
        Route::patch('/broker/update/{id}', [BrokerController::class, 'update'])->name('broker.update');
        Route::delete('/delete/broker/{id}', [BrokerController::class, 'destroy'])->name('broker.delete');

    //Sponsors Routes
    Route::get('/sponsor/create', [SponsorController::class, 'create'])->name('sponsor.create');
    Route::post('/sponsor/store', [SponsorController::class, 'store'])->name('sponsor.store');
    Route::get('/sponsors', [SponsorController::class, 'index'])->name('sponsors.index');
    Route::patch('/sponsors/update/{id}', [SponsorController::class, 'update'])->name('sponsors.update');
    Route::get('/edit/{id}', [SponsorController::class, 'edit'])->name('sponsors.edit');
    Route::delete('/delete/sponsor/{id}', [SponsorController::class, 'destroy'])->name('sponsor.delete');

    

    });

});



//TERMS AND CONDITIONS, REFUND AND PRIVACY POLICIES
Route::get('/privacy_policies', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms_and_conditions', [HomeController::class, 'terms'])->name('terms');
Route::get('/refund_policies', [HomeController::class, 'refund'])->name('refund');
