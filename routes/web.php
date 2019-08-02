<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/login',function(){
	return 'login';
});

Route::get('/index.jsp',function(){
	return '???';
});


Route::group([],function(){


	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/admin',function(){
		return 'admin';
	});
	//更新
	Route::get('/update',function(){
		echo 'update';
	})->middleware('login');
	//删除
	Route::get('/delete',function(){

	});

	Route::get('/user/{id}',function($id){
		echo '用户ID是'.$id;
	})->where('id','\d+');

	Route::get('/users/{name}',function($name){
		echo '用户name是'.$name;
	});

	Route::get('/getParams/{name}-{id}', function($name, $id){
	    echo '用户name是'.$name.'<br>';
	    echo '用户ID是'.$id;
	});

	Route::get('/fsdafsdafa',function(){
		echo '这里是后台';
	})->name('admins');

	//创建url
	Route::get('/home',function(){
		return '<a href="'.route('admins').'">后台</a>';
	});

	Route::get('/404',function(){
		if( empty($_GET['id']) ){
			abort(404);
		}
	});

});

//后台
Route::get('/user/add','UserController@add');
Route::post('/user/insert','UserController@insert');

//API接口路由
Route::get('/user/{id}','UserController@show')->name('user.show');
Route::get('/test',function(){
	echo route('user.show',['id'=>100]);
});

Route::get('/users','UserController@index')->middleware('login');


//资源控制器 	一条顶七条
Route::resource('tiezi','Tiezicontroller');

Route::get('/request','TieziController@request');

Route::get('/form','TieziController@form');

Route::post('/upload','TieziController@upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cookie','HomeController@set');

//闪存
Route::get('/flash','HomeController@flash');

Route::get('get-flash','Homecontroller@getFlash');

Route::get('/user-2','HomeController@user');

Route::post('/user-2','HomeController@insert');


Route::get('/response','HomeController@response');

Route::get('/views','HomeController@views');

Route::get('/page-1','HomeController@page1');
Route::get('/page-2','HomeController@page2');



Route::get('/control','HomeController@control');


Route::get('/select','DBController@select');

Route::get('/trans','DBController@trans');

//join使用
Route::get('/join','DBcontroller@join');








