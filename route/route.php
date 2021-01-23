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
return [

];
