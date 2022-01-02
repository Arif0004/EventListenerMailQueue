<?php

use App\Events\UserCreatedEvent;
use App\Mail\SendMailToUser;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
Route::get('new-user', function () {

    // return new SendMailToUser;

    $user = User::create([
        'name' => 'Tamim',
        'email' => 'tamim@gmail.com',
        'password' => 123456

    ]);
    event(new UserCreatedEvent($user));
    return 2;
});
