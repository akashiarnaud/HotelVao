<!doctype html>
<html lang="en">
  <head>
    <title>Colorlib Villa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/aos.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  </head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><a href="index.html"><em>Villa</em></a></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="<?php echo base_url();?>/index.php/HotelCtrl">Hotel</a></li>
                        <li><a href="about.html">About</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 extra-info">
                      <div class="row">
                        <div class="col-md-6 mb-5">
                          <h3>Contact Info</h3>
                          <p>98 West 21th Street, Suite 721 <br> New York NY 10016</p>
                          <p>info@yourdomain.com</p>
                          <p>(+1) 435 3533</p>
                          
                        </div>
                        <div class="col-md-6">
                          <h3>Connect With Us</h3>
                          <ul class="list-unstyled">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero overlay" style="background-image: url(<?php echo base_url();?>assets/img/hero_1.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">Welcome to <em>Villa</em> resort</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Discover our world-class hotel &amp; restaurant resort.</p>
            <p data-aos="fade-up" data-aos-delay="100"><a href="#" class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block">Explore The Beauty</a> <a href="#" class="btn uppercase btn-outline-light d-sm-inline d-block">Download</a></p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    <section class="section visit-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading" data-aos="fade-right">You Can Visit</h2>
          </div>
        </div>
        <div class="row">
			<?php foreach($activities as $a) {?>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="#">
            <a href="restaurant.html"><img src="<?php echo base_url();?>assets/img/<?php echo $a['image'];?>" alt="Image placeholder" class="img-fluid"> </a>
			  <h3><a href="<?php echo base_url();?>Details-<?php echo $a['id']?>"><?php echo $a['nom'];?></a></h3>
          </div>
			<?php } ?>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section slider-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">A gorgeous place to enjoy your life.</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
				<?php foreach ($sliders as $s){?>
              <div class="slider-item">
                <img src="<?php echo base_url();?>assets/img/<?php echo $s['image'];?>" alt="Image placeholder" class="img-fluid">
              </div>
				<?php } ?>
            </div>

            <!-- END slider -->
          </div>

          <div class="col-md-12 text-center"><a href="#" class="">View More Photos</a></div>
        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="section blog-post-entry bg-pattern">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Recent Blog Post</h2>
            <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_3.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Testimonial</h2>
          </div>
        </div>
        <div class="row">
			<?php foreach($personnel as $p){?>
				<div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
					<div class="testimonial text-center">
						<div class="author-image mb-3">
							<img src="<?php echo base_url();?>assets/img/<?php echo $p['image'];?>" alt="Image placeholder" class="rounded-circle">
						</div>
						<blockquote>
							<p><?php echo $p['description'];?></p>
						</blockquote>
						<p><em>&mdash; <?php echo $p['nom'];?></em></p>
					</div>
				</div>
			<?php } ?>
          </div>
          <!-- END col -->

          <!-- END col -->
          <!-- END col -->
        </div>
    </section>
    <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Help</a></li>
             <li><a href="#">Rooms</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">Our Location</a></li>
              <li><a href="#">The Hosts</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Restaurant</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <p><span class="d-block">Address:</span> <span> 98 West 21th Street, Suite 721 New York NY 10016</span></p>
            <p><span class="d-block">Phone:</span> <span> (+1) 435 3533</span></p>
            <p><span class="d-block">Email:</span> <span> info@yourdomain.com</span></p>
          </div>
          <div class="col-md-3 mb-5">
            <p>Sign up for our newsletter</p>
            <form action="#" class="footer-newsletter">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your email...">
                <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
              </div>
            </form>
          </div>
        </div>
        <div class="row bordertop pt-5">
          <p class="col-md-6 text-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            
          <p class="col-md-6 text-right social">
            <a href="#"><span class="fa fa-tripadvisor"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
          </p>
        </div>
      </div>
    </footer>
    
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <!-- <script src="js/jquery.waypoints.min.js"></script> -->
    <script src="<?php echo base_url();?>assets/js/aos.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
  </body>
</html>