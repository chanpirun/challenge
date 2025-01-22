<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/aboutus', [HomeController::class, 'aboutus']);
Route::get('/footer', [HomeController::class, 'footer']);
Route::get('/contactus', [HomeController::class, 'contactus']);
Route::get('/airpollution', [HomeController::class, 'airpollution']);
Route::get('/waterpollution', [HomeController::class, 'waterpollution']);
Route::get('/noisepollution', [HomeController::class, 'noisepollution']);
Route::get('/biodiversity', [HomeController::class, 'biodiversity']);




Route::view('/signup', 'layouts.signup');
Route::post('/submit/signup', [HomeController::class, 'signup']);

Route::view('/login', 'layouts.login');
Route::post('/submit/login', [HomeController::class, 'signin']);
Route::post('/logout', [HomeController::class, 'logout']);
Route::post('/contectus', [HomeController::class, 'contact']);


Route::get('/dashboard_page', function () {
    return view('dashboard_page');
});
Route::get('/contents', function () {
    return view('contents');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/email', function () {
    return view('email');
});
Route::get('/mapping', function () {
    return view('mapping');
});
Route::get('/graph', function () {
    return view('graph');
});
Route::get('/contentedit', function () {
    return view('contentedit');
});
