<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Validator;
use Image;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function myprofile()
    {
        return view('profile.myprofile');
    }
    public function update(Request $request)
    {

        $data = DB::table('users')->where('id', auth::user()->id)->first();
        if ($data) {

        } else {

        }


        $rules = array(
            'name' => 'required',

            'email' => 'required | email |unique:users,email,' . $data->id,
        );

        $messsages = array(
            'name.required' => 'Please enter name',
            'email.required' => 'Please enter email address',
            'email.email' => 'Please enter  valid email address',
            'email.unique' => $request->email . ' - This email already exists',
        );
        //customMessages
        $validate = Validator::make($request->all(), $rules, $messsages);

        if ($validate->fails()) {

            return back()->with('error', $validate->messages()->first());
        }


        if ($request->file('file')) {

            $originalImage = $request->file('file');
            $thumbnailImage = Image::make($originalImage);
            $originalPath = public_path() . '/images/service/';
            $imagename = time() . $originalImage->getClientOriginalName();
            $thumbnailImage->save($originalPath . $imagename);
            $thumbnailImage->resize(1000, 500);
            $update_data = array(
                'caption' => $request->caption,
                'description' => $request->description,
//                'image' => $imagename,
                'updated_at' => date("Y-m-d H:i:s")
            );
//
//            $filename=public_path().'/images/service/'.$data->image;
//            if (file_exists($filename)) {
//                unlink($filename);
//            };
//
//
        } else {
            $update_data = array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'place' => $request->place,
                'updated_at' => date("Y-m-d H:i:s")
            );
        }
        DB::table('users')->where('id', auth::user()->id)->update($update_data);
        return redirect('myprofile')->with('message', 'updated successfully');
    }
    public function profilephotoupdate(Request $request)
    {
        $data = DB::table('users')->where('id', auth::user()->id)->first();
        $originalImage = $request->file('file');
        $thumbnailImage = Image::make($originalImage);
        $originalPath = public_path() . '/assets/images/profile/';
        $imagename = time() . $originalImage->getClientOriginalName();
        $thumbnailImage->save($originalPath . $imagename);
        $thumbnailImage->resize(1000, 500);


        $update_data = array(
            'image' => $imagename,
            'updated_at' => date("Y-m-d H:i:s")
        );

        if (!$data->image == '') {
            $filename = public_path() . '/assets/images/profile/' . $data->image;
            if (file_exists($filename)) {
                unlink($filename);
            };
        }

        DB::table('users')->where('id', auth::user()->id)->update($update_data);
        return redirect('myprofile')->with('message', 'updated successfully');
    }
    public function profilephotodelete()
    {
        $data = DB::table('users')->where('id', auth::user()->id)->first();
        if (!$data->image == '') {
            $filename = public_path() . '/assets/images/profile/' . $data->image;
            if (file_exists($filename)) {
                unlink($filename);
            };
        }
        $update_data = array(
            'image' => '',
            'updated_at' => date("Y-m-d H:i:s")
        );
        DB::table('users')->where('id', auth::user()->id)->update($update_data);
        return redirect('myprofile')->with('message', 'updated successfully');
    }




}


