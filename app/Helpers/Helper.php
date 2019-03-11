<?php

namespace App\Helpers;
use Session;
use Carbon\Carbon;


class Helper
{
  public static function stdTime($time){
    return Carbon::parse($time)->format('M d, Y h:i A');
  }
  public static function user(){
    return session('user');
  }
  public static function storeToken($token){
    session(['token'=>$token]);
  }
  public static function getToken(){
    return session('token');
  }
  public static function getClientId(){
    // return 'js2kizfbxi1irez48g05z2x7h944oq'; // local
    return "fnhp9wr39bmjj5ng83m9pukvw8o3u5";
  }
  public static function getClientSecret(){
    // local
    // return "kehu8o6txrorlcbpz0xubqmpxgouj9";
    return "nqs8962hviw1kwhju0w9ndxrc4czmo";
  }
}
