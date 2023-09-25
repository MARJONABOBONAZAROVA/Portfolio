
<!DOCTYPE HTML>
<html>
<head>
<title>Miniport</title>
<meta charset="utf-8">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet">
<script src="/assets/js/jquery-1.8.3.min.js"></script>
<script src="/assets/css/5grid/init.js?use=mobile,desktop,1000px"></script>
<script src="/assets/js/init.js"></script>
<noscript>
<link rel="stylesheet" href="/assets/css/5grid/core.css">
<link rel="stylesheet" href="/assets/css/5grid/core-desktop.css">
<link rel="stylesheet" href="/assets/css/5grid/core-1200px.css">
<link rel="stylesheet" href="/assets/css/5grid/core-noscript.css">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/style-desktop.css">
</noscript>
<!--[if lte IE 9]>
<link rel="stylesheet" href="css/ie9.css">
<![endif]-->
<!--[if lte IE 8]>
<link rel="stylesheet" href="css/ie8.css">
<![endif]-->
<!--[if lte IE 7]>
<link rel="stylesheet" href="css/ie7.css">
<![endif]-->
</head>
<body>
<nav id="nav">
  <ul>
    <li><a href="#top">Top</a></li>
    <li><a href="#work">Work</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>

  @include('sections.messages')
</nav>
 <div class="wrapper wrapper-style1 wrapper-first">
  <article class="5grid-layout" id="top">
    <div class="row">
      <div class="4u"> <span class="me image image-full"><img src="/assets/images/me.jpg" alt=""></span> </div>
      <div class="8u">
        <header>
          <h1>Hi. I'm <strong>Jane Doe</strong>.</h1>
        </header>
        <p>And this is <strong>Miniport</strong>, a free, fully responsive HTML5 site template designed by AJ for HTML5 Up! &amp; released under the CCA license.</p>
        <a href="#work" class="button button-big">Learn about what I do</a> </div>
    </div>
  </article>
</div>
<div class="wrapper wrapper-style2">
  <article id="work">
    <header>
      <h2>I design and build amazing things.</h2>
      <span>Odio turpis amet sed consequat eget posuere consequat.</span> </header>
    <div class="5grid-layout">
      <div class="row">
        <div class="4u">
          <section class="box box-style1"> <span class="image image-centered"><img src="/assets/images/work01.png" alt=""></span>
            <h3>Consequat lorem</h3>
            <p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
          </section>
        </div>
        <div class="4u">
          <section class="box box-style1"> <span class="image image-centered"><img src="/assets/images/work02.png" alt=""></span>
            <h3>Lorem dolor tempus</h3>
            <p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
          </section>
        </div>
        <div class="4u">
          <section class="box box-style1"> <span class="image image-centered"><img src="/assets/images/work03.png" alt=""></span>
            <h3>Feugiat posuere</h3>
            <p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
          </section>
        </div>
      </div>
    </div>
    <footer>
      <p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
      <a href="#portfolio" class="button button-big">See some of my recent work</a> </footer>
  </article>
</div>
<div class="wrapper wrapper-style3">
  <article id="portfolio">
    <header>
      <h2>Awesome work makes happy clients.</h2>
      <span>Proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore feugiat lorem ipsum dolore.</span> </header>
    <div class="5grid-layout">
      <div class="row">
        <div class="12u"> </div>
      </div>
      <div class="row">
        <div class="4u">
          <article class="box box-style2"> <a href="#" class="image image-full"><img src="/assets/images/portfolio01.jpg" alt=""></a>
            <h3><a href="#">Magna feugiat</a></h3>
            <p>Ornare nulla proin odio consequat.</p>
          </article>
        </div>
        <div class="4u">
          <article class="box box-style2"> <a href="#" class="image image-full"><img src="/assets/images/portfolio02.jpg" alt=""></a>
            <h3><a href="#">Veroeros primis</a></h3>
            <p>Ornare nulla proin odio consequat.</p>
          </article>
        </div>
        <div class="4u">
          <article class="box box-style2"> <a href="#" class="image image-full"><img src="/assets/images/portfolio03.jpg" alt=""></a>
            <h3><a href="#">Lorem ipsum</a></h3>
            <p>Ornare nulla proin odio consequat.</p>
          </article>
        </div>
      </div>
      <div class="row">
        <div class="4u">
          <article class="box box-style2"> <a href="#" class="image image-full"><img src="/assets/images/portfolio04.jpg" alt=""></a>
            <h3><a href="#">Tempus dolore</a></h3>
            <p>Ornare nulla proin odio consequat.</p>
          </article>
        </div>
        <div class="4u">
          <article class="box box-style2"> <a href="#" class="image image-full"><img src="/assets/images/portfolio05.jpg" alt=""></a>
            <h3><a href="#">Feugiat aliquam</a></h3>
            <p>Ornare nulla proin odio consequat.</p>
          </article>
        </div>
        <div class="4u">
          <article class="box box-style2"> <a href="#" class="image image-full"><img src="/assets/images/portfolio06.jpg" alt=""></a>
            <h3><a href="#">Sed amet ornare</a></h3>
            <p>Ornare nulla proin odio consequat.</p>
          </article>
        </div>
      </div>
    </div>
    <footer>
      <p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
      <a href="#contact" class="button button-big">Get in touch with me</a> </footer>
  </article>
</div>
<div class="wrapper wrapper-style4">
  <article id="contact">
