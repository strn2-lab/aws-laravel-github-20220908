{"filter":false,"title":"Book.php","tooltip":"/cms/app/Book.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":10,"column":0},"action":"remove","lines":["<?php","","namespace App;","","use Illuminate\\Database\\Eloquent\\Model;","","class Book extends Model","{","    //","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["<?php","use App\\Book;","use Illuminate\\Http\\Request; ","","//本ダッシュボード表示","Route::get('/', 'BooksController@index');","","","// Route::get('/', 'BooksController@index');","","//登録処理","Route::post('/books','BooksController@store');","","//更新画面","Route::post('/booksedit/{books}','BooksController@edit');","","//更新処理","Route::post('/books/update','BooksController@update');","","//本を削除","Route::delete('/book/{book}','BooksController@destroy');","","//Auth","Auth::routes();","Route::get('/home', 'BooksController@index')->name('home');","",""]}],[{"start":{"row":0,"column":0},"end":{"row":26,"column":0},"action":"remove","lines":["<?php","use App\\Book;","use Illuminate\\Http\\Request; ","","//本ダッシュボード表示","Route::get('/', 'BooksController@index');","","","// Route::get('/', 'BooksController@index');","","//登録処理","Route::post('/books','BooksController@store');","","//更新画面","Route::post('/booksedit/{books}','BooksController@edit');","","//更新処理","Route::post('/books/update','BooksController@update');","","//本を削除","Route::delete('/book/{book}','BooksController@destroy');","","//Auth","Auth::routes();","Route::get('/home', 'BooksController@index')->name('home');","",""],"id":3},{"start":{"row":0,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["<?php","","namespace App;","","use Illuminate\\Database\\Eloquent\\Model;","","class Book extends Model","{","    //","}",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":5,"column":0},"end":{"row":5,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1662625039309,"hash":"8238dc6cbb99aff649e35b24a0ff9fe3e021d8e6"}