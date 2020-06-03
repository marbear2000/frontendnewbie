@extends('master')

@section('content')
  <div id="home">
    <h1>Portfolio</h1>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3">
          <a class="card-link" href="{{ url('/four-cards')}}">
            <div class="card">
              <img class="card-img" src="{{ asset('img/four-card/desktop-design.jpg')}}" alt="">
              <p class="card-text">Basic layout four cards</p>
            </div>
           </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
          <a class="card-link" href="{{ url('/base-apparel')}}">
            <div class="card">
              <img class="card-img" src="{{ asset('img/base-apparel/desktop-design.jpg')}}" alt="">
              <p class="card-text">Base apparel</p>
            </div>
          </a>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3">
          <a class="card-link" href="{{ url('/bootcamp-testimonials')}}">
            <div class="card">
              <img class="card-img" src="{{ asset('img/bootcamp/desktop-design-slide-1.jpg')}}" alt="">
              <p class="card-text">Bootstrap Testimonial</p>
            </div>
          </a>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3">
          <a class="card-link" href="{{ url('/intro-form')}}">
            <div class="card">
              <img class="card-img" src="{{ asset('img/intro-form/desktop-design.jpg')}}" alt="">
              <p class="card-text">Intro component form</p>
            </div>
          </a>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 mt-5 mb-5>
          <a class="card-link" href="{{ url('/single-price')}}">
            <div class="card">
              <img class="card-img" src="{{ asset('img/single-price/desktop-design.jpg')}}" alt="">
              <p class="card-text">Single price component</p>
            </div>
          </a>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 mt-5 mb-5>
          <a class="card-link" href="{{ url('/ping')}}">
            <div class="card">
              <img class="card-img" src="{{ asset('img/ping-coming/desktop-design.jpg')}}" alt="">
              <p class="card-text">Ping</p>
            </div>
          </a>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 mt-5 mb-5>
          <a class="card-link" href="{{ url('/huddle')}}">
            <div class="card">
              <img class="card-img" src="{{ asset('img/huddle/desktop-design.jpg')}}" alt="">
              <p class="card-text">Huddle</p>
            </div>
          </a>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 mt-5 mb-5">
          <a class="card-link" href="{{ url('/huddle-2')}}">
            <div class="card">
              <img class="card-img" src="{{ asset('img/huddle-2/desktop-design.jpg')}}" alt="">
              <p class="card-text">Huddle 2</p>
            </div>
          </a>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 mt-5 mb-5">
          <a class="card-link" href="{{ url('/fylo')}}">
            <div class="card">
              <img class="card-img" src="{{ asset('img/fylo/desktop-preview.jpg')}}" alt="">
              <p class="card-text">Fylo</p>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

@stop
