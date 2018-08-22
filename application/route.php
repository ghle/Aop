<?php

use think\Route;
//banner
Route::get('api/:ver/banner/:banner_id','api/:ver.Banner/banner');
//主题
Route::get('api/:ver/theme','api/:ver.Theme/thelist');
Route::post('api/:ver/product','api/:ver.Theme/getproduct');

//商品
Route::get('api/:ver/prorec','api/:ver.Product/getrecent');
Route::post('api/:ver/prodet','api/:ver.Product/getdetail');

//分类
Route::get('api/:ver/leftnav','api/:ver.Category/LeftNav');
Route::post('api/:ver/bycategory','api/:ver.Category/ByCategory');