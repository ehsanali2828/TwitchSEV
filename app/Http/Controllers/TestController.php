<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home(Request $request){
//       $options = [
//           'client_id' => 'js2kizfbxi1irez48g05z2x7h944oq',
//       ];
//
//       $twitchApi = new \TwitchApi\TwitchApi($options);
//       // $user = $twitchApi->getUser(26490481);
//       $twitchApi->getAuthenticatedUser();
//       dd(
// // $twitchApi
//       );
      return view('redirect');
    }
    public function user(Request $request, $token){
      dd(
        $token
      );
    }
    public function test()
    {
        $options = [
            'client_id' => 'js2kizfbxi1irez48g05z2x7h944oq',
        ];

        $twitchApi = new \TwitchApi\TwitchApi($options);
        $user = $twitchApi->getUser(26490481);
        dd('e',$user);
    }
}
