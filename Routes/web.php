<?php

use Lib\Route;
use App\Controllers\LoginController;
use App\Controllers\HomeController;
use App\Controllers\CategoryController;
use App\Controllers\SubCategoryController;
/***
 * Routes para login
 */
Route::get('/', [LoginController::class,'index']);


/**
 * Routes para home
 */
Route::get('/home', [HomeController::class, 'home']);
Route::post('/home', [HomeController::class,'validar']);


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





Route::dispatch();