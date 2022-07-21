<?php

use DefStudio\Telegraph\Facades\Telegraph;
use Illuminate\Support\Facades\Route;
use DefStudio\Telegraph\Models\TelegraphChat;


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
    
    $chat = TelegraphChat::find(1);
    $chat->message("<strong>Hello!</strong>\n\nI'm here!\n\n<b>Herculano</b>")->send();

    return view('welcome');
});


