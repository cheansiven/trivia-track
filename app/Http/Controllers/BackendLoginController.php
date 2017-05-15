<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BackendLoginController extends Controller
{
    public function showLogin() {
        return view('frontend.login_backend');
    }
    public function adminLogin(Request $request) {
        $this->validate($request,
        [
          'name' => 'required',
          'pwd' => 'required'
        ]);
        if(Auth::attempt(['name'=> $request->name, 'password'=>  $request->pwd, 'admin'=> 1])){
          return redirect('dashboard');
        }else {
            return redirect('/');
        }
    }

}
