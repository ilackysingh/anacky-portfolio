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
    	echo '<script>alert("Thank you for Subscribing...")</script>';
      
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
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

  <section class="probootstrap-slider flexslider" style="height: 600px !important; ">
    <ul class="slides">
      <li style="background-image: url(img/index-bg.webp);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn" style="padding-top: 100px !important; max-width: 800px !important;">
                <h2>Anacky is a Team of Devloper Associating Together to Implement Extra-ordinary Project.</h2>
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
      <div class="row overlap">
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">

            <div class="icon">
              <i class="icon-laptop3"></i>
            </div>
            <div class="text">
              <h3 class="heading">Website Hosting</h3>
              <p>Far Providing Hosting Solutions for Businesses Present in Any Domain. </p>
              <p><a href="projects.php">Learn more</a></p>
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <i class="icon-presentation"></i>
            </div>
            <div class="text">
              <h3 class="heading">Server Monitoring</h3>
              <p>Maintaining and Monitoring Server's to Avoid Any Type of DownTime. </p>
              <p><a href="https://server.anacky.com">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <i class="icon-wallet2"></i>
            </div>
            <div class="text">
              <h3 class="heading">Business Solutions</h3>
              <p>To Provide Basic Easy Solutions for Businesses to Resolve Tedious Task. </p>
              <p><a href="projects.php">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <div class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>Our Services</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInLeft">

          <div class="panel-group probootstrap-panel" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h3 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                    Web Development
                  </a>
                </h3>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p>Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design, interface design, including standardized code.</p>

                  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Server Monitoring
                  </a>
                </h3>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <p>To maintain and monitor servers be it a VPS or a dedicated one to avoid downtime and proper function of the resources. Various level of project such as development, production can also be managed for futher efficiency of server.</p>
                  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Business Solutions
                  </a>
                </h3>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <p>We help in defining your brand by offering impeccable service combining a nice and user-friendly design with quality programming. Any complex problem can be resolved in the simplest way possible to give you an optimal solution.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- END panel-group -->
        </div>
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInRight">
          <p><img src="img/business-solutions.jpg" alt="Free HTML Bootstrap Theme by uicookies.com" class="img-responsive"></p>
        </div>
      </div>
    </div>
  </div>
  <!-- END section -->

  <!--<section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>Watch Video</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 probootstrap-animate" data-animate-effect="fadeIn">
          <figure>
            <div class="probootstrap-video">
              <a href="https://vimeo.com/45830194" class="popup-vimeo probootstrap-video-play overlay"><span><i class="icon-play3"></i></span></a>
              <img src="img/slider_3.jpg" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive">
            </div>
          </figure>
        </div>
      </div>
    </div>
  </section>-->
  <!-- END section -->

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>Recent Work</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="https://music.anacky.com" target="_blank"><img src="img/music.jpg" class="img-responsive img-border" alt="Music Player"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Online Music Application</h2>
              <p class="category">An Online Music Playing Application where we can Play and Download Songs Free of Cost.</p>
              <p><a href="https://music.anacky.com">View details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="http://server.anacky.com"><img src="img/server.jpg" class="img-responsive img-border" alt="Server Monitor"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Server Monitor</h2>
              <p class="category">A Django Application which can help in tracking and monitoring the status of your server.</p>
              <p><a href="http://server.anacky.com">View details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="https://traffic.anacky.com"><img src="img/traffic.jpg" class="img-responsive img-border" alt="Traffic Detections"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Traffic Detections</h2>
              <p class="category">An AI Model to detect the Traffic Signal with the help of various Image Processing tools and Prediction.</p>
              <p><a href="https://traffic.anacky.com">View details</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="https://crime.anacky.com"><img src="img/crime.jpg" class="img-responsive img-border" alt="Crime Management System"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Crime Management System</h2>
              <p class="category">A Java Based Management System where you can Raise a complaint, Check for wanted personality and lost and found.</p>
              <p><a href="https://crime.anacky.com">View details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="https://dts.anacky.com"><img src="img/transport.jpg" class="img-responsive img-border" alt="Digen Tempo Service"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Digen Tempo Service</h2>
              <p class="category">A static website created for 'Digen Tempo Service', a small scale Transportation Company operating in Mumbai.</p>
              <p><a href="https://dts.anacky.com">View details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="https://library.anacky.com"><img src="img/libraries.jpg" class="img-responsive img-border" alt="Library Management System"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Library Management</h2>
              <p class="category">A python-based program which helps a Librarian to keep a track of all the book present in their Library.</p>
              <p><a href="https://library.anacky.com">View details</a></p>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>
  <!-- END section -->

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
  <script src="js/custom.js"></script>

  </body>
</html>