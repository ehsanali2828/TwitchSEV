
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>twitchwebsitedemo</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custome.css') }}">
  </head>
  <body>

    <div class="signin-wrapper">

      <div class="signin-box">
        <h2 class="slim-logo"><a href="index.html">Twitch.tv demo<span>.</span></a></h2>
        <h2 class="signin-title-primary">Welcome back!</h2>
        <h3 class="signin-title-secondary">Sign in to continue.</h3>

        @php
          $lKey = "js2kizfbxi1irez48g05z2x7h944oq";
          $liveKey = "fnhp9wr39bmjj5ng83m9pukvw8o3u5";
          $linkLive = "http://twitchwebsitedemo.herokuapp.com/public/getToken";
          $localLink = "http://127.0.0.1:8000/getToken";

          // $k = $lKey;
          // $link  = $localLink;

          $k = $liveKey;
          $link  = $linkLive;

        @endphp
        <a class="btn btn-primary btn-block btn-signin" href="https://id.twitch.tv/oauth2/authorize?response_type=token&client_id={{$k}}&redirect_uri={{$link}}">login with twitch.tv
<svg class="tw-animated-glitch-logo__svg" overflow="visible" width="30px" height="30px" version="1.1" viewBox="0 0 30 30" x="0px" y="0px"><g class="tw-animated-glitch-logo__body tw-animated-glitch-logo__body--mouse-leave"><path d="M4,7 L5.56799,3 L27,3 L27,18 L21,24 L16,24 L12.88599,27 L9,27 L9,24 L4,24 L4,7 Z M21,20 L25,16 L25,5 L8,5 L8,20 L12,20 L12,23 L15,20 L21,20 Z"></path><g class="tw-animated-glitch-logo__eyes tw-animated-glitch-logo__eyes--mouse-leave"><polygon class="tw-animated-glitch-logo__right-eye" points="21 9 19 9 19 15 21 15"></polygon><polygon class="tw-animated-glitch-logo__left-eye" points="16 9 14 9 14 15 16 15"></polygon></g></g></svg>
        </a>

      </div>

    </div>


  </body>
</html>
