<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class Web extends Controller
{


    public function index()
    {        $data['category']= DB::table('category')->get();
           $data['locations']= DB::table('locations')->get();

        $data['result'] = DB::table('listing')->get();
        return view('welcome',$data);

    }

    public function locationGet($location_id)
    {
        //$data['result'] = DB::table('listing')->get();
        //return view('welcome',$data);
       return DB::table('location')->where('id',$location_id)->first()->name;
    }



public function about()
    {
        return view('about');
    }




    public function packages()
    {
        return view('packages');
    }
    public function locations()
    {
        return view('locations');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function listingdetails($seo_url)
    {
      $data['result']=DB::table('listing')->where('seourl',$seo_url)->first();
      if($data['result'])
      {

          return view('listing/listingdetails', $data);
      }
      else
      {
          echo "kkkkk";
      }

       //
    }
    public function searchresult()
    {
        $query=DB::table('listing');


     if(isset($_GET['keyword']))
     {
        if(!$_GET['keyword']=='') {
            $query->where('title','like',$_GET['keyword'].'%');
        }
     }
     else
     {

     }
        if(isset($_GET['location']))
        {
            if(!$_GET['location']=='') {
                $query->where('location_id', $_GET['location']);
            }
        }
        else
        {

        }

        if(isset($_GET['category']))
        {
            if(!$_GET['category']=='') {
                $query->where('category_id', $_GET['category']);
            }

        }
        else
        {

        }
      $data['results']=  $query->get();
return view('searchresult', $data);
    }


}
