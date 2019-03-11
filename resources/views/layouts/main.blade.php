<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome back</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custome.css') }}" rel="stylesheet">
</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">
        <a href="{{ route('gotToken', Helper::getToken()) }}">StreamerEventViewer (SEV) Work</a>
        </h5>
        <nav class="my-2 my-md-0 mr-md-3">

        </nav>
        <div class="">
            <a class="d-inline" href="javascript:void(0)">{{ $user->display_name }}</a>
            <img style="width:30px" src="{{$user->profile_image_url}}" class="fluid-image d-inline" alt="">
        </div>
    </div>
    @yield('body')



    <footer class="pt-4 my-md-3 pt-md-3 border-top">
      <div class="col-12 col-md text-center">
          <small class="d-block mb-3 text-muted">&copy; {{ Date('Y') }} Ehsan Ali</small>
      </div>
    </footer>
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
