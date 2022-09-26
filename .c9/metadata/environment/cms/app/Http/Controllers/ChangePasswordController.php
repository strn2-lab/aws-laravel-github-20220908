{"filter":false,"title":"ChangePasswordController.php","tooltip":"/cms/app/Http/Controllers/ChangePasswordController.php","undoManager":{"mark":13,"position":13,"stack":[[{"start":{"row":0,"column":0},"end":{"row":10,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","class ChangePasswordController extends Controller","{","    //","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":36,"column":1},"action":"insert","lines":["use App\\User;","use Illuminate\\Http\\Request;","use Illuminate\\Support\\Facades\\Validator;","","class ChangePasswordController extends Controller","{","    public function edit()","    {","        return view('password.form');","    }","","    protected function validator(array $data)","    {","        return Validator::make($data,[","            'new_password' => 'required|string|min:6|confirmed',","            ]);","    }","","    public function update(Request $request)","","        $user = \\Auth::user();","        if(!password_verify($request->current_password,$user->password))","        {","            return redirect('/password/change')","                ->with('warning','パスワードが違います');","        }","","        //新規パスワードの確認","        $this->validator($request->all())->validate();","","        $user->password = bcrypt($request->new_password);","        $user->save();","","        return redirect ('/')","            ->with('status','パスワードの変更が終了しました');","    }","}"]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":5},"action":"insert","lines":["<?php"],"id":4}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":37},"action":"remove","lines":["return view('password.form');"],"id":6},{"start":{"row":9,"column":8},"end":{"row":12,"column":11},"action":"insert","lines":["$users = User::where('user_id',Auth::user()->id);","        return view('setting', [","            'setting' => $users,","        ]);"]}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":28},"action":"remove","lines":["g"],"id":7},{"start":{"row":10,"column":26},"end":{"row":10,"column":27},"action":"remove","lines":["n"]},{"start":{"row":10,"column":25},"end":{"row":10,"column":26},"action":"remove","lines":["i"]},{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"remove","lines":["t"]},{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"remove","lines":["t"]},{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"remove","lines":["e"]},{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"remove","lines":["s"]}],[{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"insert","lines":["f"],"id":8},{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"insert","lines":["o"]},{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"insert","lines":["r"]},{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"insert","lines":["m"]}],[{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"remove","lines":["g"],"id":9},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"remove","lines":["n"]},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"remove","lines":["i"]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"remove","lines":["t"]},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"remove","lines":["t"]},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"remove","lines":["e"]},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"remove","lines":["s"]}],[{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["f"],"id":10},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["o"]},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["r"]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["m"]}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":11}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":31},"action":"insert","lines":["namespace app\\Http\\Controllers;"],"id":12}],[{"start":{"row":1,"column":0},"end":{"row":5,"column":0},"action":"remove","lines":["namespace app\\Http\\Controllers;","use App\\User;","use Illuminate\\Http\\Request;","use Illuminate\\Support\\Facades\\Validator;",""],"id":13},{"start":{"row":1,"column":0},"end":{"row":10,"column":11},"action":"insert","lines":["namespace app\\Http\\Controllers;","use Illuminate\\Http\\Request;","","","//使うClassを宣言:自分で追加","use App\\Book;   //Bookモデルを使えるようにする","use App\\User;","use Validator;  //バリデーションを使えるようにする","use Auth;       //認証モデルを使用する","use Helper;"]}],[{"start":{"row":21,"column":4},"end":{"row":21,"column":7},"action":"insert","lines":["// "],"id":14},{"start":{"row":22,"column":4},"end":{"row":22,"column":7},"action":"insert","lines":["// "]},{"start":{"row":23,"column":4},"end":{"row":23,"column":7},"action":"insert","lines":["// "]},{"start":{"row":24,"column":4},"end":{"row":24,"column":7},"action":"insert","lines":["// "]},{"start":{"row":25,"column":4},"end":{"row":25,"column":7},"action":"insert","lines":["// "]},{"start":{"row":26,"column":4},"end":{"row":26,"column":7},"action":"insert","lines":["// "]},{"start":{"row":28,"column":4},"end":{"row":28,"column":7},"action":"insert","lines":["// "]},{"start":{"row":30,"column":4},"end":{"row":30,"column":7},"action":"insert","lines":["// "]},{"start":{"row":31,"column":4},"end":{"row":31,"column":7},"action":"insert","lines":["// "]},{"start":{"row":32,"column":4},"end":{"row":32,"column":7},"action":"insert","lines":["// "]},{"start":{"row":33,"column":4},"end":{"row":33,"column":7},"action":"insert","lines":["// "]},{"start":{"row":34,"column":4},"end":{"row":34,"column":7},"action":"insert","lines":["// "]},{"start":{"row":35,"column":4},"end":{"row":35,"column":7},"action":"insert","lines":["// "]},{"start":{"row":37,"column":4},"end":{"row":37,"column":7},"action":"insert","lines":["// "]},{"start":{"row":38,"column":4},"end":{"row":38,"column":7},"action":"insert","lines":["// "]},{"start":{"row":40,"column":4},"end":{"row":40,"column":7},"action":"insert","lines":["// "]},{"start":{"row":41,"column":4},"end":{"row":41,"column":7},"action":"insert","lines":["// "]},{"start":{"row":43,"column":4},"end":{"row":43,"column":7},"action":"insert","lines":["// "]},{"start":{"row":44,"column":4},"end":{"row":44,"column":7},"action":"insert","lines":["// "]},{"start":{"row":45,"column":4},"end":{"row":45,"column":7},"action":"insert","lines":["// "]}],[{"start":{"row":16,"column":28},"end":{"row":17,"column":29},"action":"remove","lines":["[","            'form' => $users,"],"id":20}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"remove","lines":["]"],"id":21}]]},"ace":{"folds":[],"scrolltop":78,"scrollleft":0,"selection":{"start":{"row":17,"column":8},"end":{"row":17,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1663671403846,"hash":"92fd6ba17254b7e2216c67d0aae5463953d57760"}