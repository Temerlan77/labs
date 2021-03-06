<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;

use App\Http\Controllers\ClientController;

use \App\Http\Controllers\FilesController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/home', function () {
    return "home";
});

Route::get('client/add', function() {
    DB::table('clients')-> insert([
        'name' => 'Tima',
        'surname' => 'Bakyt',
        'age' => 19
    ]);
});

Route::get('client', [ClientController::class, 'index']);
Route::get('client/create', function() {
    return view('client.create');
});

Route::post('client/create', [ClientController::class, 'store'])->name('add-client');

Route::get('client/{id}', [ClientController::class, 'get_client']);

Route::get('files', [\App\Http\Controllers\FilesController::class, 'show']);
Route::post('files', [\App\Http\Controllers\FilesController::class, 'upload'])->name('files.upload');

Route::get('/send-mail',function(){
    $details = [
        'title' => 'Mail from Surfside Media',
        'body' =>'This is from testing email using smtp'
    ];
    \Mail::to('bads12377@gmail.com')->send(new \App\Mail\TestMail($details));
    echo "Email has been sent!";
});


Route::view('profile', 'profile');

Route::get( 'main', [\App\Http\Controllers\LocalizationController::class, 'index']);