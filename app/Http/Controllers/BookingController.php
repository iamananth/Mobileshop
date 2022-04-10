<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\booking;

use App\Mail\bookingmail;
use App\Mail\Rbookingmail;

class BookingController extends Controller
{
    public function index()
    {
        $fview=booking::all();
        return view('fbooking',compact('fview'));
    }
    public function delete($id)
    {
        
        booking::find($id)
                ->where('id', $id)
                ->delete();
                return redirect()->back();
    }

     public function store(Request $request)
    {
        //return $request->input();
         //validate requests
         $request->validate([
         'name'=>'required',
         'phone'=>'required|min:10|max:10|unique:bookings',
         'email'=>'required|email|unique:bookings',
         'Address'=>'required',
         'district'=>'required',
         'state'=>'required',
         'date'=>'required'
        
 
 
        ]); 
       // return $request->input();
         //insert into database
         $app=new booking;
         $app->name=$request->name;
         $app->phone=$request->phone;
         $app->email=$request->email;
         $app->address=$request->address;
         $app->district=$request->district;
         $app->state=$request->state;
         $app->date=$request->date;
         $app->status=$request->status;
     
         $save=$app->save();
         //return view('contactus');
 
         if($save){
             return back()->with('success','Your application has been submitted successfully ');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
     }

    public function StatAccepted(Request $request){
        $bookid = $request->query('bid'); 
        
        $stat = booking::find($bookid);
        $stat ->status = "Accepted";
        $stat->save();

        try {
            \Mail::to($stat->email)->send(new bookingmail);
        } catch (\Exception $e) { 
        }
        return redirect()->back();
    }

    public function StatRejected(Request $request){
        $bookid = $request->query('bid'); 
        
        $stat = booking::find($bookid);
        $stat ->status = "Rejected";
        $stat->save();

        try {
            \Mail::to($stat->email)->send(new Rbookingmail);
        } catch (\Exception $e) { 
        }
        return redirect()->back();
    }

}

