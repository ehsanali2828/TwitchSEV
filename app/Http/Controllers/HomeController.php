<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use NewTwitchApi\HelixGuzzleClient;
use NewTwitchApi\NewTwitchApi;
use Helper;

class HomeController extends Controller
{
    public function home()
    {
        return view('login');
    }
    public function getToken()
    {
        return view('redirect');
    }
    public function gotToken($token)
    {
        Helper::storeToken($token);

        $clientId = Helper::getClientId();
        $clientSecret = Helper::getClientSecret();
        $accessToken = Helper::getToken();
        $helixGuzzleClient = new HelixGuzzleClient($clientId);
        $newTwitchApi = new NewTwitchApi($helixGuzzleClient, $clientId, $clientSecret);

        try {
            $response = $newTwitchApi->getUsersApi()->getUserByAccessToken($accessToken);
        } catch (GuzzleException $e) {
            dd($e->getMessage());
        }
        $responseContent = json_decode($response->getBody()->getContents());

        $user = $responseContent->data[0];

        session(['user'=>$user]);

        $options = [
            'client_id' => 'js2kizfbxi1irez48g05z2x7h944oq',
        ];

        $twitchApi = new \TwitchApi\TwitchApi($options);
        // $user = $twitchApi->getUser(26490481);
        $allChannels = [];

        $channels = $twitchApi->getUsersFollowedChannels($user->id);
        $channels = $channels['follows'];
        foreach ($channels as $key => $value) {
            $obj = new \stdClass;
            $obj = (object)$value['channel'];
            $allChannels[] = $obj;
        }
        // dd($allChannels);
        return view('home', compact('user', 'allChannels'));
    }
    public function chat($userName)
    {

        $user = Helper::user();
        return view('chat', compact('userName','user'));
    }
}
