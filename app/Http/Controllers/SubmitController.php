<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submit;
use App\Models\User;

class SubmitController extends Controller
{


    public function book(Request $request, $id)
    {
        $name = $request->input('submit');
        $email = $request->input('email');
        $phone = $request->input('number');
        $date = $request->input('date');
        $time = $request->input('time');
        $sport = $request->input('sport');
        $user_id = $request->input('user_id');

        $submit = new Submit;
        $submit->name = $name;
        $submit->email = $email;
        $submit->phone = $phone;
        $submit->date = $date;
        $submit->time = $time;
        $submit->sport = $sport;
        $submit->user_id = $user_id;
        $submit->save();

        return redirect()->back()->with('success', 'Booking successful');
    }


    public function books()
    {
        $user = User::all();
        return view('book.submit', ['user' => $user])->with('user', $user);
    }
}
