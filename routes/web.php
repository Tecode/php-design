<?php

// 前台路由
Route::group(['namespace' => 'Front', 'prefix' => ''], function () {
    // 注册成功
    Route::get('/success', 'SuccessController@index')->name('home');
    Route::get('/', 'HomeController@index');
    Route::get('/detail/{id}', 'DetailController@index');
    Route::get('/payOrder/{scenicId}', 'OrderListController@payOrder');
    Route::get('/ticket', 'TicketController@index');
    Route::get('/oderlist', 'OrderListController@index');
    //扫码页面
    Route::get('/scan_code', 'OrderListController@scanCode');
    Route::post('/pay', 'OrderListController@pay');
});
    //登录才可以访问的路由
    Route::group(['middleware' => ['web', 'login'], 'namespace' => 'Front', 'prefix' => ''], function () {
        Route::post('/payOrder/{scenicId}', 'OrderListController@createOrder');
        Route::get('/orderDetail/{orderId}', 'OrderListController@orderDetail');
        Route::get('/pay', 'OrderListController@isPay');
        Route::post('/continue_pay/{orderId}', 'OrderListController@continuePay');
    });
// 后台路由
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/users', 'UsersController@index');
    Route::get('/tourisminfo', 'TourismInfoController@index');
    Route::get('/tourismlist', 'TourismListController@index');
    Route::resource('/scenicspot', 'ScenicSpotController');
    Route::post('/upload', 'ScenicSpotController@upload');
    Route::delete('/deleteImage/{id}', 'ScenicSpotController@deleteImage');
    Route::delete('/deleteOrder/{id}', 'HomeController@deleteOrder');
    Route::get('/comment', 'HomeController@comment');
    Route::post('/comment/{id}', 'HomeController@deletCommon');
});

Auth::routes();