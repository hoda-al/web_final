<?php

use App\Http\Controllers\MassegesController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


/dashbord
/profile
/users
/feed
*/



Route::get('/', function() {
    return view('index');
});


Route::get('/about', function() {
    return view('about');

})->name('about');

Route::get('/index', function() {
    return view('index');

})->name('index');



Route::get('/service_register', function() {
    return view('service_register');

})->name('service_register');

Route::get('/contact', function() {
    return view('contact');

})->name('contact');

Route::post('/contact', [MassegesController::class,'store'] )->name('massege.store');



Route::get('/company', function() {
    return view('company');

})->name('company');


Route::get('/goverment', function() {
    return view('goverment');

})->name('goverment');

Route::get('/singin', function() {
    return view('singin');

})->name('singin');








Route::get('/welcome', function() {
    return view('welcome');

})->name('welcome');



Route::group(['middleware' =>'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');


    Route::view('profile', 'profile')->name('profile');


  });



  Route::middleware('auth')->group(function () {
           Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
          Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
           Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
       });




Auth::routes();

    require __DIR__.'/auth.php';
