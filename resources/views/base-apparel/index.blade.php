@extends('master')

@section('content')
  <div id="base-apparel">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-7 order-xs-2 section-info">
          <div class="base-logo">
            <img src="{{ asset('img/base-apparel/logo.svg')}}" alt="">
          </div>
          <div class="image-mobile"></div>
          <div class="base-text">
            <h3 class="header-thin">WE'RE</h3>
            <h3>COMING</h3>
            <h3>SOON</h3>
            <p>Hello fellow shoppers! We're currently building our new fashion store. Add your email below to stay up-to-date with announcements and our launch deals</p>
          </div>
          <div class="base-form">
            <form id="email-form" action="">
              <input id="email-input" type="email" name="email" placeholder="Email Address" aria-labelledby>
              <span class="error-icon"><img src="{{ asset('img/base-apparel/icon-error.svg')}}" alt=""></span>
              <button id="email-submit" type="submit"><img src="{{ asset('img/base-apparel/icon-arrow.svg') }}" alt="arrow"></button>
              <div class="error-msg">
                Please provide a valid email
              </div>
            </form>
          </div>
        </div>

        <div class="col-xs-12 col-sm-5 order-xs-1 image-container">
        </div>
      </div>
    </div>
  </div>
@stop


@section('custom-scripts')
  <script>
    const submitBtn = document.querySelector('#email-submit');
    const email = document.querySelector('#email-input');
    const errorIcon = document.querySelector('.error-icon');
    const errorMsg = document.querySelector('.error-msg');
    const emailValid = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    function validate(){
      let emailValue = email.value;

      if(!emailValid.test(emailValue)){
        errorIcon.style.display = 'block';
        errorMsg.style.display = 'block';
        email.style.border = '1px solid #f96262';
      } else {
        console.log('yeah')
      }
      return false
    }

    submitBtn.addEventListener('click', validate);


  </script>
@stop
