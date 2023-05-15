<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
   
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0' )
            {
                if(Auth::user()->status=="approved")
                {
                    return view('sadmin.home');
                }
                else{
                    auth()->logout();
                    return redirect()->route('login')->with('message', trans('Your Account Needs Admin Approval'));
                }
                
                
            }
            
            else
            {
                return view('admin.home');
            }

        }
        
        
        else
        {
            return redirect()->back();
        }
        
        
        
    }
}