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

Route::resource('buyers.products', 'Buyer\BuyerProductController', [
    'only' => [
        'index'
    ]
]);

Route::resource('buyers.sellers', 'Buyer\BuyerSellerController', [
    'only' => [
        'index'
    ]
]);

Route::resource('buyers.categories', 'Buyer\BuyerCategoryController', [
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

Route::resource('categories.products', 'Category\CategoryProductController', [
    'only' => [
        'index'
    ]
]);

Route::resource('categories.sellers', 'Category\CategorySellerController', [
    'only' => [
        'index'
    ]
]);

Route::resource('categories.transactions', 'Category\CategoryTransactionController', [
    'only' => [
        'index'
    ]
]);

Route::resource('categories.buyers', 'Category\CategoryBuyerController', [
    'only' => [
        'index'
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

Route::resource('products.transactions', 'Product\ProductTransactionController', [
    'only' => [
        'index'
    ]
]);

Route::resource('products.buyers', 'Product\ProductBuyerController', [
    'only' => [
        'index'
    ]
]);

Route::resource('products.categories', 'Product\ProductCategoryController', [
    'only' => [
        'index', 'update', 'destroy'
    ]
]);

Route::resource('products.buyers.transactions', 'Product\ProductBuyerTransactionController', [
    'only' => [
        'store'
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

Route::resource('sellers.transactions', 'Seller\SellerTransactionController', [
    'only' => [
        'index'
    ]
]);

Route::resource('sellers.categories', 'Seller\SellerCategoryController', [
    'only' => [
        'index'
    ]
]);

Route::resource('sellers.buyers', 'Seller\SellerBuyerController', [
    'only' => [
        'index'
    ]
]);

Route::resource('sellers.products', 'Seller\SellerProductController', [
    'except' => [
        'create', 'edit', 'show'
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
Route::name('me')->get('users/me', 'UserController@me');

Route::resource('users', 'UserController', [
    'except' => [
        'create', 'edit'
    ]
]);


Route::name('verify')->get('users/verify/{token}', 'UserController@verify');

Route::name('resend')->get('users/{user}/resend', 'UserController@resend');


Route::post('oauth/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');