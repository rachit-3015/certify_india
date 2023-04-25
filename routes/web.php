<?php

use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\EventController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\PDFController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('log-in', function () {
    return view('login');
})->name('login1');

Route::get('signup', function () {
    return view('signup');
})->name('signup');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[App\http\Controllers\HomeController::class,'userhome']);
Route::post('/logout',[LogoutController::class,'logout'])->name("logout");

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']); 
    Route::get('/event',[App\Http\Controllers\EventController::class, 'all']);
    Route::get('/add_event',[App\Http\Controllers\EventController::class, 'form']);
    Route::post('/add_event',[App\Http\Controllers\EventController::class, 'add']);
    Route::get('/edit_event/{id}',[App\Http\Controllers\EventController::class, 'edit']);
    Route::post('/edit_event/{id}',[App\Http\Controllers\EventController::class, 'update']);
    Route::get('/delete_event/{id}',[App\Http\Controllers\EventController::class, 'delete']);
    Route::get('profile',[App\Http\Controllers\ProfileController::class,'index']);
    Route::post('update-profile',[App\Http\Controllers\ProfileController::class,'update']);

    
    // Route::get('certificate',[App\Http\Controllers\CertificateController::class,'demo']);
    Route::get('/certificate',[App\Http\Controllers\Admin\DashboardController::class,'index'])->name('certificate'); 
    Route::get('/generate-certificate',[App\Http\Controllers\CertificateController::class,'index'])->name('upload_doc');
    Route::post('/generate',[App\Http\Controllers\CertificateController::class,'check']);

    // Route::get('generate',[PDFController::class, 'generate']);

    // Route::get('ss',[PDFController::class,'index'])->name('ss');
    // Route::post('ss',[PDFController::class,'find'])->name('ss.ss');
    Route::post('ss/generate',[PDFController::class,'generate'])->name('ss.generate');
    Route::get('upload-certificate',[PDFController::class,'upload']);
    Route::post('upload-certificate',[PDFController::class,'store']);
    Route::get('view-certificate/{id}',[PDFController::class,'view']);

    Route::get('validate',[App\Http\Controllers\ValidateController::class,'index']);
    Route::post('validate',[App\Http\Controllers\ValidateController::class,'check']);
    Route::get('status_certificate',[App\Http\Controllers\ValidateController::class,'status']);
});

// Route::get('profile',[App\Http\Controllers\ProfileController::class,'index']);
// Route::post('update-profile',[App\Http\Controllers\ProfileController::class,'update']);
Route::get('/user-documents',[App\Http\Controllers\DashboardController::class,'documents']);
Route::get('/share-document',[App\Http\Controllers\DashboardController::class,'share']);

Route::get('ss',function(){
    return view('certificate.certificate');
});


Route::get('validate',[App\Http\Controllers\ValidateController::class,'index']);
Route::post('validate',[App\Http\Controllers\ValidateController::class,'check']);
Route::get('status_certificate',[App\Http\Controllers\ValidateController::class,'status']);


