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

# How to deploy the above code on AWS?
Scaling application is always a bit tricky, but We use the Amazon Web Services EC2, which is elastic cloud too, so this allows alot of flexibility and handling any amount of traffic. well, first i will login to AWS management console and then click on EC2 link and click on launch instance button and then one wizerd will be open where we select that what we are going to deploy, just like Ubuntu 6 bit server etc and then continue and on one window i will give my instance a key and value which just indication for application and i next i need key pair that server realize that my machine by SSH, and i create and download and put on my desktop and now i need to create security group which allows us to SSH into server or via mysql etc. This is just a normal form to fill in. Then i continue and launch server so shortly i have virtual server to be use for my application. When i see green running state its mean ready to work. 
Then i have to open bash shell or any shell, and then give command SSH -i [keyvalue file name here] ubuntu link of amazon and then yes to authenticate. If we have already setup permissions then it will work fine or need to do permissions as well.
Now i have to install apache as well which could be done by sudo apt-get install apache2 In this way i will install PHP, any its extention, MySql (sudo apt-get install mysql-server) and even laravel application, composer etc all. Then using SSH we can connect to web server and further we can do modifications. This is the way to install and work with laravel. 

# How to scale Application on millions of requests

Well my proposed architecture is very simple and perfect for extendability of application, I believe that Scaling to Billions of Requests a Day or even after 6 month could be possible using AWS. There are couple of things which help us in scalling our application to prevent from any kind of bottelnecks, just like Amazon Classic load balancer and Amazon Auto Scaling Groups will definately a perfect solution. There are three type of load balancers in Elastic Load Balancing: Application, Network and Classic Load Balancers. All will are essential for better scalling and performance. Here i am explaning what services could help us for scaling application:

Nginx Plus - This helps in application level routing and help in front end load balacing.
Amazon Auto Scaling Groups - This helps in scaling for NGINX Plus load balancer and NGINX OSS application servers (Basically its providing webserver to frontend application)

Amazon Classic Load Balancers - This will be use 
Amazon Route 53 - Basically this provides cross region Global DNS load balancing and then finally which is in my mind is
Amazon VPC - This provides private segregated networks in each AZ.
