<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\UsersController;

use App\Http\Controllers\Admin\ProductsController;

use App\Http\Controllers\User\ProductController;

use App\Http\Controllers\AuthenController;



Route::get('login', [AuthenController::class, 'login'])->name('login');
Route::post('postLogin', [AuthenController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [AuthenController::class, 'logout'])->name('logout');
Route::get('register', [AuthenController::class, 'register'])->name('register');


// http://127.0.0.1:8000/admin/products/update-product
// CRUD product
// Route => Controller => Model 
// Controller => View list, add, update, detail
// http://127.0.0.1:8000/admin/users/update-users


//Admin
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'checkAdmin'
], function () {
    //Nhóm quản lý user
    Route::group([
        'prefix' => 'users',
        'as' => 'users.',
    ], function () {
        Route::get('/', [UsersController::class, 'listUsers'])->name('listUsers');
    });
    //Nhóm quản lý product

    Route::group([
        'prefix' => 'products',
        'as' => 'products.',
    ], function () {
        // CRUD products (list, add, update, detail, delete)=> resful API
        Route::get('/', [ProductsController::class, 'listProduct'])->name('listProduct');

        Route::get('add-product', [ProductsController::class, 'addProduct'])->name('addProduct');

        Route::post('add-product', [ProductsController::class, 'addPostProduct'])->name('addPostProduct');

        Route::delete('delete-product', [ProductsController::class, 'deleteProduct'])->name('deleteProduct');
        // Route::get('delete-product/{id}', [ProductsController::class, 'deleteProduct'])->name('deleteProduct');

        Route::get('detail-product/{idProduct}', [ProductsController::class, 'detailProduct'])->name('detailProduct');

        Route::get('update-product/{idProduct}', [ProductsController::class, 'updateProduct'])->name('updateProduct');

        Route::patch('update-product/{idProduct}', [ProductsController::class, 'updatePatchProduct'])->name('updatePatchProduct');



    });
    //Nhóm quản lý categry
    Route::group([
        'prefix' => 'categories',
        'as' => 'categories.',
    ], function () {
        Route::get('/', [CategoryController::class, 'listCategory'])->name('listCategory');

        Route::get('add-category', [CategoryController::class, 'addCategory'])->name('addCategory');
    });

});

// User
Route::group([
    'prefix' => 'client',
    'as' => 'client.',
], function () {
    //Nhóm quản lý user
    Route::group([
        'prefix' => 'users',
        'as' => 'users.',
    ], function () {
        Route::get('list-product', [ProductController::class, 'listProduct'])->name('listProduct');
    });

});