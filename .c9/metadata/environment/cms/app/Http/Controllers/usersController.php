{"filter":false,"title":"usersController.php","tooltip":"/cms/app/Http/Controllers/usersController.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["/"],"id":2},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":8,"column":4},"end":{"row":18,"column":5},"action":"insert","lines":["public function userdestroy($id)","    {","        $user = User::find($id);","        $user->delete();","        return redirect('/');","    }","","    public function delete_confirm()","    {","        return view('users.delete_confirm');","    }"],"id":3}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":24},"action":"remove","lines":["r"],"id":4},{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"remove","lines":["e"]},{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"remove","lines":["s"]},{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"remove","lines":["u"]}],[{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"remove","lines":["_"],"id":5}],[{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"remove","lines":["_"],"id":7}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":5,"column":0},"end":{"row":5,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":165,"mode":"ace/mode/php"}},"timestamp":1663755204079,"hash":"919a44e25e6ac85b9191d69398ec245e2d44a736"}