<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submit;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SubmitController extends Controller
{
    public function submit()
    {

        return view('book.submit');
    }
    public function book(Request $request)
    {
        $data=new submit;



        $data->name=$request->submit;
        $data->email=$request->email;
        $data->phone=$request->number;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->sport=$request->sport;

        $data->user_id = $request->input('user_id');

        $data->save();




        return redirect()->back();


    }



    public function books()
    {

        return view('book.submit');
    }


}
