<?php
namespace app\Http\Controllers;
use Illuminate\Http\Request;


//使うClassを宣言:自分で追加
use App\Book;   //Bookモデルを使えるようにする
use Validator;  //バリデーションを使えるようにする
use Auth;       //認証モデルを使用する
use Helper;

class BooksController extends Controller
{
    //コンストラクタ （このクラスが呼ばれたら最初に処理をする）
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    //本ダッシュボード表示
    public function index() {
        $books = Book::where('user_id',Auth::user()->id)->orderBy('created_at', 'asc')->paginate(3);
        return view('books', [
            'books' => $books,
        ]);
    }

    
    //更新画面
    public function edit($book_id){
        $books = Book::where('user_id',Auth::user()->id)->find($book_id);
        return view('booksedit', [
           'book' => $booksc
        ]);
    }
    
    //更新
    public function update(Request $request) {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'item_date' => 'required',
            'item_number' => 'required',
            'item_number2' => 'required',
            'item_number3' => 'required',
            'item_number4' => 'required',
        ]); 
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        //データ更新
        $books = Book::where('user_id',Auth::user()->id)->find($request->id);
        $books->item_date   = $request->item_date;
        $books->item_number = $request->item_number;
        $books->item_number2 = $request->item_number2;
        $books->item_number3 = $request->item_number3;
        $books->item_number4 = $request->item_number4;
        $books->save();
        return redirect('/');
    }
    
    //登録
    public function store(Request $request) {
        //バリデーション
        $validator = Validator::make($request->all(), [
                'item_date' => 'required',
                'item_number' => 'required',
                'item_number2' => 'required',
                'item_number3' => 'required',
                'item_number4' => 'required',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
                return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
        }
        
        $file = $request->file('item_file'); //file取得
          if( !empty($file) ){                //fileが空かチェック
            $filename = $file->getClientOriginalName();   //ファイル名を取得
            $move = $file->move('./upload/',$filename);  //ファイルを移動：パスが“./upload/”の場合もあるCloud9
          }else{
            $filename = "";
              
          }
        //Eloquentモデル（登録処理）
        $books = new Book;
        $books->user_id  = Auth::user()->id; //追加のコード
        $books->item_date = $request->item_date;
        $books->item_number = $request->item_number;
        $books->item_number2 = $request->item_number2;
        $books->item_number3 = $request->item_number3;
        $books->item_number4 = $request->item_number4;
        $books->item_file = $filename;
        $books->save();
        return redirect('/')->with('message', '勤務登録が完了しました');
    }
        
    //削除処理
    public function destroy(Book $book) {
        $book->delete();
        return redirect('/');
    }
    
    //設定
    public function UserSetting() {
        $users = Book::where('user_id',Auth::user()->id);
        return view('setting', [
            'setting' => $users,
        ]);
    }
   
    
    
}