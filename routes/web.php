<?php

use Illuminate\Support\Facades\DB;
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

    $name_env = config('app');
    $database = config('database');

    /*$bamba = DB::connection('mysql')->table('stock_manufacturer')->where('id', '=', 1)->orWhere('id', '=', 2)->get();

    $bamba = json_decode(json_encode($bamba), true);*/

    return view('welcome',
        [
        'app_name_env' => $name_env,
        'database' => $database,
//        'bamba' => $bamba
        ]);
});
