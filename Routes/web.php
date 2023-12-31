<?php

use Lib\Route;
use App\Controllers\LoginController;
use App\Controllers\HomeController;
use App\Controllers\CategoryController;
use App\Controllers\SubCategoryController;
use App\Controllers\BrandsController;
use App\Controllers\ArticulosCatController;
use App\Controllers\InventarioEcommerController;
/***
 * Routes para login
 */
Route::get('/', [LoginController::class,'index']);
Route::post('/home', [LoginController::class, 'auth']);

/**
 * Routes Home
 */

 Route::get('/home',[HomeController::class,'home']);

/**
 * Routes para category
 */


Route::get('/category',[CategoryController::class,'category']);
Route::post('/category/save', [CategoryController::class, 'saveCategory']);
Route::post('/category/delete', [CategoryController::class, 'deleteCategory']);
Route::post('/category/update', [CategoryController::class, 'updateCategory']);

/**
 * Routes para sub category
 */

Route::get('/subcategory', [SubCategoryController::class, 'subcategory']);
Route::post('/subcategory/save', [SubCategoryController::class, 'addSubCategory']);
Route::post('/subcategory/update', [SubCategoryController::class, 'updateSubCategory']);
Route::post('/subcategory/delete', [SubCategoryController::class, 'deleteSubCategory']);

/**
 * Routes para marcas
 * 
 */

Route::get('/brands', [BrandsController::class, 'brands']);
Route::post('/brands/addBrand', [BrandsController::class, 'addBrand']);


Route::get('/articulos', [ArticulosCatController::class, 'catalogo']);
Route::post('/articulos/showDetails', [ArticulosCatController::class, 'showDetails']);
Route::post('/articulos/upViewProduct', [ArticulosCatController::class, 'upViewProduct']);

/** Inventario Ecomm */
Route::get('/intvecommers', [InventarioEcommerController::class, 'getInvent']);



Route::dispatch();