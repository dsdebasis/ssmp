<?php


use App\Http\Controllers\Api\WholesalerController;
use Illuminate\Support\Facades\Route;
// use App\Models\wholesalers;

Route::get('/', function () {
    return 'ds bhai';
});

Route::get('/admin',function(){
    
    return view('index');
});


