@extends('master')

@section('content')
  <div id="huddle">
    <div class="section-hero pb-4">
      @include('components.huddle-header')
      <div class="container hero">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-sm-6 col-md-6 pr-md-5 pr-sm-0 text-center text-sm-left">
            <h1 class="title mb-4">Build The Community Your Fans Will Love</h1>
            <p>Huddle re-imagines the way we build communities. You have a voice, but so does your audience. Create connections with your users as you engage in genuine discussion.</p>
            <div class="btn-section mb-5">
              <a href="{{ url('/huddle')}}">
                <button class="btn-huddle">Get Started For Free</button>
              </a>
            </div>
          </div>
          <div class="col-sm-6 mb-5 text-center text-sm-left">
            <img src="{{ asset('img/huddle/illustration-mockups.svg')}}" alt="Illustraion dashboard">
          </div>
        </div>
      </div>
    </div>
    <div class="section-card">
      <div class="container">
        <div class="row">
          <div class="section-card-1">
            <div class="col-sm-12 order-1 col-md-6 text-center text-sm-left card-details">
              <h3 class="title">Grow together</h3>
              <p class="card-text">Generate meaningful discussions with your audience and build a strong, loyal community. Think of the insightful conversations you miss out with a feedback form.</p>
            </div>

              <div class="col-sm-12 order-sm-2 col-md-5 card-image">
                <img src="{{ asset('img/huddle/illustration-grow-together.svg')}}" alt="">
              </div>
          </div>
        </div>

        <div class="row">
          <div class="section-card-1">
            <div class="col-sm-12 order-2 col-md-6 text-center text-sm-left card-details">
              <h3 class="title">Flowing conversations</h3>
              <p class="card-text">You wouldn't paginate a conversation in real life, so why do it online? Our threads have just-in-time loading for a more natural flow.</p>
            </div>
            <div class="col-sm-12 order-1 col-md-5 card-image">
              <img src="{{ asset('img/huddle/illustration-flowing-conversation.svg')}}" alt="">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="section-card-1">
            <div class="col-sm-12 order-1 col-md-6 text-center text-sm-left card-details">
              <h3 class="title">Your users</h3>
              <p class="card-text">It takes no time at all to integrate Huddle with your app's authentication solution. This means, once signed in to your app, your users can start chatting immediately.</p>
            </div>
            <div class="col-sm-12 order-sm-2 col-md-5 card-image">
              <img src="{{ asset('img/huddle/illustration-your-users.svg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-action">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-8 call-to-action">
            <h3 class="title">Ready To Build Your Community?</h3>
            <button class="btn-huddle">Get Started For Free</button>
          </div>
        </div>
      </div>
    </div>

    @include('components.huddle-footer')
  </div>
@stop
