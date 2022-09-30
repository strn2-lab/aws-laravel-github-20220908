<?php
use App\Book;
use Illuminate\Http\Request; 

Route::get('/statuschange','BooksController@statuschange');

//本ダッシュボード表示
Route::get('/', 'BooksController@index');

//登録処理
Route::post('/books','BooksController@store');

//更新画面
Route::post('/booksedit/{books}','BooksController@edit');

//更新処理
Route::post('/books/update','BooksController@update');

//本を削除
Route::delete('/book/{book}','BooksController@destroy');

Route::delete('users/deleteconfirm/userdestroy','BooksController@userdestroy');

Route::get('users/deleteconfirm/','BooksController@deleteconfirm')->name('users.deleteconfirm');

//設定
Route::get('/setting','BooksController@UserSetting');

Route::post('/setting/settingupdate','BooksController@settingupdate');


Route::get('/passwordform','BooksController@passwordedit');
Route::put('/password/change','BooksController@passwordupdate')->name('password.change');

//Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');






