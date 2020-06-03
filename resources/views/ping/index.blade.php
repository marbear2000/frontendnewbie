@extends('master')

@section('content')
  <div id="ping">
    <div class="section-logo">
      <img class="logo" src="{{ asset ('img/ping-coming/logo.svg')}}" alt="Logo">
    </div>
    <div class="section-text">
      <h1 class="header">We are launching <span class="header-bold">soon!</span></h1>
      <p>Subscribe and get notified</p>
    </div>
    <div class="section-form">
      <form id="notify-form" action="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="details-form">
          <input class="form-email" type="email" name="email" placeholder="Your email address">
          <button type="submit" class="btn-notify">Notify me</button>
        </div>
      </form>
    </div>
    <div class="section-image">
      <img src="{{asset('img/ping-coming/illustration-dashboard.png')}}" alt="Image dashboard" class="illus-dashboard">
    </div>
    <div class="section-footer">
      <div class="social-media">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
      </div>
      <div class="copyright">
        <p>&copy; Copyright Ping. All rights reserved</p>
      </div>
    </div>
  </div>
@stop


@section('custom-scripts')
  <script>
    const form = document.querySelector('#notify-form');
    const email = form['email'];
    const input = document.querySelector('input.form-email');
    const detailsForm = document.querySelector('.details-form');

    const emailValid = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    const newDiv = document.createElement('div');
    newDiv.classList.add('error-message');
    detailsForm.appendChild(newDiv);

    form.addEventListener('submit', function(event){
      event.preventDefault();

      if(email.value === ''){
        newDiv.innerHTML = "Email cannot be empty";
        input.style.border = "1px solid hsl(354, 100%, 66%)";
      } else if(!emailValid.test(email.value)){
        newDiv.innerHTML = "Please provide a valid email";
        input.style.border = "1px solid hsl(354, 100%, 66%)";
      }
    });

    input.addEventListener('focus', function(e) {
      newDiv.innerHTML = "";
      input.style.border = "1px solid hsl(223, 100%, 88%)";
    });

  </script>

@stop
