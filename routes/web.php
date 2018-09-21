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
Route::get('/login', ['as' => 'login', 'uses' => 'UserController@login']);
Route::post('/login', ['as' => 'login', 'uses' => 'UserController@login']);
Route::get('/creatUser', ['as' => 'creatUser', 'uses' => 'UserController@creatUser']);

if(!isset($_COOKIE['isLogin']) && (url()->current() !=  'http://localhost/ERPPho/login' && url()->current() !=  'http://localhost/ERPPho/creatUser' )){
    header('Location:login');die;
}

Route::get('/pho', ['as' => 'pho', 'uses' => 'PhoController@pho']);
Route::get('/quanly', ['as' => 'quanly', 'uses' => 'PhoController@quanly']);
Route::get('/categorys/add', 'CategoryController@add');
Route::post('/categorys/add', 'CategoryController@add');
Route::get('/categorys/list', 'CategoryController@list');
Route::get('/categorys/edit/{id}', 'CategoryController@edit');
Route::post('/categorys/edit/{id}', 'CategoryController@edit');
Route::get('/categorys/delete/{id}', 'CategoryController@delete');

Route::get('/foods/add', 'FoodsController@add');
Route::post('/foods/add', 'FoodsController@add');
Route::get('/foods/list', 'FoodsController@list');
Route::get('/foods/edit/{id}', 'FoodsController@edit');
Route::post('/foods/edit/{id}', 'FoodsController@edit');
Route::get('/foods/delete/{id}', 'FoodsController@delete');
Route::get('foods/getFoodsById/{id}', 'FoodsController@getFoodsById');
Route::post('bills/saveData', 'BillsController@saveData');
Route::get('bills/saveData', 'BillsController@saveData');
Route::get('/', ['as' => '/', 'uses' => 'PhoController@pho']);
Route::get('/materials/add', 'MaterialsController@add');
Route::post('/materials/add', 'MaterialsController@add');
Route::get('/materials/list', 'MaterialsController@list');
Route::get('/revenue/day', 'MaterialsController@day');
