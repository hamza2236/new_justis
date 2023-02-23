<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControllerME;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\aboutController;



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

Route::get('/', [homeControllerME::class,'index']);
Route::get('pricing', [homeControllerME::class,'pricing']);
Route::get('about', [aboutController::class,'index']);
Route::get('contact', [aboutController::class,'contact']);
Route::get('faq', [aboutController::class,'faq']);
Route::get('privacy', [aboutController::class,'privacy']);
Route::get('terms-and-conditions', [aboutController::class,'termsConditions']);






// admin route start//
// admin route start//
// admin route start//

Route::get("auth-login", function(){
  return view("admin.auth-login");
});
Route::get("auth-register", function(){
  return view("admin.auth-register");
});

Route::group(['middleware'=>['IsAdmin']],function () {


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

});
// admin route end//
// admin route end//
// admin route end//




// pro route start//
// pro route start//
// pro route start//

Route::get("auth-login-pro", function(){
  return view("pro.auth-login");
});
Route::get("auth-register-pro", function(){
  return view("pro.auth-register");
});

Route::group(['middleware'=>['IsPro']],function () {

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
});
// pro route end//
// pro route end//
// pro route end//







// client route start//
// client route start//
// client route start//
Route::get("auth-login-client", function(){
  return view("client.auth-login");
});
Route::get("auth-register-client", function(){
  return view("client.auth-register");
});


Route::group(['middleware'=>['IsClient']],function () {

Route::get("client-dashboard", function(){
   return view("client.index");
});
Route::get("advanced-ratings-client", function(){
   return view("client.advanced-ratings");
});
Route::get("advanced-sweetalerts-client", function(){
  return view("client.advanced-sweetalerts");
});
Route::get("app-calendar-client", function(){
  return view("client.app-calendar");
});
Route::get("app-chat-client", function(){
  return view("client.app-chat");
});
Route::get("app-contact-list-client", function(){
  return view("client.app-contact-list");
});

Route::get("auth-recoverpw-client", function(){
  return view("client.auth-recoverpw");
});
Route::get("charts-apex-client", function(){
  return view("client.charts-apex");
});
Route::get("email-templates-alert-client", function(){
  return view("client.email-templates-alert");
});
Route::get("forms-advanced-client", function(){
  return view("client.forms-advanced");
});
Route::get("forms-editors-client", function(){
  return view("client.forms-editors");
});
Route::get("forms-repeater-client", function(){
  return view("client.forms-repeater");
});
Route::get("forms-uploads-client", function(){
  return view("client.forms-uploads");
});
Route::get("forms-wizard-client", function(){
  return view("client.forms-wizard");
});
Route::get("page-invoice-client", function(){
  return view("client.page-invoice");
});
Route::get("page-pricing-client", function(){
  return view("client.page-pricing");
});
Route::get("page-profile-client", function(){
  return view("client.page-profile");
});
Route::get("tables-datatable-client", function(){
  return view("client.tables-datatable");
});
Route::get("ui-other-clipboard-client", function(){
  return view("client.ui-other-clipboard");
});
});
// client route end//
// client route end//
// client route end//



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
