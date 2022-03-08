<?php

/*
|--------------------------------------------------------------------------
| Blog Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your package.
|
*/


use Cpuche\Blog\Frontend\Http\Controllers\CategoryController;


Route::prefix('/blog/categories')->group(function() {
	Route::get('/', [CategoryController::class, 'index']);
});
