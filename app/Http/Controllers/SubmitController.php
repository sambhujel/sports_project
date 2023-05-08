<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submit;
use App\Models\User;

class SubmitController extends Controller
{

    public function book(Request $request)
    {

        $name = $request->submit;
        $email = $request->email;
        $phone = $request->number;
        $date = $request->date;
        $time = $request->time;
        $sport = $request->sport;
        $id = auth()->id()??1;
        $user = User::find($id);

        $data = new Submit();

        $data->name = $name;
        $data->email = $email;
        $data->phone = $phone;
        $data->date = $date;
        $data->time = $time;
        $data->sport = $sport;
        $data->user_id = $id;


        $data->save();


        return redirect("/book.submit");
    }

    public function books()
    {
        return view('book.submit');
    }
}
