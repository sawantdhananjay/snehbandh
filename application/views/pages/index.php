<?php
$page="home";
include('include/header.php'); ?>

<!-- carousel start -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/banner/ban01.jpeg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <p data-animation="animated fadeInDown">we work hard we play hard</p>
              <h1 data-animation="animated fadeInUp" >Snehbandh Events <br> Event Management Company </h1>
              <a href="<?php echo base_url() ?>" class="btn btn-primary btn-event btn-lg" data-animation="animated fadeInUp" role="button" aria-pressed="true">See More Work</a>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/banner/ban02.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <p>we work hard we play hard</p>
          <h1 data-animation="animated fadeInUp">Snehbandh Events <br> Event Management Company </h1>
          <a href="<?php echo base_url() ?>" class="btn btn-primary btn-event btn-lg" data-animation="animated fadeInUp" role="button" aria-pressed="true">See More Work</a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/banner/ban02.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block fadeInDown">
          <p>we work hard we play hard</p>
          <h1 data-animation="animated fadeInUp">Snehbandh Events <br> Event Management Company </h1>
          <a href="<?php echo base_url() ?>" class="btn btn-primary btn-event btn-lg" role="button" data-animation="animated fadeInUp" aria-pressed="true">See More Work</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- carousel ends -->
<!-- about section starts -->
 <section class="about-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      </div>
      <div class="col-md-6" id="left-part">
        <p class="red">Easy way to build perfect websites</p>
        <h5>Beautifully handcrafted templates for your website</h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text.</p>
        <div class="row" id="svg">
          <div class="col-md-6">
            <i class="fa fa-pencil icon-about" aria-hidden="true"></i>
              <h6>Modern Framework</h6>
              <p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
          </div>
          <div class="col-md-6">
            <i class="fa fa-pencil icon-about" aria-hidden="true"></i>
            <h6>Live Website Builder</h6>
            <p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- about section ends -->

<!-- service section start -->
<!-- <section class="service-section">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Beautiful and easy to use UI, professional animations and drag & drop feature</h1>
      <p class="sup-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
  </div>
  <div class="service-cards">
    <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="svg">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 333 416.25" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"><defs><style type="text/css">

              .fil0 {fill:#fff;}

            </style></defs><g><path class="fil0" d="M77 226c14,0 26,6 33,17l22 -31c-5,-7 -11,-14 -16,-22l0 -93 51 68 93 -126c5,32 -18,126 -59,173l23 31c22,-34 81,-13 91,32 5,28 -12,50 -39,50 -21,0 -42,-14 -52,-34l-38 -53c-4,0 -34,0 -38,0l-39 53c-10,20 -31,34 -52,34 -27,0 -44,-22 -38,-50 5,-27 31,-49 58,-49zm90 -36c16,0 16,25 0,25 -17,0 -17,-25 0,-25zm-96 -182l33 0 0 41 -33 0 0 -41zm0 65l33 0 0 41 -33 0 0 -41zm0 65l33 0 0 41 -33 0 0 -41zm190 109c-36,0 -25,57 11,57 36,0 25,-57 -11,-57zm-188 0c35,0 24,57 -12,57 -36,0 -25,-57 12,-57z"/></g></svg>
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="svg">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 333 416.25" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"><defs><style type="text/css">

              .fil0 {fill:#fff;}

            </style></defs><g><path class="fil0" d="M77 226c14,0 26,6 33,17l22 -31c-5,-7 -11,-14 -16,-22l0 -93 51 68 93 -126c5,32 -18,126 -59,173l23 31c22,-34 81,-13 91,32 5,28 -12,50 -39,50 -21,0 -42,-14 -52,-34l-38 -53c-4,0 -34,0 -38,0l-39 53c-10,20 -31,34 -52,34 -27,0 -44,-22 -38,-50 5,-27 31,-49 58,-49zm90 -36c16,0 16,25 0,25 -17,0 -17,-25 0,-25zm-96 -182l33 0 0 41 -33 0 0 -41zm0 65l33 0 0 41 -33 0 0 -41zm0 65l33 0 0 41 -33 0 0 -41zm190 109c-36,0 -25,57 11,57 36,0 25,-57 -11,-57zm-188 0c35,0 24,57 -12,57 -36,0 -25,-57 12,-57z"/></g></svg>
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="svg">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 333 416.25" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"><defs><style type="text/css">

              .fil0 {fill:#fff;}

            </style></defs><g><path class="fil0" d="M77 226c14,0 26,6 33,17l22 -31c-5,-7 -11,-14 -16,-22l0 -93 51 68 93 -126c5,32 -18,126 -59,173l23 31c22,-34 81,-13 91,32 5,28 -12,50 -39,50 -21,0 -42,-14 -52,-34l-38 -53c-4,0 -34,0 -38,0l-39 53c-10,20 -31,34 -52,34 -27,0 -44,-22 -38,-50 5,-27 31,-49 58,-49zm90 -36c16,0 16,25 0,25 -17,0 -17,-25 0,-25zm-96 -182l33 0 0 41 -33 0 0 -41zm0 65l33 0 0 41 -33 0 0 -41zm0 65l33 0 0 41 -33 0 0 -41zm190 109c-36,0 -25,57 11,57 36,0 25,-57 -11,-57zm-188 0c35,0 24,57 -12,57 -36,0 -25,-57 12,-57z"/></g></svg>
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="svg">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 333 416.25" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"><defs><style type="text/css">

              .fil0 {fill:#fff;}

            </style></defs><g><path class="fil0" d="M77 226c14,0 26,6 33,17l22 -31c-5,-7 -11,-14 -16,-22l0 -93 51 68 93 -126c5,32 -18,126 -59,173l23 31c22,-34 81,-13 91,32 5,28 -12,50 -39,50 -21,0 -42,-14 -52,-34l-38 -53c-4,0 -34,0 -38,0l-39 53c-10,20 -31,34 -52,34 -27,0 -44,-22 -38,-50 5,-27 31,-49 58,-49zm90 -36c16,0 16,25 0,25 -17,0 -17,-25 0,-25zm-96 -182l33 0 0 41 -33 0 0 -41zm0 65l33 0 0 41 -33 0 0 -41zm0 65l33 0 0 41 -33 0 0 -41zm190 109c-36,0 -25,57 11,57 36,0 25,-57 -11,-57zm-188 0c35,0 24,57 -12,57 -36,0 -25,-57 12,-57z"/></g></svg>
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section> -->
<!-- service section ends -->

<section class="service-photo-section">
  <div class="container">
  <p class="head-p">what We do</p>
  <h1 class="">OUR SERVICES</h1>
  <div class="row">
    <div class="col-md-4">
      <figure class="figure">
        <div class="hover panel">
              <div class="front">
                <div class="box1">
                  <img src="assets/images/service/service2.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                </div>
              </div>
              <div class="back">
                <div class="box2">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
            </div>
        <figcaption class="figure-caption">
        <h5>Design and Development</h5>
        <p>600+ We created web design</p>
      </figcaption>
    </figure>
    </div>
    <div class="col-md-4">
      <figure class="figure">
        <div class="hover panel">
              <div class="front">
                <div class="box1">
                  <img src="assets/images/service/service2.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                </div>
              </div>
              <div class="back">
                <div class="box2">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
            </div>
        <figcaption class="figure-caption">
        <h5>Design and Development</h5>
        <p>600+ We created web design</p>
      </figcaption>
    </figure>
    </div>
    <div class="col-md-4">
      <figure class="figure">
        <div class="hover panel">
              <div class="front">
                <div class="box1">
                  <img src="assets/images/service/service2.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                </div>
              </div>
              <div class="back">
                <div class="box2">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
            </div>
        <figcaption class="figure-caption">
        <h5>Design and Development</h5>
        <p>600+ We created web design</p>
      </figcaption>
    </figure>
    </div>
  </div>
</div>
</section>

<section class="img-cont-section">
<div class="container-fluid">
  <div class="row">
      <div class="col-md-3">
        <img src="assets/images/service/service3.jpg" alt="">
      </div>
      <div class="col-md-3" id="text">
        <p class="head-p">Build perfect websites</p>
        <h4>Unlimited power and customization possibilities</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        <a href="<?php echo base_url() ?>" class="btn btn-primary btn-event btn-lg" role="button" aria-pressed="true">See More Work</a>
      </div>
      <div class="col-md-3">
        <img src="assets/images/service/service3.jpg" alt="">
      </div>
      <div class="col-md-3" id="text">
        <p class="head-p">Build perfect websites</p>
        <h4>Unlimited power and customization possibilities</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        <a href="<?php echo base_url() ?>" class="btn btn-primary btn-event btn-lg" role="button" aria-pressed="true">See More Work</a>
      </div>
  </div>
</div>
</section>

<section id="portfolio" class="portfolio">
  <div class="portfolio-filter clear">
    <div class="row ">
      <div class="col-md-12 ">
        <div class="w-100  btn-group btn-group-md">
          <ul class="w-100 text-center">
            <li><button class="active btn btn-md   port-btn" data-filter="item">ALL</button></li>
            <li><button class="btn btn-md   port-btn" data-filter="logo">Logo</button>    </li>
            <li><button class="btn btn-md   port-btn" data-filter="web">Web</button>  </li>
            <li><button class="btn btn-md  port-btn"  data-filter="identity">Brand Identity</button></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 card item logo">
          <img src="assets/images/service/service1.jpg" alt="">
      </div>
      <div class="col-md-3 card item logo">
          <img src="assets/images/service/service1.jpg" alt="">
      </div>
      <div class="col-md-3 card item identity">
          <img src="assets/images/service/service1.jpg" alt="">
      </div>
      <div class="col-md-3 card item web">
          <img src="assets/images/service/service3.jpg" alt="">
      </div>
      <div class="col-md-3 card item logo">
          <img src="assets/images/service/service3.jpg" alt="">
      </div>
      <div class="col-md-3 card item web">
          <img src="assets/images/service/service3.jpg" alt="">
      </div>

      <div class="col-md-3 card item identity">
          <img src="assets/images/service/service3.jpg" alt="">
      </div>
      <div class="col-md-3 card item identity">
          <img src="assets/images/service/service3.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<section class="happy-client">
  <div class="container">
    <div class="row">

      <div class="col-md-3">
        <div data-aos="fade-left"  data-aos-duration="1000">
        <img src="assets/images/tv.jpg" alt="">
        <div class="text">
          <h3  class="count" >450</h3>
          <p>HAPPY CLIENTS</p>
        </div>
      </div>
      </div>
      <div class="col-md-3">
        <div data-aos="fade-left" data-aos-duration="2000">
        <img src="assets/images/tv.jpg" alt="">
        <div class="text">
          <h3  class="count" >450</h3>
          <p>HAPPY CLIENTS</p>
        </div>
      </div>
      </div>
      <div class="col-md-3">
        <div data-aos="fade-left" data-aos-duration="2500">
        <img src="assets/images/tv.jpg" alt="">
        <div class="text">
          <h3  class="count" >450</h3>
          <p>HAPPY CLIENTS</p>
        </div>
      </div>
      </div>
      <div class="col-md-3">
        <div data-aos="fade-left" data-aos-duration="3000">
        <img src="assets/images/tv.jpg" alt="">
        <div class="text">
          <h3  class="count" >450</h3>
          <p>HAPPY CLIENTS</p>
        </div>
      </div>
      </div>
  </div>
  </div>
</section>

<section class="video-section">
<div class="container">
  <div class="youtube-btn">
    <a href="#">
      <img src="assets/images/svg/youtube.svg" alt="">
    </a>
  </div>
  <h2>Beautiful and easy to use UI, professional animations and drag & drop feature</h2>
  <p>With years of experience in the website design and development industry ThemeZaa pride ourselves on creating unique, creative and quality designs that are developed upon the latest modern coding and developing techniques, which are then built using the most up to date, structured coding framework so that your development team can take it to the next level with ease.</p>
  <a href="<?php echo base_url() ?>" class="btn btn-primary btn-event btn-lg" role="button" aria-pressed="true"><i class="fa fa-youtube-play " aria-hidden="true"></i>See More Work</a>
</div>
</section>







<section class="home-gallery">
<div class="container">
  <div class="">
    <div class="row">
      <div class="owl-carousel owl-theme">
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/01.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/02.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/01.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/02.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/01.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/02.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/01.jpg" alt=""></div>
        <div class="item">  <img src="<?php echo base_url() ?>assets/images/gallery/02.jpg" alt=""></div>
    </div>
    <!-- <div class="col-md-12 text-center">
      <a href="<?php echo base_url() ?>Gallery" class="btn btn-primary btn-event btn-lg" role="button" aria-pressed="true">See More Work</a>
    </div> -->
    </div>
  </div>
</div>
</section>

<section class="testomonial">
<div class="container">
  <div class="row">
    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="testo">
            <img src="<?php echo base_url() ?>assets/images/testimonial1.jpg" alt="">
              <div class="testo-info">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem and typesetting industry.</p>
                <h6>John Doe</h6>
                <p>Manager</p>
              </div>
        </div>
        </div>
        <div class="item">
          <div class="testo">
              <img src="<?php echo base_url() ?>assets/images/testimonial2.jpg" alt="">
                <div class="testo-info">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem and typesetting industry.</p>
                  <h6>John Doe</h6>
                  <p>Manager</p>
                </div>
          </div>
          </div>

          <div class="item">
            <div class="testo">
                <img src="<?php echo base_url() ?>assets/images/testimonial3.jpg" alt="">
                  <div class="testo-info">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem and typesetting industry.</p>
                    <h6>John Doe</h6>
                    <p>Manager</p>
                  </div>
            </div>
            </div>
            <div class="item">
              <div class="testo">
                  <img src="<?php echo base_url() ?>assets/images/testimonial1.jpg" alt="">
                    <div class="testo-info">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem and typesetting industry.</p>
                      <h6>John Doe</h6>
                      <p>Manager</p>
                    </div>
              </div>
              </div>
              <div class="item">
                <div class="testo">
                    <img src="<?php echo base_url() ?>assets/images/testimonial2.jpg" alt="">
                      <div class="testo-info">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem and typesetting industry.</p>
                        <h6>John Doe</h6>
                        <p>Manager</p>
                      </div>
                </div>
                </div>
      </div>
  </div>
</div>
</section>




<?php include('include/footer.php'); ?>
