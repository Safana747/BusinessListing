<?php

namespace App\Helpers;
use DB;
class Helper
{


    public static  function getname($name)
    {
        return $name."kjikjkijkjk";
    }
    public static function get_location($id){
        $loc=DB::table('locations')->where('id',$id)->first();


        if($loc)
        {$dis=DB::table('district')->where('id',$loc->district_id)->first();
            return $loc->name.','.$dis->name;
        }
        else
        {
            return '';
        }

    }
    public static function getcategory($id)
    {
        $category=DB::table('category')->where('id',$id)->first();
        if($category)
        {
            return $category->name;
        }
        else
        {
            return '';
        }


    }
    public static function getcategory_icon($id)
    {
        $category=DB::table('category')->where('id',$id)->first();
        if($category)
        {
            return $category->icon;
        }
        else
        {
            return '';
        }


    }
    public static function get_time_ago( $time )
    {
        $time_difference = time() - $time;

        if( $time_difference < 1 ) { return 'less than 1 second ago'; }
        $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
            30 * 24 * 60 * 60       =>  'month',
            24 * 60 * 60            =>  'day',
            60 * 60                 =>  'hour',
            60                      =>  'minute',
            1                       =>  'second'
        );

        foreach( $condition as $secs => $str )
        {
            $d = $time_difference / $secs;

            if( $d >= 1 )
            {
                $t = round( $d );
                return 'Posted ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
            }
        }
    }
public static function get_user_image($user_id)
{
    $users=DB::table('users')->where('id',$user_id)->first();
if($users)
{
    if($users->image)
    {
        return $users->image;

    }
    else{
        return "user.png";
    }
}
else{
    return "user.png";
}


}
    public static function get_user_name($user_id)
    {
        $users=DB::table('users')->where('id',$user_id)->first();
        if($users) {
            return $users->name;
        }
        else{
            return "";
        }



    }

public static function listcount($category_id)
{
    $listcount=DB::table('listing')->where('category_id',$category_id)->count();
    return $listcount;
}


}