<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductMasukController;
use App\Http\Controllers\ProductKeluarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('dashboard', function () {
   return view('layouts.master');
});

route::resource('categories',CategoryController::class);
route::resource('customers',CustomerController::class);
route::resource('sales',SaleController::class);
route::resource('suppliers',SupplierController::class);
route::resource('products',ProductController::class);
route::resource('productsOut',ProductKeluarController::class);
route::resource('productsIn',ProductMasukController::class);

Route::get('/categories',[CategoryController::class,'index'])->name('categories');
Route::get('/apiCategories',[CategoryController::class,'apiCategories'])->name('api.categories');
Route::get('/exportCategoriesAll',[CategoryController::class,'exportCategoriesAll'])->name('exportPDF.categoriesAll');
Route::get('/exportCategoriesAllExcel',[CategoryController::class,'exportExcel'])->name('exportExcel.categoriesAll');


Route::get('/customers',[CustomerController::class,'index'])->name('customers');
Route::get('/apiCustomers',[CustomerController::class,'apiCustomers'])->name('api.customers');
Route::post('/importCustomers',[CustomerController::class,'ImportExcel'])->name('import.customers');
Route::get('/exportCustomersAll',[CustomerController::class,'exportCustomersAll'])->name('exportPDF.customersAll');
Route::get('/exportCustomersAllExcel',[pCustomerController::class,'exportExcel'])->name('exportExcel.customersAll');

Route::get('/sales',[SaleController::class,'index'])->name('sales');
Route::get('/apiSales',[SaleController::class,'apiSales'])->name('api.sales');
Route::post('/importSales',[SaleController::class,'ImportExcel'])->name('import.sales');
Route::get('/exportSalesAll',[SaleController::class,'exportSalesAll'])->name('exportPDF.salesAll');
Route::get('/exportSalesAllExcel',[SaleController::class,'exportExcel'])->name('exportExcel.salesAll');

Route::get('/suppliers',[SupplierController::class,'index'])->name('suppliers');
Route::get('/apiSuppliers',[SupplierController::class,'apiSuppliers'])->name('api.suppliers');
Route::post('/importSuppliers',[SupplierController::class,'ImportExcel'])->name('import.suppliers');
Route::get('/exportSupplierssAll',[SupplierController::class,'exportSuppliersAll'])->name('exportPDF.suppliersAll');
Route::get('/exportSuppliersAllExcel',[SupplierController::class,'exportExcel'])->name('exportExcel.suppliersAll');

// Route::get('/products',[ProductController::class,'index'])->name('products');
Route::get('/apiProducts',[ProductController::class,'apiProducts'])->name('api.products');

Route::get('/productsOut',[ProductKeluarController::class,'index'])->name('productsOut');
Route::get('/apiProductsOut',[ProductKeluarController::class,'apiProductsOut'])->name('api.productsOut');
Route::get('/exportProductKeluarAll',[ProductKeluarController::class,'exportProductKeluarAll'])->name('exportPDF.productKeluarAll');
Route::get('/exportProductKeluarAllExcel',[ProductKeluarController::class,'exportExcel'])->name('exportExcel.productKeluarAll');
Route::get('/exportProductKeluar/{id}',[ProductKeluarController::class,'exportProductKeluar'])->name('exportPDF.productKeluar');

Route::get('/productsIn',[ProductMasukController::class,'index'])->name('productsIn');
Route::get('/apiProductsIn',[ProductMasukController::class,'apiProductsIn'])->name('api.productsIn');
Route::get('/exportProductMasukAll',[ProductMasukController::class,'exportProductMasukAll'])->name('exportPDF.productMasukAll');
Route::get('/exportProductMasukAllExcel',[ProductMasukController::class,'exportExcel'])->name('exportExcel.productMasukAll');
Route::get('/exportProductMasuk/{id}',[ProductMasukController::class,'exportProductMasuk'])->name('exportPDF.productMasuk');