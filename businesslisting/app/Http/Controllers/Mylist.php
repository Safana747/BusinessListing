<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Image;
use Auth;
class Mylist extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('listing.mylist');
    }
    public function listing()
    {
        $data['category']= DB::table('category')->get();
        $data['state']= DB::table('state')->get();
       //$data['district']= DB::table('district')->get();

        return view('listing.addlisting', $data);

    }

    public function addlisting()
    {
        $data['category']=DB::table('category')->get();
        $data['state']=DB::table('state')->get();
        return view('listing.addlisting', $data);

    }

    function friendly_seo_string($vp_string){

        $vp_string = trim($vp_string);

        $vp_string = html_entity_decode($vp_string);

        $vp_string = strip_tags($vp_string);

        $vp_string = strtolower($vp_string);

        $vp_string = preg_replace('~[^ a-z0-9_.]~', ' ', $vp_string);

        $vp_string = preg_replace('~ ~', '-', $vp_string);

        $vp_string = preg_replace('~-+~', '-', $vp_string);

        return $vp_string;
    }


    public function save(Request $request)
    {



        $data = array(
            'title'=> $request->title,
            'seourl'=>$this->friendly_seo_string($request->title),
            'category_id'=>$request->category,
            'address'=>$request->address,
            'state_id'=>$request->state,
            'district_id'=>$request->district,
            'location_id'=>$request->location,
            'pincode'=>$request->pincode,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'phone2'=>$request->phone2,
            'website'=>$request->website,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'whatsapp'=>$request->whatsapp,
            'linkedin'=>$request->linkedin,
            'mon_time'=>$request->mon_open.' - '.$request->mon_close,
            'tue_time'=>$request->tue_open.' - '.$request->tue_close,
            'wed_time'=>$request->wed_open.' - '.$request->wed_close,
            'thur_time'=>$request->thur_open.' -' .$request->thur_close,
            'fri_time'=>$request->fri_open.' - '.$request->fri_close,
            'sat_time'=>$request->sat_open.' - '.$request->sat_close,
            'sun_time'=>$request->sun_open.' - '.$request->sun_close,
            'img1'=>'',
            'img2'=>'',
            'img3'=>'',
            'img4'=>'',
            'img5'=>'',
            'img6'=>'',
            'img7'=>'',
            'img8'=>'',
            'user_id'=>Auth::user()->id,
            'created_at'=>date("Y-m-d H:i:s"),

        );




        $images=array();
        if($files=$request->file('images')){
            foreach($files as $key=>$file){
                $name=time().uniqid().$file->getClientOriginalName();
                $file->move(public_path().'/assets/images/listing/',$name);
                $data['img'.($key+1)]=$name;

            }

        }






        //print_r();
//count(request->txt);uniqid()
/*
foreach($request->files as $item)
        {
           //echo $item."</br>";

            $originalImage = $item('files');
            $thumbnailImage = Image::make($originalImage);
            $originalPath = public_path() . '/assets/images/listing/';
            $imagename = time() . $originalImage->getClientOriginalName();
            $thumbnailImage->save($originalPath . $imagename);
            $thumbnailImage->resize(1000, 500);

        }
*/

      DB::table('listing')->insert($data);
      return redirect('/');

    }



    public function getdistrict(Request $request)
    {

       return $data['district']= DB::table('district')->where('state_id',$request->state)->get();
    }

    public function getlocation(Request $request)
    {

        return $data['location']= DB::table('locations')->where('district_id',$request->district)->get();
    }


}
