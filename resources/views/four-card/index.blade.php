@extends('master')

@section('content')
  <div id="four-card">

    <div class="section-1 text-center">
      <h1>Realiable, efficient delivery</h1>
      <h1>Powered by Technology</h1>
      <p>Our Artifical Intelligence powered tools use millions of project data points to ensure that your project is successful</p>
    </div>

    <div class="section-2">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Supervisor</h5>
                <p class="card-text">Monitors activity to identify project roadblocks</p>
              </div>
              <div class="card-img" >
                <img src="{{ asset('img/four-card/icon-supervisor.svg')}}" alt="Icon magnifying glass">
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="card card-red">
              <div class="card-body">
                <h5 class="card-title">Team Builder</h5>
                <p class="card-text">Scans our talent network to create the optimal team for your project</p>
              </div>
              <div class="card-img" >
                <img src="{{ asset('img/four-card/icon-team-builder.svg')}}" alt="">
              </div>
            </div>
            <div class="card card-orange">
              <div class="card-body">
                <h5 class="card-title">Karma</h5>
                <p class="card-text">Regularly evaluates our talent to ensure quality</p>
              </div>
              <div class="card-img" >
                <img src="{{ asset('img/four-card/icon-karma.svg')}}" alt="">
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="card card-blue">
              <div class="card-body">
                <h5 class="card-title">Calculator</h5>
                <p class="card-text">Uses data from past projects to provide better delivery estimates</p>
              </div>
              <div class="card-img">
                <img src="{{ asset('img/four-card/icon-calculator.svg')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop

