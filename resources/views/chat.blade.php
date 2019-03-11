@extends('layouts.main')

@section('body')
  <div class="">
    <div class="col-12 text-center">
      <iframe
          src="https://player.twitch.tv/?channel={{$userName}}&muted=true"
          height="480"
          width="854"
          frameborder="0"
          scrolling="no"
          allowfullscreen="true">
      </iframe>
      <br>
      <iframe frameborder="0"
      scrolling="no"
      id="chat_embed"
      src="https://www.twitch.tv/embed/{{$userName}}/chat"
      height="480"
      width="854">
    </iframe>
    </div>
  </div>
@endsection
