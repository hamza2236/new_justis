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




// admin route start//
// admin route start//
// admin route start//
Route::get("admin-dashboard", function(){
    return view("admin.index");
 });
 Route::get("advanced-ratings", function(){
    return view("admin.advanced-ratings");
 });
 Route::get("advanced-sweetalerts", function(){
   return view("admin.advanced-sweetalerts");
});
Route::get("app-calendar", function(){
   return view("admin.app-calendar");
});
Route::get("app-chat", function(){
   return view("admin.app-chat");
});
Route::get("app-contact-list", function(){
   return view("admin.app-contact-list");
});
Route::get("auth-login", function(){
   return view("admin.auth-login");
});
Route::get("auth-register", function(){
   return view("admin.auth-register");
});

Route::get("auth-recoverpw", function(){
   return view("admin.auth-recoverpw");
});
Route::get("charts-apex", function(){
   return view("admin.charts-apex");
});
Route::get("email-templates-alert", function(){
   return view("admin.email-templates-alert");
});
Route::get("forms-advanced", function(){
   return view("admin.forms-advanced");
});
Route::get("forms-editors", function(){
   return view("admin.forms-editors");
});
Route::get("forms-repeater", function(){
   return view("admin.forms-repeater");
});
Route::get("forms-uploads", function(){
   return view("admin.forms-uploads");
});
Route::get("forms-wizard", function(){
   return view("admin.forms-wizard");
});
Route::get("page-invoice", function(){
   return view("admin.page-invoice");
});
Route::get("page-pricing", function(){
   return view("admin.page-pricing");
});
Route::get("page-profile", function(){
   return view("admin.page-profile");
});
Route::get("tables-datatable", function(){
   return view("admin.tables-datatable");
});
Route::get("ui-other-clipboard", function(){
   return view("admin.ui-other-clipboard");
});
// admin route end//
// admin route end//
// admin route end//




// pro route start//
// pro route start//
// pro route start//
Route::get("pro-dashboard", function(){
   return view("pro.index");
});
Route::get("advanced-ratings-pro", function(){
   return view("pro.advanced-ratings");
});
Route::get("advanced-sweetalerts-pro", function(){
  return view("pro.advanced-sweetalerts");
});
Route::get("app-calendar-pro", function(){
  return view("pro.app-calendar");
});
Route::get("app-chat-pro", function(){
  return view("pro.app-chat");
});
Route::get("app-contact-list-pro", function(){
  return view("pro.app-contact-list");
});
Route::get("auth-login-pro", function(){
  return view("pro.auth-login");
});
Route::get("auth-register-pro", function(){
  return view("pro.auth-register");
});

Route::get("auth-recoverpw-pro", function(){
  return view("pro.auth-recoverpw");
});
Route::get("charts-apex-pro", function(){
  return view("pro.charts-apex");
});
Route::get("email-templates-alert-pro", function(){
  return view("pro.email-templates-alert");
});
Route::get("forms-advanced-pro", function(){
  return view("pro.forms-advanced");
});
Route::get("forms-editors-pro", function(){
  return view("pro.forms-editors");
});
Route::get("forms-repeater-pro", function(){
  return view("pro.forms-repeater");
});
Route::get("forms-uploads-pro", function(){
  return view("pro.forms-uploads");
});
Route::get("forms-wizard-pro", function(){
  return view("pro.forms-wizard");
});
Route::get("page-invoice-pro", function(){
  return view("pro.page-invoice");
});
Route::get("page-pricing-pro", function(){
  return view("pro.page-pricing");
});
Route::get("page-profile-pro", function(){
  return view("pro.page-profile");
});
Route::get("tables-datatable-pro", function(){
  return view("pro.tables-datatable");
});
Route::get("ui-other-clipboard-pro", function(){
  return view("pro.ui-other-clipboard");
});
// pro route end//
// pro route end//
// pro route end//

