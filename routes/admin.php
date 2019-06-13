<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "Admin" middleware group. Enjoy building your API!
|
*/

Route::get('',[
    'as' => 'admin.dashboard.index',
    'use' => 'DashboardController@index'
]);

Route::group(['prefix' => 'products'], function () {
    
    Route::get('',[
        'as' => 'admin.products.index',
        'uses' => 'ProductController@index'
    ]);

    Route::get('create',[
        'as' => 'admin.products.create',
        'uses' => 'ProductController@create'
    ]);

    Route::post('',[
        'as' => 'admin.products.store',
        'uses' => 'ProductController@store'
    ]);

    Route::get('{id}edit',[
        'as' => 'admin.products.edit',
        'uses' => 'ProductController@edit'
    ]);

    Route::put('{id}',[
        'as' => 'admin.products.update',
        'uses' => 'ProductController@update'
    ]);

    Route::delete('{id}',[
        'as' => 'admin.products.destroy',
        'uses' => 'ProductController@destroy'
    ]);
});

// Route::group(['prefix' => 'categories'], function () {
    
//     Route::get('',[
//         'as' => 'admin.categories.index',
//         'uses' => 'CategoryController@index'
//     ]);

//     Route::get('create',[
//         'as' => 'admin.categories.create',
//         'uses' => 'CategoryController@create'
//     ]);

//     Route::post('',[
//         'as' => 'admin.categories.store',
//         'uses' => 'CategoryController@store'
//     ]);

//     Route::get('{id}edit',[
//         'as' => 'admin.categories.edit',
//         'uses' => 'CategoryController@edit'
//     ]);

//     Route::put('{id}',[
//         'as' => 'admin.categories.update',
//         'uses' => 'CategoryController@update'
//     ]);

//     Route::delete('{id}',[
//         'as' => 'admin.categories.destroy',
//         'uses' => 'CategoryController@destroy'
//     ]);
// });


// dùng resource

Route::resource('categories', 'CategoryController',[
    'parameters' => [
        'categories' => 'id'
    ],
    'except' => 'show',
    'as' => 'admin'
]);

Route::group(['prefix' => 'orders'], function () {
    Route::get('',[
        'as' => 'admin.orders.index',
        'uses' => 'OrderController@index'
    ]);

    Route::get('processsed',[
        'as' => 'admin.orders.index',
        'uses' => 'OrderController@index'
    ]);

    Route::get('{id}edit',[
        'as' => 'admin.orders.edit',
        'uses' => 'OrderController@edit'
    ]);

    Route::put('{id}',[
        'as' => 'admin.orders.update',
        'uses' => 'OrderController@update'
    ]);
});

Route::resource('users', 'UserController',[
    'parameters' => [
        'users' => 'id'
    ],
    'except' => 'show',
    'as' => 'admin'
]);

