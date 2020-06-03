@extends('master')

@section('content')
  <div id="fylo">
    @include('components/fylo-header')

    <div class="section-1 mt-5 mb-5">
      <div class="container container-small">
        <div class="row">
          <div class="col-sm-12 order-1 col-md-6 section-1-details d-flex flex-column justify-content-center">
            <div class="section-text section-1-text">
              <h1 class="mb-3">All your files in one secure location, accessible anywhere.</h1>
              <p>Fylo stores your most important files in one secure location. Access them wherever you need, share and collaborate with friends, family and co-workers</p>
            </div>
            <div class="section-1-form">
              <form id="fylo-form" action="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-input">
                  <input type="email" class="mr-2 email-1" name="email-1" placeholder="Enter your email...">
                  <button type="submit" class="btn-fylo">Get Started</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-sm-12 order-sm-2 col-md-6 section-image">
            <img src="{{ asset('img/fylo/illustration-1.svg')}}" alt="illustration">
          </div>
        </div>
      </div>
    </div> <!-- section-1 end -->

    <div class="section-2 mt-5">
      <img src="{{ asset('img/fylo/bg-curve-desktop.svg')}}" alt="Curve background">
      <div class="section-2-bg">
        <div class="container container-small">
          <div class="row">
            <div class="col-sm-12 order-1 col-md-7 section-1-details d-flex flex-column justify-content-center">
              <div class="section-text section-1-text mb-5">
                <h1 class="mb-3">Stay productive, wherever you are</h1>
                <p class="productive-text">Never let location be an issue when accessing your files. Fylo has you covered for all of your file storage needs.</p>
                <p class="productive-text">Securely share files and folders with friends, family and colleagues for live collaboration. No email attachments required</p>
                <a class="fylo-link" href="#">See how Fylo works<img class="pl-2" src="{{ asset('img/fylo/icon-arrow.svg')}}" alt="Arrow"></a>
                <hr>
              </div>
              <div class="card">
                <div class="card-image">
                  <img src="{{ asset('img/fylo/icon-quotes.svg')}}" alt="Quotes">
                </div>
                <p class="card-text mt-2">Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has become a well-oiled collaboration machine</p>
                <div class="avatar">
                  <div class="avatar-picture">
                    <img src="{{ asset('img/fylo/avatar-testimonial.jpg')}}" alt="Avatar">
                  </div>
                  <div class="avatar-details ml-3">
                    <p class="avatar-name">Kyle Burton</p>
                    <p class="avatar-position">Founder & CEO, Huddle</p>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-sm-12 order-sm-2 col-md-5 section-image">
              <img src="{{ asset('img/fylo/illustration-2.svg')}}" alt="illustration">
            </div>
          </div>
        </div>
      </div>
    </div><!-- section-2 end -->

    <div class="section-3">
      <div class="container container-small">
        <div class="row">
          <div class="col-sm-12 col-md-6 text-sm-center text-md-left section-text">
            <h1>Get early access today</h1>
            <p class="pr-5">It only takes a minute to sign up and our free starter tier is extremely generous. If you have any questions, our support team would be happy to helo you.</p>
          </div>
          <div class="col-sm-12 col-md-6 section-form section-3-form">
            <form id="fylo-access" action="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="email" class="email-2" name="email-2" placeholder="Enter your email...">
                <button type="submit" class="btn-fylo">Get Started For Free</button>

            </form>
          </div>
        </div>
      </div>
    </div> <!-- section-3 end -->
    @include('components/fylo-footer')
  </div>

@stop

@section('fylo.scripts')
  <script>
    const form1 = document.querySelector('#fylo-form');
    const email1 = document.querySelector('input[name="email-1"]');
    const errorMsg = document.createElement('div');
    const formInput = document.querySelector('.form-input');
    errorMsg.classList.add('error-msg');
    formInput.appendChild(errorMsg);

    const form2 = document.querySelector('#fylo-access');
    const email2 = document.querySelector('input.email-2');
    const emailValue2 = email2.value;
    const errorMsg2 = document.createElement('div');
    errorMsg2.classList.add('error-msg');
    email2.after(errorMsg2);

    const emailValid = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    form1.addEventListener('submit', function(e){
      e.preventDefault();
      if(email1.value === ''){
        errorMsg.innerHTML = "Please enter an email";
        email1.style.border = "1px solid hsl(354, 100%, 66%)";
      }
    });

    email1.addEventListener('keydown', function(){
        errorMsg.innerHTML = " ";
        email1.style.border = "none";
    });

    form2.addEventListener('submit', function(e){
      e.preventDefault();
      if(!emailValid.test(emailValue2)){
        errorMsg2.innerHTML = "Please enter a valid email";
        email2.style.border = "1px solid hsl(354, 100%, 66%)";
      };
    });

    email2.addEventListener('keydown', function(){
        errorMsg2.innerHTML = " ";
        email2.style.border = "none";
    });




  </script>
@stop
