<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Response;

Route::get('/', function () {
	return view('welcome');
})->middleware('guest');

//// Task Routes
//Route::get('/tasks', 'TaskController@index');
//Route::get('/tasks/{id}', 'TaskController@show');
//Route::patch('/tasks/{id}/update', 'TaskController@update');
//Route::patch('/tasks/{id}/edit', 'TaskController@edit');
//Route::get('/tasks/find/{name}', 'TaskController@search');
//Route::post('/task', 'TaskController@store');
//Route::delete('/task/{task}', 'TaskController@destroy');
Route::resource('tasks', 'TaskController', ['except' => ['create']]);

Route::group(['prefix' => 'api/v1'], function () {
//    Route::get('tasks/{id}', 'Api\v1\TaskController@show');
//    Route::get('tasks',      'Api\v1\TaskController@index');
    Route::resource('tasks', 'Api\v1\TaskController', ['except' => ['create']]);
});


// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// 发送密码重置链接路由
Route::get('password/email/{email?}', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// 密码重置路由
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('bs/session', 'BSDemoController@session');
Route::get('bs/{tag}', 'BSDemoController@demo');
Route::post('bs/up', 'BSDemoController@up');
Route::post('bs/up2', 'BSDemoController@up2');
Route::post('bs/up3', 'BSDemoController@up3');
Route::get('error1024', function () {
	abort(403, '测试1024');
});

//http://laravelacademy.org/post/623.html
//1、Response篇
//Illuminate\Http\Response 类中还使用了ResponseTrait，header方法正是该trait提供的，除了header之外，该trait还提供了withCookie、content和status方法。
//1.1 基本响应
Route::get('testResponse',function(){
    $content = 'Hello LaravelAcademy！';
    $status = 200;
    $value = 'text/html;charset=utf-8';
//    return (new Response($content,$status))->header('Content-Type',$value);
    return response($content,$status)->header('Content-Type',$value);
});
//1.2 添加Cookie
Route::get('testResponseCookie',function(){
    $content = 'Hello LaravelAcademy！';
    $status = 200;
    $value = 'text/html;charset=utf-8';
    return response($content,$status)->header('Content-Type',$value)
        ->withCookie('site','LaravelAcademy.org');
});
//2、ResponseFactory篇
//response函数如果不传入参数会返回 Illuminate\Contracts\Routing\ResponseFactory契约的实现——Illuminate\Routing\ResponseFactory，该类中提供了多个方法用来生成更加丰富的响应类型，比如视图响应、JSON响应、文件下载等等。
//2.1 视图响应
Route::get('testResponseView',function(){
    $value = 'text/html;charset=utf-8';
//    return response()->view('welcome',['message'=>'Hello LaravelAcademy'])
//        ->header('Content-Type',$value);
    return view('welcome',['message'=>'Hello LaravelAcademy']);
});
//2.2 返回JSON/JSONP
Route::get('testResponseJson',function(){
//    return response()->json(['name'=>'LaravelAcademy','passwd'=>'LaravelAcademy.org']);
//    return response()->json(['name'=>'LaravelAcademy','passwd'=>'LaravelAcademy.org'], 200, [], JSON_PRETTY_PRINT);
    return response()->json(['name'=>'LaravelAcademy','passwd'=>'LaravelAcademy.org'], 200, [], JSON_PRETTY_PRINT)
        ->setCallback(request()->input('callback'));
});
//2.3 文件下载
//uncomment this line in php.ini into php folder.
//extension=php_fileinfo.dll
Route::get('testResponseDownload',function(){
    return response()->download(
        realpath(base_path('public/images')).'/head.jpg',
        '头像.jpg'
    );
});
//3、 RedirectResponse篇
//重定向响应是 Illuminate\Http\RedirectResponse类的实例，我们通常使用全局帮助函数redirect来生成 RedirectResponse实例。和response类似，redirect函数如果接收参数则调用的是Illuminate\Routing\Redirector类的to方法，如果无参调用则返回的是Redirector对象实例。
Route::get('testResponseRedirect', function () {
    return redirect('/');
});
//如果要重定向到上一个位置，则使用back方法：
Route::post('testResponseRedirect2', function () {
    // 验证请求...
    return back()->withInput();
});
//3.2 重定向到命名路由
Route::get('/hello/laravelacademy/{id}',['as'=>'academy',function($id){
    return 'Hello LaravelAcademy '.$id;
}]);
Route::get('testResponseRedirect3',function(){
//    return redirect()->route('tasks.index');
    return redirect()->route('academy',100);
});
//3.3 重定向到控制器动作
Route::get('testResponseRedirect4',function(){
    return redirect()->action('BSDemoController@demo',['t1']);
});
//3.4 带一次性Session数据的重定向
//使用with方法可以携带一次性session数据到重定向请求页面（一次性session数据即使用后立即销毁的session数据项）：
Route::get('testResponseRedirect5', function () {
    // 更新用户属性...
    return redirect()->action('BSDemoController@demo',['t8'])->with('status', 'Profile updated!');
});