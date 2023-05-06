<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\User;

class AdminController extends Controller
{
    public function ad()
    {
        return view('admin.ad');
    }

    public function deleteadd()
    {
        $data= ad::all();

        return view('admin.delete', compact('data'));
    }

    public function delete($id)
    {
        $data= ad::find($id);
        $data->delete();

        return redirect()->back()->with('message','Ad is successfuly Deleted');
    }

    public function updatead($id)
    {
        $data= ad::find($id);
        return view('admin.updatead',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data= ad::find($id);

        $image=$request->file;
        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('adimage',$imagename);

        $data->image=$imagename;
        }

        $data->field=$request->name;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->user_id=$request->id;

        $data->save();

        return redirect()->back()->with('message','Ad is successfuly Updated');

    }

    public function uploadad(Request $request)
    {
        $data=new ad;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('adimage',$imagename);

        $data->image=$imagename;

        $data->field=$request->name;
        $data->price=$request->price;
        $data->description=$request->des;


        $data->save();

        return redirect()->back()->with('message','Ad is successfuly added');
    }

    public function view()
    {
        $data=user::all();
        return view('admin.view',compact("data"));
    }

    public function deleteuser($id)
    {
        $data= user::find($id);
        $data->delete();

        return redirect()->back()->with('message','Sub-Admin is successfuly Deleted');
    }


}
