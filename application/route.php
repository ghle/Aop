<?php

use think\Route;
//banner
Route::get('api/:ver/banner/:banner_id','api/:ver.Banner/banner');
//主题
Route::get('api/:ver/theme','api/:ver.Theme/thelist');
Route::post('api/:ver/product','api/:ver.Theme/getproduct');