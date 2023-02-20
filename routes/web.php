<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\caseController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\teamController;


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
Route::get('/', [homeController::class,'index']);
Route::get('about', [aboutController::class,'index']);
Route::get('blog-details', [blogController::class,'blogDetails']);
Route::get('blog', [blogController::class,'index']);
Route::get('cases', [caseController::class,'index']);
Route::get('cases-details', [caseController::class,'casesDetails']);

Route::get('contact', [aboutController::class,'contact']);
Route::get('faq', [aboutController::class,'faq']);
Route::get('pricing', [homeController::class,'pricing']);
Route::get('service-details', [servicesController::class,'serviceDetails']);
Route::get('service', [servicesController::class,'index']);
Route::get('team-details', [teamController::class,'teamDetails']);
Route::get('testimonial', [teamController::class,'testi']);
Route::get('team', [teamController::class,'index']);



