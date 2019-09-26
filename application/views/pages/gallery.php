<?php
$page="gallery";
include('include/header.php'); ?>
<section class="gallery-top-img">
  <div class="light-opacity bg-dark"></div>
    <div class="container">
      <div class="text">
        <h1>Portfolio</h1>
        <p>We are awesome designer</p>
      </div>
    </div>
</section>

<section id="portfolio" class="portfolio">
  <div class="portfolio-filter clear">
    <div class="row ">
      <div class="col-md-12 ">
        <div class="w-100  btn-group btn-group-md">
          <ul class="w-100 text-center">
            <li> <a href="javascript:void(0);" class="active port-btn" data-filter="item">ALL</a> </li>
            <li> <a href="javascript:void(0);" class="port-btn" data-filter="logo">Logo</a></li>
            <li> <a href="javascript:void(0);" class="port-btn" data-filter="web">Web</a></li>
            <li> <a href="javascript:void(0);" class="port-btn"  data-filter="identity">Brand Identity</a></li>
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
<hr>

<section class="gallery-bottom">
  <div class="container">
    <div class="row">
        <div class="col-md-8">
          <p>We would love to hear about start your new project?</p>
        </div>
        <div class="col-md-4">
          <a href="<?php echo base_url() ?>" class="btn btn-primary btn-event btn-lg" role="button" aria-pressed="true">Contact Us <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
  </div>
</section>

<?php include('include/footer.php'); ?>
