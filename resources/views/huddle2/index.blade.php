@extends('master')

@section('content')
  <div id="huddle-2">
    <div class="section-hero">
      <div class="container">
        <div class="logo pt-4">
          <img src="{{ asset('img/huddle-2/logo.svg')}}" alt="">
        </div>
        <div class="row hero">
          <div class="col-sm-12 col-md-6">
            <img src="{{ asset('img/huddle-2/illustration-mockups.svg')}}" alt="">
          </div>
          <div class="col-sm-12 col-md-6 text-center text-sm-left pl-md-5 pl-sm-0">
            <h1 class="title mt-4 mb-3">Build The Community Your Fans Will Love</h1>
            <p class="mb-4">Huddle re-imagines the way we build communities. You have a voice, but so does your audience. Create connections with your users as you engage in genuine discussion.</p>
            <div class="btn-section mb-5">
              <a href="{{ url('/huddle')}}">
                <button class="btn-huddle">Register</button>
              </a>
            </div>
          </div>
        </div>
        <div class="social-media">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>
    </div>
  </div>

@stop
