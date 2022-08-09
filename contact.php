<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anacky Portfolio</title>
    <meta name="description" content="Anacky is a Team of Devloper Associating Together to Implement Extra-ordinary Project">
    <meta name="keywords" content="Anacky is a Team of Devloper Associating Together to Implement Extra-ordinary Project">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <?php 
	 
    if ( $_GET['success'] =='true' ) 
    	echo '<script>alert("We will get back to you soon...")</script>';
      
    if ( $_GET['success'] =='false' ) 
    	echo '<script>alert("So Sorry, Please Try Again")</script>';
	?>
  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="index.php" class="probootstrap-logo">Anacky</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="about.php">About</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
          </ul>
          <!--<ul class="probootstrap-right-nav hidden-xs">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
          </ul>-->
          <!--<div class="extra-text visible-xs"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Address</h5>
            <p>Thakur Institute of Management, Career Devlopment & Research, Thakur Village, Kandivali East, Mumbai : 400101</p>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>-->
        </nav>
    </div>
  </header>
  <!-- END: header -->
  <section class="probootstrap-slider flexslider" style="height: 600px !important;">
    <ul class="slides">
      <li style="background-image: url(img/contact-bg.webp);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Contact</h2>
                <p>Feel Free to Connect With Us For Any Type Of Services And Solution.</p>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->
  
  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 probootstrap-animate overlap">
          <br/><br/><br/><br/><br/><br/>
          <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
            </div>
          </form>
        </div>
        <div class="col-md-3 col-md-push-1 probootstrap-animate">
          <h4>Contact Details</h4>
          <ul class="with-icon colored">
            <li><i class="icon-location2"></i><ul><span>Thakur Institute of Management, Career Devlopment & Research, Thakur Village, Kandivali East, Mumbai : 400101, INDIA</span></ul></li>
            <li><i class="icon-mail"></i><ul><span>admin@anacky.com</span></ul><ul><span>singhlacky2001@gmail.com</span></ul><ul><span>singhananya787@gmail.com</span></ul>
            </li>
            <li><i class="icon-phone2"></i><ul><span>+91 90040 51895</span></ul>
              <ul><span>+91 84509 25163</span></ul>
            </li>
          </ul>

          <!--<h4>Feedback</h4>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <p><a href="#">Learn More</a></p>-->
        </div>
      </div>
    </div>
  </section>  
  <!-- END section -->
  <!--<div class="container mb50 probootstrap-animate">
    <div id="map"></div>
  </div>-->

  <!--Poeple Say-->
  <section class="probootstrap-section probootstrap-section-lighter">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>People Says...</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4  probootstrap-animate">
          <div class="probootstrap-testimony">
            <blockquote>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </blockquote>
            <div class="author">
              <img src="img/person_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by uicookies.com">
              <div>Dr. Vinita Gaikwad <span>Director, TIMSCDR, Mumbai</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4  probootstrap-animate">
          <div class="probootstrap-testimony">
            <blockquote>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </blockquote>
            <div class="author">
              <img src="img/person_2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by uicookies.com">
              <div>Mr. Ajay Sahani <span>Co-Founder, Bracket Infinity Pvt. Ltd.</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4  probootstrap-animate">
          <div class="probootstrap-testimony">
            <blockquote>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </blockquote>
            <div class="author">
              <img src="img/person_3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by uicookies.com">
              <div>Dr. Sonu Gupta <span>Professor, TIMSCDR, Mumbai</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- END section -->
  

  <footer class="probootstrap-footer probootstrap-bg" style="padding: 0.5em;">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About Anacky.</h4>
            <p>Anacky is a Team of Devloper Associating Together to Implement Extra-ordinary Project.</p>
            <p><a href="https://anacky.com/">Read more...</a></p>
          </div> 
        </div>

        <div class="col-md-4">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Quick Links</h4>
            <ul class="stack-link">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="projects.php">Projects</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">Subscribe</h4>
            <p>Please subscribe to our monthly newsletter..</p>
            <form name = "form1" action="newsletter.php" method = "post" enctype = "multipart/form-data" >
              <div class="form-field">
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
                <button class="btn btn-subscribe">Send</button>
                <!--<input type="submit" class="btn btn-subscribe" id="submit" name="submit" value="Send">-->
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row copyright">
        <div class="col-md-6">
          <div class="probootstrap-footer-widget">
            <p>&copy; 2022 <a href="https://anacky.com/">Anacky</a>. Designed by <a href="https://anacky.com/">anacky.com</a> </p>
          </div>
        </div>
        <div class="col-md-6">
          <!--<div class="probootstrap-footer-widget right">
            <ul class="probootstrap-social">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>-->
        </div>
      </div>
    </div>
  </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>

  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>

  <script src="js/custom.js"></script>

  </body>
</html>