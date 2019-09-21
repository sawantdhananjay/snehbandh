<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snehbandh Events</title>
    <link rel="shortcut icon" href="assets/images/title.bmp" type="image/x-icon">
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
       <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
       <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       <link href="<?php echo base_url(); ?>assets/css/ihover.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> -->
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Arimo:400,700&display=swap" rel="stylesheet">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>


      <!--navbar start-->


      <!-- <div class="stick"> -->
      <nav class="navbar w-100 navbar-expand-lg navbar-transperent ">
        <div class="container ">
      <!-- <a class="navbar-brand d-block d-sm-none" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo1.jpg" alt=""></a> -->
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto text-right">
      <li class="nav-item ">
        <a class="nav-link <?php if($page=='home'){ echo 'active'; }?>" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($page=='about'){ echo 'active'; }?>" href="<?php echo base_url(); ?>About-Us">About Us</a>
      </li>
      <!-- <a class="navbar-brand d-none d-sm-block" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.jpg" alt="">
      </a> -->
      <li class="nav-item">
        <a class="nav-link <?php if($page=='gallery'){ echo 'active'; }?>" href="<?php echo base_url(); ?>Gallery">Gallery</a>
      </li>
      <li class="nav-item" style="border-right:none;">
        <a class="nav-link <?php if($page=='contact'){ echo 'active'; }?>" href="<?php echo base_url(); ?>Contact">Contact</a>
      </li>
    </ul>
  </div>
    </div>
</nav>
<!-- </div> -->


  <!--navbar ends-->
