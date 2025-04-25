<?php
use App\Http\Controllers\Api\WholesalerController;
use Illuminate\Support\Facades\Route;

Route::get('/test_api',function(){
return response()->json(['status' => "api is running"]);
});
Route::apiResource('/wholesalers', WholesalerController::class);
