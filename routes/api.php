<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/**
 * Buyers
 */
Route::resource('buyers', 'BuyerController', [
    'only' => [
        'index', 'show'
    ]
]);

Route::resource('buyers.transactions', 'Buyer\BuyerTransactionController', [
    'only' => [
        'index'
    ]
]);


/**
 * Categories
 */
Route::resource('categories', 'CategoryController', [
    'except' => [
        'create', 'edit'
    ]
]);


/**
 * Products
 */
Route::resource('products', 'ProductController', [
    'only' => [
        'index', 'show'
    ]
]);


/**
 * Sellers
 */
Route::resource('sellers', 'SellerController', [
    'only' => [
        'index', 'show'
    ]
]);


/**
 * Transactions
 */
Route::resource('transactions', 'TransactionController', [
    'only' => [
        'index', 'show'
    ]
]);

Route::resource('transactions.categories', 'Transaction\TransactionCategoryController', [
    'only' => [
        'index'
    ]
]);

Route::resource('transactions.sellers', 'TransactionSellerController', [
    'only' => [
        'index'
    ]
]);


/**
 * Users
 */
Route::resource('users', 'UserController', [
    'except' => [
        'create', 'edit'
    ]
]);