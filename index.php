<?php
$servername="localhost";
$username="root";
$password="";
$database="contact";


$conn = new mysqli($servername,$username,$password,$database);


if($conn->connect_error){

    die("Sorry, there was problem with the server. The problem will b fixed soon  ". $connect_error);


}





include 'db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){


  if(!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message']) ){
       
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql ="INSERT INTO contact(name, subject, email, message) VALUES('$name','$subject','$email','$message')";
    

    if($conn->query($sql)){

        header("location: thank-you.html");


    }
     
     
  }




}








?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Brainpals Innovation and technology:: Best Software Academy, Design, Website, Publishing and Android</title>
  <!--<meta content="" name="description">-->
  <meta name="keywords" content="Best Software Academy, Design, Website, Publishing and Android">
  <meta name="author" content="Brainpals">
  
  <!--Twitter  meta tags-->
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="You need a Software with Class and Security, Contact us for all your software needs even Blockchain technology"/>
<meta name="twitter:title" content="Software Design, Training, Website Development, Mobile Applications Designs, Publishing and Educational Services"/>
<meta name="twitter:site" content="@brainpalsClass"/>
<meta name="twitter:domain" content="Software Design, Training, Website Development, Mobile Applications Designs, Publishing and Educational Services"/>
<meta name="twitter:image:src" content="https://www.brainpals.com.ng/media/logo.png"/>
<meta name="twitter:creator" content="@famous_emeka"/>


  <!-- facebook meta tags-->
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="You need a Software with Class and Security, Contact us for all your software needs even Blockchain technology" />
<meta property="og:description" content="Software Design, Training, Website Development, Mobile Applications Designs, Publishing and Educational Services" />
<meta property="og:url" content="https://www.brainpals.com.ng/" />
<meta property="og:site_name" content="brainpals" />
<meta property="article:publisher" content="" />
<meta property="og:image" content="https://www.brainpals.com.ng/media/logo.png" />


  <!-- Favicons -->
  <link href="favicon.png" rel="icon">
  <link href="favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="assets/img/brainpals-image.png" width="30" height="30"><a href="index.php"><span style="position:relative; top:17px; right: 39px;font-size:10px;"> BRAINPALS INOVATIONS & TECHNOLOGY</span> </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          
        
          </li>
          <li><a class="nav-link" href="https://www.google.com">Brainpals Academy</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <!-- <li><a class="getstarted" href="index.html">contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Welcome to Brainpals, Your reliable software company</h1>
          <h2  class="typed" data-typed-items="Transforming Vision into innovation: powering tommorow's world today"></h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#contact" class="btn-get-started scrollto">Contact Us</a>
           </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img id="img-src" src="assets/img/side-banner.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  <div class="curve">
      <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
      <!-- rgb(97, 4, 97) rgb(220, 70, 220); -->
        <path d="M0,100 C150,200 350, 0 500, 100 L500, 00, L0, 0 Z" style="stroke:none; fill: rgb(97, 4, 97);"></path>

      </svg>
  </div>

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <!--<section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/brand5.jpeg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/brand1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/brand2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/brand3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/brand4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/image6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section>--><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content justify-content-center">
          <div class="col-lg-8">
            <p>
              We are an ICT and Educational Resource Company established in 2016 & registered with the CAC as RCC:6953740 as a legal business unit. Over the years we have helped organization deploy electronic solutions and have trained over 5000 programmers. We have partnered with various educational bodies to equip the students and always willing to do more. We tutor students on Data Analysis, Web devevelopment, Python programming and Data science
            </p>
           <!-- <ul>
              <li><i class="ri-check-double-line"></i> Helps secure remote jobs</li>
              <li><i class="ri-check-double-line"></i> Recognized by European Union</li>
              <li><i class="ri-check-double-line"></i> Improves quality of workforce</li>
            </ul>-->
          </div>
         <!-- <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>-->

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3> <strong>What makes us different</strong></h3>
              <p>
                 
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Refreshing Design <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      
We all love something outstanding. We go out of the way to give you options allowing you to personally be fully involved. We personalise your idea and fall in love with it.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Fully rsponsive <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Our Webapps works perfectly across all devices irrespective of the device size. Beyond that, it is fully SEO optimised & can be easily indexed by any search engine.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>Fast and smooth <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      In whatever we do, we give you solutions that are completely reliable, efficient & Quick. We do not compromise on excellence at its peak.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span>Passion & Affordability <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                     

We bring something that is not so common. Our price does not match the quality of service you will get & Our passion is a Tool for the best.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>05</span>Security, Sincerity & Deadlines<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      
                      If we can't, then we tell you. Whatever we do we do not just meet deadlines, we beat deadlines. You can trust us on that. Your solutions are delivered with 99.9% security across.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section>
    <div class="curve">
      <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
        <path d="M0,100 C150,200 350, 0 500, 100 L500, 00, L0, 0 Z" style="stroke:none; fill: #f3f5fa;"></path>

      </svg>
  </div>
    <!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <!-- <img src="assets/img/skills.png" class="img-fluid" alt=""> -->
              <video controls id="vid" style="border-radius:15px;" width="400px" height="400px">
                 <source src="assets/vid/promo.mp4" type="video/mp4">
  
              </video>
         
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>We are here to help you achieve your goals</h3>
            <p class="fst-italic">
              At brainpals we believe in helping our sudents achieve thier goals
            </p>

          <!--  <div class="skills-content">

              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>-->

          </div>
        </div>

      </div>
    </section>
   

    <!--- ======= Services Section ======= -->
   <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Our services are tailored for you and your needs</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bx-code-alt"></i></div>
              <h4><a>Web development</a></h4>
              <p>We will build you a solution that lives in the cloud and rooted. in expertise.School Portal, Church, Agaency, Government</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bx-chart"></i></div>
              <h4><a href="">Graphics, Logos and banner design</a></h4>
              <p>Our creative and Design sctions will help you handle your represent ideas in pictures. Bannrs, Logos, Label, Business cards</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Software training</a></h4>
              <p>Irrspective of the languag you want to larn and to what extent, you can trust Brainpals Code Academy to hlp you get there. Mobile App, standalone softwares, Data science, Website and Web apps corses available</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Python Programming</a></h4>
              <p>Our experienced experts are dedicted in imapcting Python Programming knowledge on students .</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Data Analysis</a></h4>
              <p>We all know that data analyst are sought after in the IT world. Join our program and get certified as a data analyst </p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">App Development</a></h4>
              <p>In whatever platform you need to have a mobile app. Be sure to get an outstanding UI/UX but a reliable and effective app you can be proud of.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bx-tool-box"></i></div>
              <h4><a href="">General ICT consultancy</a></h4>
              <p>Haven being around for some years, we are always available to point you to the right location and better explain how it can be done more effectively</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4><a href="">Book Publishing & Printing</a></h4>
              <p>With our affliate companies scattered across Nigeria & Beyond, you can be sure to get the best pocket friendly book & Journals Publication.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <div class="curve-services">
      <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
        <path d="M0,100 C150,200 350, 0 500, 100 L500, 00, L0, 0 Z" style="stroke:none; fill: #f3f5fa;"></path>

      </svg>
  </div>
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!--<section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section>--><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Products</h2>
          
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".primary-app">primary schools</li>
          <li data-filter=".uni-app">Uni apps</li>
          <li data-filter=".corp-app">Corporate web apps </li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item uni-app">
            <div class="portfolio-img"><img src="soft.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Softrabyte & Swift</h4>
              <p>Offline and online result processing System for universities, poly, and CO</p>
              <a href="soft.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
             <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item primary-app">
            <div class="portfolio-img"><img src="superclass.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>SuperClassroom</h4>
              <p>Result E-learning and portal for primary and secondary school</p>
              <a href="superclass.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item uni-app">
            <div class="portfolio-img"><img src="cbt.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Electronic test software to conduct post UTME, schools & other examinations</h4>
              <p>CBT</p>
              <a href="cbt.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item corp-app">
            <div class="portfolio-img"><img src="ememo.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>E-memo app</h4>
              <p>Electronic digital mail system</p>
              <a href="ememo.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          

        </div>

      </div>
      
    </section>
    
    
    <!-- End Portfolio Section -->

   
   
     <!-- ======= Team Section ======= -->
   <section id="team" class="team section-bg">

        


     
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our partners</h2>
          <i class="handshake-box-fill"></i>
          <p>We are blessed with talented and motivated team that make this platform a success</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
              <img src="assets/img/saed.png" style="width:100%; height:auto;">
          </div>
          

          <div class="col-lg-3 mt-4 mt-lg-0">
          <img src="assets/img/google.png" style="width:100%; height:auto;">
          </div>

          <div class="col-lg-3 mt-4">
          <img src="assets/img/heritage.png" style="width:100%; height:auto;">
          </div>

          <div class="col-lg-3 mt-4">
          <img src="assets/img/kogi-poly.png" style="width:100%; height:auto;">
          </div>

        </div>

      </div>
    </section>
    <div class="curve-services">
      <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
        <path d="M0,100 C150,200 350, 0 500, 100 L500, 00, L0, 0 Z" style="stroke:none; fill: #f3f5fa;"></path>

    </svg>
    </div>
    
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
   <!-- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
  <!-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>--><!-- End Frequently Asked Questions Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>If you have question concerning our exams or would like to make some inquiries feel free to contact us.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Address 1</h4>
                <p>EduPortal 2, DITRC Kogi State Polytechnic, Lokoja Kogi State</p>
              </div>
              <div class="address">
              <i class="bi bi-geo-alt"></i>
                <h4>Address 2</h4>
                <p>24, Orital Police Barracks, Orital Challenge, Ibadan. Oyo State, Nigeria.</p>
             </div>
             <div class="address">
               <i class="bi bi-geo-alt"></i>
               <h4>Address 3</h4>
               <p>Opp. Tourist Hotel, Old Egume Road, Kogi State University, Anyigba, Kogi State, Nigeria.</p>
             </div>
            
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>gstat@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:+2348169304238</h4>
                <p></p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9672883785306!2d6.722657168383294!3d7.793288189954794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104f5fbfbc4f16ff%3A0xbd19530a2f37f636!2sBrainpals%20Code%20Academy!5e0!3m2!1sen!2sng!4v1699007570136!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <!-- -->
            <form action="index.php" method="post" role="form>" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Join our Newsletter and get updated on new jobs available</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->
    

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-8 footer-contact">
            <h3>Brainpals</h3>
            <p>
              We are an ICT and Educational Resource Company established in 2016 & registered with the CAC as BN:243748 as a legal business unit. Over the years we have helped organization deploy electronic solutions and have trained over 300 programmers. We have partnered with various educational bodies to equip the students and always willing to do more.
             
             
              
              <strong>Email:</strong> gstat@gmail.com<br>
            </p>
          </div>

         <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->
           
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Connect with us through our social media channels</p>
            <div class="social-links mt-3">
              <a href="https://www.x.com/brainpalscode" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/brainpalscode" class="http://"><i class="bx bxl-facebook"></i></a>
              <a href="https://instagram.com/brainpals_code" class="instagram"><i class="bx bxl-instagram"></i></a>
              <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Brainpals</span></strong>. All Rights Reserved
      </div>
     <!--- <div class="credits">
       
      </div>-->
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <a href="#" class="whatsapp-button d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
      //var img = ["banner.png", "second-banner.jpg", "png"];
      //function change(){

        //  for(var i =0; i <= img.length; i++){

                 // document.getElementById("img-src").setAttribute("src=")
        //  }

     // }
  </script>
</body>

</html>