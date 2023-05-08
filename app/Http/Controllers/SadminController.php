<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submit;

class SadminController extends Controller
{
    public function index()
    {

        $data=submit::all();


        return view('sadmin.view', compact('data'));
    }
}
