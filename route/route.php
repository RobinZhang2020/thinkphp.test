<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('tt', function () {
    print __METHOD__;
    echo __FUNCTION__;
    dump(__DIR__);
});

//Route::get('hello/:name', 'index/hello');
Route::get('hello', 'index/hello');

Route::get('hello1', 'test/test1/test2');

Route::get('hello2', function (){
    return view('test@test1/test2');
}) ;

Route::get('hello3/:name', function ($name){
    print 'hello, ';
    print $name;
    //print($name);
}) ;

Route::get('', 'welcome/index/home');
Route::get('/help', 'welcome/index/help');
Route::get('/about', 'welcome/index/about');

Route::get('/signup', 'user/auth/create');
return [

];
