<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\QuotationController;
use App\Http\Controllers\Admin\AdminPasswordController;
use App\Http\Controllers\Admin\ProductSearchController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\ProductCategoryController;

//Admin routes exits here
Route::group(['prefix'=>'/admin','middleware'=>['auth','role:admin']],function(){
  
  Route::get('/',[AdminController::class,'index'])->name('admin.index');
  Route::resource('/usermanagement',UserManagementController::class);

  Route::resource('/product-category',ProductCategoryController::class);
  
  Route::get('/product/search',[ProductController::class,'search'])->name('product.search');
  Route::resource('/product',ProductController::class);
  
  Route::resource('/customer',CustomerController::class);

  Route::resource('/supplier',SupplierController::class);

  Route::resource('/sale',SaleController::class);
  Route::get('/sale/printInvoice/{id}',[SaleController::class,'printInvoice'])->name('sale.printInvoice');

  Route::resource('/quotation',QuotationController::class);
  Route::get('/quotation/printInvoice/{id}',[QuotationController::class,'printInvoice'])->name('quotation.printInvoice');
  Route::get('/quotation/mail/{id}',[QuotationController::class,'mail'])->name('quotation.mail');

  Route::resource('/category',CategoryController::class);

  Route::resource('/expense',ExpenseController::class);

  Route::post('/setting/upload',[SettingController::class,'upload'])->name('setting.upload');
  Route::resource('/setting',SettingController::class);

  Route::get('/admin-password',[AdminPasswordController::class,'index'])->name('admin-password.index');
  Route::patch('/admin-password',[AdminPasswordController::class,'update'])->name('admin-password.update');
});
