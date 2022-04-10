<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    //
    public function logs(Request $request)
    {
       // return $request->input();
       //validate requests
       $request->validate([
           'email'=>'required',
            'password'=>'required'
       ]);

        $getauname=$request -> input('email');
        $getapass=$request -> input('password');
        $data = DB::select('select * from adminlog where email=? and password=?',[$getauname,$getapass]);



        if($data)
        {
                $dat= $request -> input('email');
                $request->session()->put('LoggedAdmin',$dat);
                return view('dashboard');
        }
        else
        {
           // return view ('adminlogin');
            return back()->with('fail','Invalid User Name & Password');

        }
    }
}
