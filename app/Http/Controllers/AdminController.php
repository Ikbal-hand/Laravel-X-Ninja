<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;
        if($username == "admin" && $password == "admin"){
            return redirect()->route("/login/admin");
        }else{
            return view("components.alert");
        }
    }

}
