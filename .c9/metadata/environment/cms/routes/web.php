{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"remove","lines":["e"],"id":2},{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"remove","lines":["m"]},{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"remove","lines":["o"]},{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"remove","lines":["c"]},{"start":{"row":20,"column":19},"end":{"row":20,"column":20},"action":"remove","lines":["l"]},{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"remove","lines":["e"]},{"start":{"row":20,"column":17},"end":{"row":20,"column":18},"action":"remove","lines":["w"]}],[{"start":{"row":20,"column":17},"end":{"row":20,"column":18},"action":"insert","lines":["b"],"id":3},{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"insert","lines":["o"]},{"start":{"row":20,"column":19},"end":{"row":20,"column":20},"action":"insert","lines":["o"]},{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"insert","lines":["k"]},{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"insert","lines":["s"]}],[{"start":{"row":0,"column":0},"end":{"row":42,"column":0},"action":"remove","lines":["<?php","","/*","|--------------------------------------------------------------------------","| Web Routes","|--------------------------------------------------------------------------","|","| Here is where you can register web routes for your application. These","| routes are loaded by the RouteServiceProvider within a group which","| contains the \"web\" middleware group. Now create something great!","|","*/","","use App\\Book;","use Illuminate\\Http\\Request;","","/**","* 本の一覧表示(books.blade.php)","*/","Route::get('/', function () {","    return view('books');","});","","/**","* 本を追加 ","*/","Route::post('/books', function (Request $request) {","    //","});","","/**","* 本を削除 ","*/","Route::delete('/book/{book}', function (Book $book) {","    //","});","","","Auth::routes();","","Route::get('/home', 'HomeController@index')->name('home');","",""],"id":5},{"start":{"row":0,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["<?php","use App\\Book;","use Illuminate\\Http\\Request; ","","//本ダッシュボード表示","Route::get('/', 'BooksController@index');","","","// Route::get('/', 'BooksController@index');","","//登録処理","Route::post('/books','BooksController@store');","","//更新画面","Route::post('/booksedit/{books}','BooksController@edit');","","//更新処理","Route::post('/books/update','BooksController@update');","","//本を削除","Route::delete('/book/{book}','BooksController@destroy');","","//Auth","Auth::routes();","Route::get('/home', 'BooksController@index')->name('home');","",""]}],[{"start":{"row":0,"column":0},"end":{"row":26,"column":0},"action":"remove","lines":["<?php","use App\\Book;","use Illuminate\\Http\\Request; ","","//本ダッシュボード表示","Route::get('/', 'BooksController@index');","","","// Route::get('/', 'BooksController@index');","","//登録処理","Route::post('/books','BooksController@store');","","//更新画面","Route::post('/booksedit/{books}','BooksController@edit');","","//更新処理","Route::post('/books/update','BooksController@update');","","//本を削除","Route::delete('/book/{book}','BooksController@destroy');","","//Auth","Auth::routes();","Route::get('/home', 'BooksController@index')->name('home');","",""],"id":6},{"start":{"row":0,"column":0},"end":{"row":21,"column":58},"action":"insert","lines":["<?php","use App\\Book;","use Illuminate\\Http\\Request; ","","//本ダッシュボード表示","Route::get('/', 'BooksController@index');","","//登録処理","Route::post('/books','BooksController@store');","","//更新画面","Route::post('/booksedit/{books}','BooksController@edit');","","//更新処理","Route::post('/books/update','BooksController@update');","","//本を削除","Route::delete('/book/{book}','BooksController@destroy');","","//Auth","Auth::routes();","Route::get('/home', 'HomeController@index')->name('home');"]}],[{"start":{"row":0,"column":0},"end":{"row":21,"column":58},"action":"remove","lines":["<?php","use App\\Book;","use Illuminate\\Http\\Request; ","","//本ダッシュボード表示","Route::get('/', 'BooksController@index');","","//登録処理","Route::post('/books','BooksController@store');","","//更新画面","Route::post('/booksedit/{books}','BooksController@edit');","","//更新処理","Route::post('/books/update','BooksController@update');","","//本を削除","Route::delete('/book/{book}','BooksController@destroy');","","//Auth","Auth::routes();","Route::get('/home', 'HomeController@index')->name('home');"],"id":7},{"start":{"row":0,"column":0},"end":{"row":22,"column":0},"action":"insert","lines":["<?php","use App\\Book;","use Illuminate\\Http\\Request; ","","//本ダッシュボード表示","Route::get('/', 'BooksController@index');","","//登録処理","Route::post('/books','BooksController@store');","","//更新画面","Route::post('/booksedit/{books}','BooksController@edit');","","//更新処理","Route::post('/books/update','BooksController@update');","","//本を削除","Route::delete('/book/{book}','BooksController@destroy');","","//Auth","Auth::routes();","Route::get('/home', 'HomeController@index')->name('home');",""]}]]},"ace":{"folds":[],"scrolltop":100.5,"scrollleft":0,"selection":{"start":{"row":22,"column":0},"end":{"row":22,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":6,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1662625674706,"hash":"9ae0855b17bb1cdfffab865914f65c57d1b33fe6"}