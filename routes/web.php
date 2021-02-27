<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;

//public routes
Route::get('/',[HomeController::class,'index'])->name('home.index');

//auth routes
Route::group(['prefix'=>'/user','middleware'=>'auth'],function(){
    Route::get('/',[UserController::class,'index'])->name('user.index');   
    Route::post('/',[UserController::class,'store'])->name('user.store');  
    
    Route::get('/account',[AccountController::class,'index'])->name('account.index'); //this route redirect user based on role
    Route::get('/logout',[AccountController::class,'logout'])->name('account.logout');

});
