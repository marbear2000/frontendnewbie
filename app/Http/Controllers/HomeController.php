<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  function index()
  {
    $data['metaTitle'] = 'Frontend projects';

    return view('home.index', $data);
  }

  function fourCard()
  {
    $data['metaTitle'] = 'Four cards';

    return view('four-card.index', $data);
  }

  function baseApparel()
  {
    $data['metaTitle'] = 'Base apparel';

    return view('base-apparel.index', $data);
  }

  function bootcamp()
  {
    $data['metaTitle'] = 'Bootcamp testimonials';

    return view('bootcamp.index', $data);
  }

  function introForm()
  {
    $data['metaTitle'] = 'Intro form';

    return view('intro-form.index', $data);
  }

  function singlePrice()
  {
    $data['metaTitle'] = 'Single Price';

    return view('single-price.index', $data);
  }

  function ping()
  {
    $data['metaTitle'] = 'Ping';

    return view('ping.index', $data);
  }

  function huddle()
  {
    $data['metaTitle'] = 'Huddle';

    return view('huddle.index', $data);
  }

  function huddle2()
  {
    $data['metaTitle'] = 'Huddle 2';

    return view('huddle2.index', $data);
  }

  function fylo()
  {
    $data['metaTitle'] = 'Fylo';

    return view('fylo.index', $data);
  }
}
