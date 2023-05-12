<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\User;
use App\Models\Subadmin;

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

        $image=$request->file('file');
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



    public function subadd()
    {
        return view('admin.subadd');
    }

public function uploadsub(Request $request)
    {
        $data=new subadmin;


        $data->name=$request->name;
        $data->CID=$request->CID;
        $data->Email=$request->Email;
        $data->phone_number=$request->phone_number;

        $data->save();

        return redirect()->back()->with('message','subAdmin is successfuly added');

    }

    public function approval()
    {
        $data=user::all();
        return view('admin.approval',compact('data'));
        
    }

    public function approved($id)
    {
        $data=user::find($id);
        $data->status='approved';

        if($data=='approved')

        $data->save();

        return view('sadmin')->back();

    }
    public function canceled($id)
    {
        $data=user::find($id);
        $data->status='canceled';
        $data->save();

        return redirect()->back();

    }

}
