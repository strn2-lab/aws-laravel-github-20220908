<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }

    public function deleteconfirm()
    {
        return view('users.deleteconfirm');
    }
}
