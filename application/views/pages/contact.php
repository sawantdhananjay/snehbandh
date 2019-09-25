<?php
$page="contact";
include('include/header.php'); ?>
<section class="contact-top-img">
  <div class="light-opacity bg-dark"></div>
    <div class="container">
      <div class="text">
        <p>We are awesome designer</p>
        <h1>Contact form</h1>
      </div>
    </div>
</section>

<section class="address">
  <div class="container">
    <div class="row">
      <h6 class="w-100">WE WOULD LOVE TO WORK WITH YOU</h6>
      <h2 class="w-100">How we can help</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text of the printing and industry.</p>
      <a href="<?php echo base_url() ?>" class="btn btn-primary btn-event btn-lg" data-animation="animated fadeInUp" role="button" aria-pressed="true">See More Work</a>
    </div>
  </div>
</section>

<section class="img-addr">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <img src="assets/images/contact.jpg" alt="">
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6 bg-light-cont" id="frist">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <h6>CONTACT ADDRESS</h6>
            <p>301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          </div>
          <div class="col-md-6 bg-dark-cont" id="frist">
            <i class="fa fa-comments-o" aria-hidden="true"></i>
            <h6>CONTACT ADDRESS</h6>
            <p>301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 bg-dark-cont" id="frist" >
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <h6>CONTACT ADDRESS</h6>
            <p>301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          </div>
          <div class="col-md-6 bg-light-cont"  id="frist">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <h6>CONTACT ADDRESS</h6>
            <p>301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="email_form">
<div class="container">
  <div class="col-md-8 offset-md-2 col-12">
    <h2>TELL US ABOUT YOUR PROJECT</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text.</p>
  </div>
  <div class="row">
    <div class="col-md-6">
      <input type="text" name="name" id="name" placeholder="Name *" class="input-form" >
    </div>
    <div class="col-md-6">
      <input type="text" name="mobile" id="mobile" placeholder="Mobile *" class="input-form" >
    </div>
    <div class="col-md-6">
      <input type="email" name="email" id="email" placeholder="Email *" class="input-form" >
    </div>
    <div class="col-md-6">
      <input type="text" name="budget" id="budget" placeholder="Budget *" class="input-form" >
    </div>
    <div class="col-md-12">
      <textarea name="comment" id="comment" placeholder="Describe your project" rows="6" class="big-textarea"></textarea>
    </div>
    <a href="<?php echo base_url() ?>" class="btn btn-primary btn-event btn-lg" data-animation="animated fadeInUp" role="button" aria-pressed="true">Send Mail</a>
  </div>
</div>
</section>



<?php include('include/footer.php'); ?>
