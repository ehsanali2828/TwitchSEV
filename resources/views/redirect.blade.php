
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>twitchwebsitedemo</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custome.css') }}">
    <script type="text/javascript">
      let str = window.location.hash.substr(1);

      let token = str.split('&')[0].split('=')[1];
      // console.log(token);
      window.location = "/public/home/"+ token;
    </script>
  </head>
  <body>

    <div class="signin-wrapper">

      <div class="signin-box " style="width:500px">
        <h2 class="slim-logo mt-4">
          Redirecting in a moment...
        </h2>

      </div>

    </div>


  </body>
</html>
