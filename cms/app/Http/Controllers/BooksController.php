<?php
namespace app\Http\Controllers;
use Illuminate\Http\Request;


//使うClassを宣言:自分で追加
use App\Book;   //Bookモデルを使えるようにする
use App\User;
use Carbon\Carbon;
use Validator;  //バリデーションを使えるようにする
use Auth;       //認証モデルを使用する
use Helper;


class BooksController extends Controller{
    //コンストラクタ （このクラスが呼ばれたら最初に処理をする）
    public function __construct(){
        $this->middleware('auth');
    }
    
    
    //本ダッシュボード表示
    public function index(){
        $books = Book::where('user_id',Auth::user()->id)->orderBy('created_at', 'asc')->paginate(3);
            return view('books', [
                'books' => $books,
            ]);
    }

    
    //更新画面
    public function edit($book_id){
        $books = Book::where('user_id',Auth::user()->id)->find($book_id);
            return view('booksedit', [
                'book' => $books
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
        // //バリデーション
        // $validator = Validator::make($request->all(), [
        //         'item_date' => 'required',
        //         'item_number' => 'required',
        //         'item_number2' => 'required',
        //         'item_number3' => 'required',
        //         'item_number4' => 'required',
        // ]);
        //バリデーション:エラー 
        // if($validator->fails()){
        //         return redirect('/')
        //             ->withInput()
        //             ->withErrors($validator);
        // }
        
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
        
    public function destroy(Book $book) {
        $book->delete();
        return redirect('/');
    }
    
    //設定画面
    public function UserSetting() {
        $users = User::where('user_id',Auth::user()->id);
            return view('setting', [
                'setting' => $users,
            ]);
    }
    
    //設定更新
    public function settingupdate(Request $request) {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]); 
        //バリデーション:エラー 
        if ($validator->fails()){
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        $icon = $request->file('profile_image'); //file取得
          if( !empty($icon) ){                //fileが空かチェック
            $iconname = $icon->getClientOriginalName();   //ファイル名を取得
            $move = $icon->move('./iconUpload/',$iconname);  //ファイルを移動：パスが“./upload/”の場合もあるCloud9
          }else{
            $iconname = "";
          }
        
        //設定更新
        $users = User::find(Auth::user()->id);
        $users->name   = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->profile_image = $iconname;
        $users->save();
        return redirect('/setting')->with('message', '更新が完了しました');
    }
    

    public function passwordedit(){
        $user = Auth::user();
            return view('passwordform');
    }
    
    protected function validator(array $data){
            return Validator::make($data,[
                'new_password' => 'required|string|min:8|confirmed',
            ]);
    }
    
    public function passwordupdate(Request $request){
        $user = Auth::user();
        if(!password_verify($request->current_password,$user->password)){
            return redirect('/passwordform')
            ->with('warning','現在のパスワードが違います');
        }else{
        //新規パスワードの確認
        $new_password = $request->new_password;
        switch($new_password){
            case $new_password != $request->new_password_confirmation;
                return redirect('/passwordform')
                ->with('warning','確認のパスワードが違います');
                break;
                
            case strlen($new_password) < 8;
                return redirect('/passwordform')
                ->with('warning','パスワードは8文字以上にしてください');
                break;
                
            case $new_password == $request->current_password;
                return redirect('/passwordform')
                ->with('warning','同じパスワードを使用しています');
                break;
                
            default;
                $this->validator($request->all())->validate();
                $user->password = bcrypt($request->new_password);
                $user->save();

                return redirect ('/passwordform')
                ->with('warning','')
                ->with('status','パスワードの変更が終了しました');
                break;
            }
        }
    }
    
    public function userdestroy(){
        $user = User::find(Auth::user()->id);
        $user->delete();
        return redirect('/');
    }

    public function deleteconfirm(){
        return view('users.deleteconfirm');
    }
    
    public function statuschange(Request $request){
        $user = Auth::user();
            if($user->work_status == "0"){
                
                $books = new Book;
                $books->user_id  = Auth::user()->id; //追加のコード
                $books->item_date = Carbon::now();
                $books->item_number = Carbon::now()->timezone('Asia/Tokyo')->format("H:i:s");
                
                $books->save();
                
                $user->work_status = "1";
                $user->save();
            }
            elseif($user->work_status == "1"){
                
                $books = Book::where('user_id',Auth::user()->id)->latest('id')->first();
                $books->item_number3 = Carbon::now()->timezone('Asia/Tokyo')->format("H:i:s");
                $books->save();
                
                $user->work_status = "2";
                $user->save();
            }
            elseif($user->work_status == "2"){
                
                $books = Book::where('user_id',Auth::user()->id)->latest('id')->first();
                $books->item_number4 = Carbon::now()->timezone('Asia/Tokyo')->format("H:i:s");
                $books->save();
                
                $user->work_status = "3";
                $user->save();
            }
            elseif($user->work_status == "3"){
                
                $books = Book::where('user_id',Auth::user()->id)->latest('id')->first();
                $books->item_number2 = Carbon::now()->timezone('Asia/Tokyo')->format("H:i:s");
                $books->save();
                
                
                $user->work_status = "0";
                $user->save();
            }
            
        return redirect('/');
    }
}