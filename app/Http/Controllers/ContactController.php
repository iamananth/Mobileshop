<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $fview=Contact::all();
        return view('fview',compact('fview'));
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return view('admin');
        }
    }
    public function delete($id)
    {
        echo("hai");
        Contact::find($id)
                ->where('id', $id)
                ->delete();
                return redirect()->back();
    }
    public function store(Request $request)
    {
        //validate requests
        $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'phoneno'=>'required|min:10|max:10',
        'subject'=>'required',
        'message'=>'required'


        ]);
        //insert into database
        $app=new Contact;
        $app->name=$request->name;
        $app->email=$request->email;
        $app->phoneno=$request->phoneno;
        $app->subject=$request->subject;
        $app->message=$request->message;
    
        $save=$app->save();
        //return view('contactus');

        if($save){
            return back()->with('success','Your application has been submitted successfully ');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }

        return $request->input();


    }
}
