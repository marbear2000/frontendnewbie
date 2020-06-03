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

              <div class="form-group">
                <input type="text" class="form-control" name="first_name" placeholder="First Name">
                <img class="icon-error" src="{{ asset('img/intro-form/icon-error.svg')}}" alt="Error icon">
                <p class="error-msg first-error">First name cannot be empty</p>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                <img class="icon-error" src="{{ asset('img/intro-form/icon-error.svg')}}" alt="Error icon">
                <p class="error-msg">Last name cannot be empty</p>
              </div>

              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email Address">
                <img class="icon-error" src="{{ asset('img/intro-form/icon-error.svg')}}" alt="Error icon">
                <p class="error-msg">Email cannot be empty</p>
                <p class="error-email">Please enter a valid email</p>
              </div>

              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <img class="icon-error" src="{{ asset('img/intro-form/icon-error.svg')}}" alt="Error icon">
                <p class="error-msg">Password cannot be empty</p>
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

    const form = document.querySelector('#form-trial');
    const iconError = document.querySelectorAll('.icon-error');
    const errorMsg = document.querySelectorAll('.error-msg');
    const errorEmail = document.querySelector('.error-email');
    const firstName = form['first_name'];
    const lastName = form['last_name'];
    const email = form['email'];
    const password = form['password'];
    const clearErrors = document.querySelectorAll('input.form-control');
    const emailValid = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    clearErrors[0].addEventListener('keyup', function() {
      iconError[0].style.display = "none";
      errorMsg[0].style.display = "none"
    });

    clearErrors[1].addEventListener('keyup', function() {
      iconError[1].style.display = "none";
      errorMsg[1].style.display = "none"
    });

    clearErrors[2].addEventListener('keyup', function() {
      iconError[2].style.display = "none";
      errorMsg[2].style.display = "none";
      errorEmail.style.display = "none";
    });

    clearErrors[3].addEventListener('keyup', function() {
      iconError[3].style.display = "none";
      errorMsg[3].style.display = "none"
    });


    form.addEventListener('submit', function(event){
      event.preventDefault();

      if(firstName.value === '') {
        iconError[0].style.display = "block";
        errorMsg[0].style.display = "block";
      }

      if(lastName.value === '') {
        iconError[1].style.display = "block";
        errorMsg[1].style.display = "block";
      }

      if(email.value === '') {
        iconError[2].style.display = "block";
        errorMsg[2].style.display = "block";
      } else if(!emailValid.test(email.value)) {
        iconError[2].style.display = "block";
        errorEmail.style.display = "block";
      }

      if(password.value === '') {
        iconError[3].style.display = "block";
        errorMsg[3].style.display = "block";
      }


      // iconError.forEach(icon => icon);
    // errorMsg.forEach(msg => msg);

    // function removeError() {
    //   iconError.forEach(icon => icon.style.display = "none");
    //   errorMsg.forEach(msg => msg.style.display = "none");
    // }
    });


  </script>

@stop






















