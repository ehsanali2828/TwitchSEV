# Streamer Event Viewer (SEV)
Link:
http://twitchwebsitedemo.herokuapp.com/public/


There are several steps to do this application.

1: Creating Application on Heroku and then Getting the Client ID and Client Secret Key, because these keys will help in integration with our system. While creating application we need to add the OAuth Redirect URL which is Auth Redirection Url.

2: Now as i created application in Laravel and suppose its setup.

3: Now i have to write my code and i need to use the two keys which i mentioned, so i have created one HELPER class and as i wrote couple of functions in  HELPER.PHP class. getClientId() and getClientSecret() are the functions where we assigned the client keys so that we can easily interect with Twitch system, but we need further things to do for this interection.

4: I have choose the basic Bootstrap layout so inside the RESOURCES -> VIEWS folder, we added our files, LOGIN.BLADE.PHP AND HOME.BLADE.PHP, CHAT.BLADE.PHP.

5: When user will first open the link then he will see the LOGIN.BLADE.PHP page and button will be shown to him, so in this file i have added the both keys and store inside variable because i need to use then in further link below thats why i intialized, and online and local both links of application which are assigned in $linkLive and $localLink variables. So the button contains the link which is https://id.twitch.tv/oauth2/authorize?response_type=token&client_id={{$k}}&redirect_uri={{$link}}  and this link is helping us to connect to twitch website.

6: Now in other file, like HOME.BLADE.PHP i have added the code to display the channels, in the beginning you will have no channel. if you want to follow any channel open twitch tv and follow some channels and then refresh our demo link, you will see all channels which we followed are shown there. I use the simple Tabs to load the data just for ease of use.

To get all the data i have use the following commands:

1:  Total Followed channel {{ count($allChannels) }}
2:  To get all my followed channels i use first the loop: @foreach ($allChannels as $channel)
3:  For Name: {{ $channel->display_name }}
    Game: {{ $channel->game }}
    Views: {{ $channel->views}}
    Followers: {{ $channel->followers }}

    and many other parameters i have use but more important is BUTTON, so when you want to click on button then you will
    go to that particular steam and you will also see the stream with chat below and you can also see the 10 favorites

    Now for Button link i use this :   id="profile{{$channel->_id}}"

4:  For any stream detail page, i created CHAT.BLADE.PHP and inside i have display the complete channel and its related chat.
    Exactly under the detail channel screen on this page, there will be little BELOW arrow button, as you click on it then you will see the 10 favorite streams which was mentioned in task.

5: Controller part is also main part for me, its handling which function need to call.
   so inside APP -> HTTP -> CONTROLLER folder there is HOMECONTROLLER.php file, which contains the functions and all functions are important but public function gotToken($token) and public function chat($userName) are for getting token and chat feature.

6:  Inside the routes folder there is web.php file which contains the application routes.
