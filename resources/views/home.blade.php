@extends('layouts.main')

@section('body')
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Followed Channels</h1>
      <p class="lead">
          Total Followed channel {{ count($allChannels) }}
      </p>
  </div>
  <div class="container">
      <div class="row">
          @foreach ($allChannels as $channel)
          <div class="col-4 p-2 text-center mb-5">

            <div class="card border-0">
              <div class="card-header">
                <a target="_blank" href="{{$channel->url}}">
                  {{ $channel->display_name }}
                </a>
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#info{{ $channel->_id }}" data-toggle="tab">Info</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#profile{{ $channel->_id }}" data-toggle="tab">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#description{{$channel->_id }}" data-toggle="tab">Description</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#status{{$channel->_id}}" data-toggle="tab">Status</a>
                  </li>
                </ul>
              </div>
              <div class="card-body p-0 border-0">
                <div class="tab-content">
                  <div class="tab-pane active" id="info{{$channel->_id}}">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Name: {{ $channel->display_name }}</li>
                        <li>Game: {{ $channel->game }}</li>
                        <li>Views: {{ $channel->views}}</li>
                        <li>Followers: {{ $channel->followers }}</li>
                        <li>
                          Mature:
                          @if ($channel->mature)
                            Yes
                          @else
                            No
                          @endif
                        <li>Created at: {{ Helper::stdTime($channel->created_at) }} </li>
                        <li>Updated at: {{ Helper::stdTime($channel->updated_at) }} </li>

                    </ul>
                  </div>
                  <div class="tab-pane " id="profile{{$channel->_id}}">
                    <div class="card p-0 border-0">
                      <div class="card-header p-1">
                        Profile Banner
                      </div>
                      <div class="card-body p-0 border-0">
                        <img src="{{ $channel->profile_banner }}" title="profile Banner" style="" class="img-fluid" alt="">
                      </div>
                    </div>

                    <div class="card p-0 border-0">
                      <div class="card-header p-1">
                        Logo
                      </div>
                      <div class="card-body p-0">
                        <img src="{{ $channel->logo }}" title="profile Banner" style="" class="img-fluid" alt="">
                      </div>
                    </div>



                  </div>
                  <div class="tab-pane p-2" id="description{{$channel->_id}}">
                    {{ $channel->description}}
                  </div>
                  <div class="tab-pane p-2" id="status{{$channel->_id}}">
                    {{ $channel->status}}
                  </div>
              <a href="{{ route('chat',$channel->name) }}" class="border-0 rounded-0 btn btn-lg btn-block btn-primary btn-signin">View Chat & Video</a>
                </div>
              </div>
            </div>





          </div>
          @endforeach

      </div>



  </div>

@endsection
