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
              <div class="form-input">
                <input id="email-input" type="text" name="email" placeholder="Email Address" aria-labelledby>
                <span class="error-icon"><img src="{{ asset('img/base-apparel/icon-error.svg')}}" alt=""></span>
                <small class="error-msg">Please provide a valid email</small>
              </div>
              <button id="email-submit" type="submit"><img src="{{ asset('img/base-apparel/icon-arrow.svg') }}" alt="arrow"></button>
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

    const form = document.getElementById('email-form')
    const email = document.getElementById('email-input');

    function showError(input, msg){
      const formInput = input.parentElement;
      formInput.classList.add('error');
      const small = formInput.querySelector('small');
      small.innerText = msg;
    }

    function checkEmail(input){
      const regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

      if (!regexEmail.test(input.value.trim())) {
        showError(input, 'Please enter a valid email');
      } else {
        showSuccess(input);
      }
    }

    function showSuccess(input){
      const formInput = input.parentElement;
      formInput.classList.add('success');
      formInput.classList.remove('error');
    }

    form.addEventListener('submit', function(event){
      event.preventDefault();

      checkEmail(email);
    });

    // const submitBtn = document.querySelector('#email-submit');
    // const email = document.querySelector('#email-input');
    // const errorIcon = document.querySelector('.error-icon');
    // const errorMsg = document.querySelector('.error-msg');
    // const emailValid = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    // function validate(){
    //   let emailValue = email.value;

    //   if(!emailValid.test(emailValue)){
    //     errorIcon.style.display = 'block';
    //     errorMsg.style.display = 'block';
    //     email.style.border = '1px solid #f96262';
    //   } else {
    //     console.log('yeah')
    //   }
    //   return false
    // }

    // submitBtn.addEventListener('click', validate);


  </script>
@stop
