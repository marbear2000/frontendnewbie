@extends('master')

@section('content')
  <div id="intro-form">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 trial-blurb">
          <h1 class="intro-header">Learn to code by watching others</h1>
          <p class="intro-text">See how experienced developers solve problems in real-time. Watching scripted tutorials is great, but understanding how developers think is invaluable.</p>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="intro-trial">
            <span class="trial-bold">Try it free 7 days</span> then $20/mo. thereafter
          </div>
          <div class="form-container">
            <form id="form-trial" class="form-horizontal" action="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-input">
                <input id="first_name" type="text" name="first_name" placeholder="First Name">
                <img class="icon-error" src="{{ asset('img/intro-form/icon-error.svg')}}" alt="Error icon">
                <small class="error-msg">Error message</small>
              </div>

              <div class="form-input">
                <input id="last_name" type="text" name="last_name" placeholder="Last Name">
                <img class="icon-error" src="{{ asset('img/intro-form/icon-error.svg')}}" alt="Error icon">
                <small class="error-msg">Error message</small>
              </div>

              <div class="form-input">
                <input id="email" type="text" name="email" placeholder="Email Address">
                <img class="icon-error" src="{{ asset('img/intro-form/icon-error.svg')}}" alt="Error icon">
                <small class="error-msg">Error message</small>
                <!-- <p class="error-email">Please enter a valid email</p> -->
              </div>

              <div class="form-input">
                <input id="password" type="password" name="password" placeholder="Password">
                <img class="icon-error" src="{{ asset('img/intro-form/icon-error.svg')}}" alt="Error icon">
                <small class="error-msg">Error message</small>
              </div>

              <div class="button-container">
                <button type="submit" class="btn-submit">
                  CLAIM YOUR FREE TRIAL
                </button>
                <p class="intro-terms">By clicking the button, you are agreeing to our
                  <span class="intro-terms-bold">Terms and Services</span>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop


@section('intro-scripts')
  <script>

    const form = document.getElementById('form-trial');
    const firstName = document.getElementById('first_name');
    const lastName = document.getElementById('last_name');
    const email = document.getElementById('email');
    const password = document.getElementById('password');

    // Show error message
    function showError(input, msg) {
      const formInput = input.parentElement;
      formInput.className = "form-input error";
      const small = formInput.querySelector('small');
      small.innerText = msg;
    }

    // show success border outline
    function showSuccess(input) {
      const formInput = input.parentElement;
      formInput.className = "form-input success";
    }

    // check required fields
    function checkRequired(inputArray) {
      inputArray.forEach(function(input) {
        if(input.value.trim() === ''){
          showError(input, `${getFieldName(input)} is required`);
        } else {
          showSuccess(input);
        }
      });
    }

    // email validation
    function checkEmail(input) {
      const regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(regexEmail.test(input.value.trim())){
        return showSuccess(input);
      } else {
        return showError(input, "Email is not valid");
      }
    }

    // check input length
    function checkInputLength(input, min, max){
      if(input.value.length < min) {
        return showError(input, `${getFieldName(input)} must be greater than ${min} characters`);
      } else {
        showSuccess(input);
      }
    }

    //get field name
    function getFieldName(input){
      return input.name.charAt(0).toUpperCase() + input.name.slice(1).replace('_', ' ');
    }

    // submit form

    form.addEventListener('submit', function(event){
      event.preventDefault();

      checkRequired([firstName, lastName, email, password]);
      checkEmail(email);
      checkInputLength(firstName, 3, 15);
      checkInputLength(lastName, 3, 15);
    })

  </script>

@stop






















