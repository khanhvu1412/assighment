<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\UsersController;

use App\Http\Controllers\Admin\ProductsController;

use App\Http\Controllers\AuthenController;

use App\Http\Controllers\User\HomeController;

Route::get('login', [AuthenController::class, 'login'])->name('login');

Route::post('postLogin', [AuthenController::class, 'postLogin'])->name('postLogin');

Route::get('logout', [AuthenController::class, 'logout'])->name('logout');

Route::get('register', [AuthenController::class, 'register'])->name('register');

Route::post('post-register', [AuthenController::class, 'postRegister'])->name('postRegister');

Route::get('forgot-Password', [AuthenController::class, 'forgotPassword'])->name('forgotPassword');

Route::post('forgot-Password', [AuthenController::class, 'check_forgot_password'])->name('check_forgot_password');

Route::get('reset-Password/{token}', [AuthenController::class, 'resetPassword'])->name('resetPassword');

Route::post('reset-Password/{token}', [AuthenController::class, 'check_reset_password'])->name('check_reset_password');






// http://127.0.0.1:8000/admin/products/update-product
// CRUD product
// Route => Controller => Model 
// Controller => View list, add, update, detail
// http://127.0.0.1:8000/admin/users/update-users


// Route Admin
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'checkAdmin'
], function () {

    Route::get('dashboards', [UsersController::class, 'dashboard'])->name('dashboard');
    //Nhóm quản lý user
    Route::group([
        'prefix' => 'users',
        'as' => 'users.',
    ], function () {
        Route::get('/', [UsersController::class, 'listUsers'])->name('listUsers');
        Route::delete('delete-user', [UsersController::class, 'deleteUsers'])->name('deleteUsers');
        Route::get('update-user/{idUser}', [UsersController::class, 'updateUsers'])->name('updateUsers');
        Route::patch('update-user/{idUser}', [UsersController::class, 'updatePatchUsers'])->name('updatePatchUsers');

        Route::get('detail-user/{idUser}', [UsersController::class, 'detailUsers'])->name('detailUsers');
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

        Route::post('add-category', [CategoryController::class, 'addPostCategory'])->name('addPostCategory');    

        Route::delete('delete-category', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');    

        Route::get('update-category/{idCategory}', [CategoryController::class, 'updateCategory'])->name('updateCategory');        
        
        Route::patch('update-category/{idCategory}', [CategoryController::class, 'updatePatchCategory'])->name('updatePatchCategory');      
        
        

    });

});


// http://127.0.0.1:8000/
Route::get('/', function(){
    return redirect()->route('client.shops.home');
});

// Roue User
Route::group([
    'prefix' => 'client',
    'as' => 'client.',
], function () {
    Route::group([
        'prefix' => 'shops',
        'as' => 'shops.',
    ], function () {
        Route::get('home', [HomeController::class, 'home'])->name('home');

        Route::get('shop-product', [HomeController::class, 'listProduct'])->name('listProduct');

        Route::get('about', [HomeController::class, 'about'])->name('about');

        Route::get('lienhe', [HomeController::class, 'lienHe'])->name('lienHe');

        Route::get('detail-product/{id}', [HomeController::class, 'detailProduct'])->name('detailProduct');

        Route::get('search-category/{id}', [HomeController::class, 'searchCategory'])->name('searchCategory');
        
        Route::get('search-product', [HomeController::class, 'searchProduct'])->name('searchProduct');

        Route::get('user-info', [HomeController::class, 'userInfo'])->name('userInfo');

        Route::get('update-info', [HomeController::class, 'updateInfo'])->name('updateInfo');

        Route::patch('update-info', [HomeController::class, 'updatePatchInfo'])->name('updatePatchInfo');

        Route::get('change-password', [HomeController::class, 'changePassword'])->name('changePassword');
        
        Route::patch('change-password', [HomeController::class, 'changePatchPassword'])->name('changePatchPassword');




        // Route::get('new-product', [HomeController::class, 'newProduct'])->name('newProduct');


    });

});