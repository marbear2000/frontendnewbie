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
                <input type="email" class="mr-2" name="email" placeholder="Enter your email...">
                <button class="btn-fylo">Get Started</button>
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
              <input type="email" class="mb-3" name="email" placeholder="Enter your email...">
              <button class="btn-fylo">Get Started For Free</button>
            </form>
          </div>
        </div>
      </div>
    </div> <!-- section-3 end -->
    @include('components/fylo-footer')
  </div>

@stop
