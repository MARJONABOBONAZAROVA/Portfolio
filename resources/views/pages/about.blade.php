@extends('layouts.main')
@section('content')

<nav id="nav">
    <ul>
      <li><a href="#top">Top</a></li>
      <li><a href="#work">Work</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
  <div class="wrapper wrapper-style1 wrapper-first">
    <article class="5grid-layout" id="top">
      <div class="row">
        <div class="4u"> <span class="me image image-full"><img src="images/me.jpg" alt=""></span> </div>
        <div class="8u">
          <header>
            <h1>Hi. I'm <strong>Jane Doe</strong>.</h1>
          </header>
          <p>And this is <strong>Miniport</strong>, a free, fully responsive HTML5 site template designed by AJ for HTML5 Up! &amp; released under the CCA license.</p>
          <a href="#work" class="button button-big">Learn about what I do</a> </div>
      </div>
    </article>
  </div>
  @endsection
