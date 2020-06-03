@extends('master')

@section('content')
  <div id="bootcamp">
    <div class="container mt-2">
      <div class="row">
        <div class="col-md-5 order-2 order-sm-1 section-quote">
          <div class="quote-img">
            <img src="{{ asset('img/bootcamp/pattern-quotes.svg')}}" alt="Quote">
          </div>
          <div class="section-john">
            <p class="quote-text">"If you want to lay the best foundation possible I'd recommend taking this course. The depth the instructors go into is incredible. I now feel so confident about starting up as a professional."</p>
            <div class="quote-details">
              <p class="quote-name">John Tarkpor</p>
              <p class="quote-position">Junior Front-end Developer</p>
            </div>
          </div>
          <div class="section-tanya">
            <p class="quote-text">"I've been interested in coding for a while but never taken the jump, until now. I couldn't recommend this course enough. I'm now in the job of my dreams and so excited about the future"</p>
            <div class="quote-details">
              <p class="quote-name ">Tanya Sinclair</p>
              <p class="quote-position">UX engineer</p>
            </div>
          </div>
        </div>

        <div class="col-md-7 order-1 order-sm-2">
          <div class="slide-img">
            <img class="image-john" src="{{ asset('img/bootcamp/image-john.jpg') }}" alt="John Tarkpor">
            <img class="image-tanya" src="{{ asset('img/bootcamp/image-tanya.jpg') }}" alt="Tanya Sinclair">
          </div>
          <button class="slide-change">
            <img class="slide-prev" src="{{ asset('img/bootcamp/icon-prev.svg')}}" alt="Previous">
            <img class="slide-next" src="{{ asset('img/bootcamp/icon-next.svg')}}" alt="Next">
          </button>
        </div>
      </div>
    </div>

    <div class="section-footer">

    </div>
  </div>
@stop

@section('custom-scripts')
    <script>

      const previous = document.querySelector('.slide-prev');
      const next = document.querySelector('.slide-next');
      const john = document.querySelector('.section-john');
      const tanya = document.querySelector('.section-tanya');
      const imgJohn = document.querySelector('.image-john');
      const imgTanya = document.querySelector('.image-tanya');

      function showJohn() {
        john.style.display = "block";
        tanya.style.display = "none";
        imgJohn.style.display = "block";
        imgTanya.style.display = "none";
      }

      function showTanya() {
        john.style.display = "none";
        tanya.style.display = "block";
        imgJohn.style.display = "none";
        imgTanya.style.display = "block";
      }

      next.addEventListener('click', showJohn);
      previous.addEventListener('click', showTanya);


    </script>
@stop


