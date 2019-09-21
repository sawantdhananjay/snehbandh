
<footer>
    <section class="social-media">
      <div class="container">
          <div class="row">
            <div class="inline w-100">
                <p>On social networks
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-google-plus" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-youtube-play" aria-hidden="true"></i></p>
            </div>
          </div>
      </div>
    </section>
<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h6>ABOUT AGENCY</h6>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the and typesetting industry.</p>
      </div>

      <div class="col-md-3" id="middle_footer">
        <h6>ABOUT AGENCY</h6>
        <div class="row">
          <div class="col-3">
            <img src="<?php echo base_url() ?>assets/images/footer_img.jpg" alt="">
          </div>
          <div class="col-9">
            <p>Lorem Ipsum is simply dummy text of the printing </p>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <img src="<?php echo base_url() ?>assets/images/footer_img.jpg" alt="">
          </div>
          <div class="col-9">
            <p>Lorem Ipsum is simply dummy text of the printing </p>
          </div>
        </div>
        <div class="row">
          <div class="col-3 no-border">
            <img src="<?php echo base_url() ?>assets/images/footer_img.jpg" alt="">
          </div>
          <div class="col-9 no-border">
            <p>Lorem Ipsum is simply dummy text of the printing </p>
          </div>
        </div>

      </div>

      <div class="col-md-3">
        <h6>SUBSCRIBE NEWSLETTER</h6>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      </div>

      <div class="col-md-3" id="footer_img">
        <h6>FOLLOW US INSTAGRAM</h6>
        <div class="row">
          <div class="col-4">
            <img src="<?php echo base_url() ?>assets/images/testimonial2.jpg" alt="">
          </div>
          <div class="col-4">
            <img src="<?php echo base_url() ?>assets/images/testimonial2.jpg" alt="">
          </div>
          <div class="col-4">
            <img src="<?php echo base_url() ?>assets/images/testimonial2.jpg" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <img src="<?php echo base_url() ?>assets/images/testimonial2.jpg" alt="">
          </div>
          <div class="col-4">
            <img src="<?php echo base_url() ?>assets/images/testimonial2.jpg" alt="">
          </div>
          <div class="col-4">
            <img src="<?php echo base_url() ?>assets/images/testimonial2.jpg" alt="">
          </div>
        </div>

    </div>
  </div>
  <hr>
  <div class="row" id="bottom">
    <div class="col-md-6 left" >
      <p>POFO - Portfolio Concept Theme</p>
    </div>
    <div class="col-md-6 right" >
      <p>	&copy;2019 POFO is Proudly Powered by ThemeZaa</p>
    </div>
  </div>
</div>
</section>
  </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/propper.min.js"></script>
   <script src="assets/js/owl.carousel.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script type="text/javascript">
   $(document).ready(function(){
     $(".port-btn").click(function(){
         var value = $(this).attr('data-filter');
         if(value == "item")
         {            //$('.filter').removeClass('hidden');
             $('.item').show('1000');
         }
         else
         {
           //alert(value);
            $(".item").not('.'+value).hide('3000');
            $('.item').filter('.'+value).show('3000');
         }
         if ($(".port-btn").removeClass("active")) {
         $(this).removeClass("active");
         }
         $(this).addClass("active");

     });
   });
   </script>
   <script type="text/javascript">
   $('.count').each(function () {
  $(this).prop('Counter',0).animate({
      Counter: $(this).text()
  }, {
      duration: 4000,
      easing: 'swing',
      step: function (now) {
          $(this).text(Math.ceil(now));
      }
  });
});
   </script>
  <script type="text/javascript">
  $('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  autoplay:true,
   autoplayTimeout:3000,
   autoplayHoverPause:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:4
      }
  }
})
  </script>

  <script>
  AOS.init();
</script>
<script type="text/javascript">
$(document).ready(function() {
    // grab the initial top offset of the navigation
      var stickyNavTop = $('.stick').offset().top;

      // our function that decides weather the navigation bar should have "fixed" css position or not.
      var stickyNav = function(){
        var scrollTop = $(window).scrollTop(); // our current vertical position from the top
        // var width = $(document).width();
        // var rem = width-1100;
        // var left = rem/2;
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if (scrollTop > stickyNavTop) {
            $('.stick').addClass('sticky');
            // $('.stick').css("left", +left);
        } else {
            $('.stick').removeClass('sticky');
            // $('.stick').css("left", 0);
        }
    };

    stickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
      stickyNav();
    });
  });
</script>

<!-- <script type="text/javascript">
$(document).scroll(function() {
go_top();
});
// Show go top on scroll
function go_top(){
if( $(document).scrollTop() > 200 ) {
  $('#go-top').fadeIn();
} else {
  $('#go-top').fadeOut();
}
}

// Go to top..
$('#go-top').on( "click", function() {
  $('html, body').animate({scrollTop: 0});
  return false;
});
</script> -->

<!-- <?php if($this->session->flashdata("contact_status")){
      $contact_status = $this->session->flashdata("contact_status");
    ?>
    <input type="hidden" id="contact_status" name="contact_status" value="<?php echo $contact_status; ?>">
    <script>
      $('document').ready(function(){
        function myFunction() {
          var contact_status = $('#contact_status').val();
          if(contact_status == 'email_success'){
            $(".alert-success").show().delay(3000).fadeOut();
          }
          else{
              $(".alert-danger").show().delay(3000).fadeOut();
          }
        }
        myFunction();
      });
    </script> -->
    <!-- <?php } ?> -->



  </body>
</html>
