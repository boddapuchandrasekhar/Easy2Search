<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Easy2Search</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NewBiz
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1><a href="index.html">NewBiz</a></h1> -->
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Govt Schemes</a></li>
          <li><a class="nav-link scrollto" href="#services">Govt cards</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Internships</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Government jobs</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Govt Exams</a></li>
          <li><a class="nav-link scrollto" href="#clients">Portals</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="logout.php">logout</a></li>
          
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">

      <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/hero-img.svg" alt="" class="img-fluid">
      </div>

      <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
        <h2>Discover the<br><span>Opportunities</span><br>that awaits you!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          
        </div>
      </div>

    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Govt Schemes</h3>
          
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="https://www.myscheme.gov.in/">All Schemes</a></h4>
              <p class="description">1.Click on "Find Schemes For you".
                                     2.Apply according to gender and age.
                                     3.Enter state,area.
                                     4.select caste.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="https://www.myscheme.gov.in/search/ministry/Ministry%20of%20Education">Educational Schemes </a></h4>
              <p class="description">1.you will be redirected to the website.
                    
              </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="https://www.myscheme.gov.in/search/ministry/Ministry%20Of%20Health%20&%20Family%20Welfare">Health and welfare Schemes</a></h4>
              <p class="description">You will be redirected to the website.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="https://www.myscheme.gov.in/search/ministry/Ministry%20Of%20Agriculture%20and%20Farmers%20Welfare">Agricultural Schemes</a></h4>
              <p class="description">You will be redirected to the website.</p>
            </div>
             
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="https://www.myscheme.gov.in/search/ministry/Ministry%20Of%20Youth%20Affairs%20&%20Sports">Youth affairs Schemes</a></h4>
              <p class="description">You will be redirected to the website.</p>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="https://www.myscheme.gov.in/search/ministry/Ministry%20Of%20Tourism">Tourism Schemes</a></h4>
              <p class="description">You will be redirected to the website.</p>
            </div>
            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="https://www.myscheme.gov.in/search/ministry/Ministry%20Of%20Culture">Cultural Schemes</a></h4>
              <p class="description">You will be redirected to the website.</p>
            </div>


          </div>

          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
            <img src="assets/img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Identity Documents</h3>
          
        </header>

        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="https://uidai.gov.in/en/">Aadhar card</a></h4>
              <p class="description"><a href="https://eaadhaar.uidai.gov.in/">Download link</a></p>
              <p class="description"><a href="https://appointments.uidai.gov.in/bookappointment.aspx">Appiontment link</a></p>
              <p class="description"><a href="https://myaadhaar.uidai.gov.in/bank-seeding-status">Bank link Verify</a></p>
              <p class="description"><a href="https://uidai.gov.in/images/Form_1_Eng.pdf">PDF link</a></p>
              <p class="description"><a href="https://uidai.gov.in/en/">Home page link</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="https://www.protean-tinpan.com/services/pan/pan-index.html">PAN card</a></h4>
              <p class="description"><a href="https://www.pan.utiitsl.com/panonline_ipg/forms/pan.html/preForm">Registration link</a></p>
              <p class="description"><a href="https://www.pan.utiitsl.com/PAN_ONLINE/ePANCard">PAN download</a></p>
              <p class="description"><a href="https://eportal.incometax.gov.in/iec/foservices/#/pre-login/bl-link-aadhaar">PAN -> Aadhar link</a></p>
              <p class="description"><a href="https://eportal.incometax.gov.in/iec/foservices/#/pre-login/link-aadhaar-status">PAN -> Aadhar Status</a></p>
              <p class="description"><a href="https://uidai.gov.in/images/Form_1_Eng.pdfN">PDF link</a></p>
              <p class="description"><a href="https://www.protean-tinpan.com/services/pan/pan-index.html">Home Page</a></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="https://www.aptransport.org/index.html">Driving License</a></h4>
              <p class="description"><a href="https://www.aptransport.org/html/registration.html">Registration link</a></p>
              <p class="description"><a href="https://www.aptransport.org/html/driving-licence-renewa-of-driving-licence.html">Renewal of driving license</a></p>
              <p class="description"><a href="https://www.aptransport.org/html/driving-licence-issue-of-duplicate-driving-licence.html">Issue of Duplicate license</a></p>
              <p class="description"><a href="https://www.aptransport.org/html/driving-licence-intl-driving-permit.html">International Driving Permit</a></p>
              <p class="description"><a href="https://www.aptransport.org/html/driving-licence-change-of-address.html">Change of address</a></p>
              <p class="description"><a href="https://www.aptransport.org/index.html">Home page</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="https://www.passportindia.gov.in/AppOnlineProject/welcomeLink#">Passport</a></h4>
              <p class="description"><a href="https://portal2.passportindia.gov.in/AppOnlineProject/user/RegistrationBaseAction?request_locale=en">New user registration</a></p>
              <p class="description"><a href="https://www.passportindia.gov.in/AppOnlineProject/user/userLogin">Existing user login</a></p>
              <p class="description"><a href="https://www.passportindia.gov.in/AppOnlineProject/online/apptAvailStatus">Check Appointment</a></p>
              <p class="description"><a href="https://www.passportindia.gov.in/AppOnlineProject/statusTracker/trackStatusInpNew">Track Application</a></p>
              <p class="description"><a href="https://www.passportindia.gov.in/AppOnlineProject/welcomeLink#">Home page</a></p>
              
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-brightness-high" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="https://ap.meeseva.gov.in/IMeeSeva2/IMeesevaHome.aspx">Meeseva Certificate</a></h4>
              <p class="description"><a href="https://ap.meeseva.gov.in/IMeeSeva2/IMeesevaHome.aspx">Application status</a></p>
              <p class="description"><a href="https://ap.meeseva.gov.in/IMeeSeva2/iMeeSevaDepartments.aspx">Service Forms</a></p>
              <p class="description"><a href="https://ap.meeseva.gov.in/IMeeSeva2/IMeesevaHome.aspx">Home page</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-calendar4-week" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="https://voters.eci.gov.in/">Voter card</a></h4>
            
              <p class="description"><a href="https://voters.eci.gov.in/login">Track status</a></p>
              <p class="description"><a href="https://voters.eci.gov.in/login">E votercard download</a></p>
              <p class="description"><a href="https://electoralsearch.eci.gov.in/">Elector Details link</a></p>
              <p class="description"><a href="https://voters.eci.gov.in/">Home page</a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Internships</h3>
          
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Motion Cut</h5>
                <p class="card-text">At Motion Cut, our mission is to bridge the gap between education and industry by providing students with hands-on learning experiences that prepare them for successful careers in their chosen fields. We believe in the power of practical learning and mentorship to unlock the full potential of individuals and drive positive change in the world.</p>
                <a href="https://motioncut.shop/internships/" class="readmore">Registration link </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Cognifyz Technologies</h5>
                <p class="card-text">Cognifyz Technologies is a technology company that provides software solutions for businesses. The company offers a range of products and services, including artificial intelligence (AI), machine learning (ML), and data analytics tools. One of the main offerings of Cognifyz Technologies is their AI-powered chatbot platform.</p>
                <a href="https://cognifyz.com/" class="readmore">Registration link</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Oasis Infobyte</h5>
                <p class="card-text">We Develop Personalized Software At Our Company, We Turn The Digital Dreams Of Our Clients Into A Reality. We Work Closely With Our Users Throughout Development To Ensure That We Are Still Aligned With The End-Goal. We Are Committed To Producing Exceptional Software For Each Of Our Clients. At OASIS Infobyte, Our Mission Is To Empower The Youth, Particularly Students. </p>
                <a href="https://oasisinfobyte.com/" class="readmore">Registration link </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Codesoft</h5>
                <p class="card-text">CodSoft are IT services and IT consultancy that specializes in creating innovative solutions for businesses. We are passionate about technology and believe in the power of software to transform the world. Our internship program is just one of the ways in which we are investing in the future of the industry. At CodSoft, we believe practical knowledge is the key to success in the tech industry.</p>
                <a href="https://www.codsoft.in/" class="readmore">Registration link </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">TechnoHacks EduTech</h5>
                <p class="card-text">We provide top-notch IT training and cutting-edge products to help businesses and individuals stay ahead in the ever-evolving tech landscape. Our team of experts is dedicated to helping you achieve your goals and reach your full potential.</p>
                <a href="https://technohacks.co.in/" class="readmore">Registration link</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Octanet</h5>
                <p class="card-text">We Are Leading StartUp Company In India As An Organization We Creates And Hosts Web And Android Applications For Our Clients. We Connect With Our Users Throughout Development To Ensure That We Are Still Aligned With The End-Goal. We Are Committed To Producing Exceptional Software For Each Of Our Clients.</p>
                <a href="https://octanet.in/training-internship/" class="readmore">Registration link</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Internshala</h5>
                <p class="card-text">Internshala is an online platform connecting students and employers for internships.
                  It offers a wide array of internship opportunities across various industries.
                  Internshala also provides learning resources to enhance students' skills and career readiness.</p>
                <a href="https://internshala.com/student/personal_details" class="readmore">Registration link</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Cognifyz Technologies</h5>
                <p class="card-text">Cognifyz Technologies is a technology company that provides software solutions for businesses. The company offers a range of products and services, including artificial intelligence (AI), machine learning (ML), and data analytics tools. One of the main offerings of Cognifyz Technologies is their AI-powered chatbot platform.</p>
                <a href="https://cognifyz.com/" class="readmore">Registration link</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Wayup</h5>
                <p class="card-text">WayUp is a job and internship platform catering specifically to college students and recent graduates. It features a user-friendly interface that allows users to browse entry-level positions, internships, and part-time jobs across various industries. WayUp also provides resources and career advice tailored to young professionals entering the workforce.</p>
                <a href="https://www.wayup.com/" class="readmore">Registration link</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Idealist</h5>
                <p class="card-text">Idealist is a platform dedicated to connecting individuals with opportunities in the nonprofit sector, including internships, jobs, and volunteer positions worldwide. It emphasizes social impact and offers resources for those interested in careers that make a difference. Idealist also facilitates networking and learning opportunities within the nonprofit community.</p>
                <a href="https://www.idealist.org/en" class="readmore">Registration link</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">AICTE</h5>
                <p class="card-text">For getting a quicker and easier way out of such situations, many companies and students have found AICTE to be of great

                  Organisations are getting familiar, that work these days is something other than an approach to win your bread. It is a
                  
                  dedication, an awareness of others’ expectations, and a proprietorship</p>
                <a href="https://internship.aicte-india.org/register_new.php" class="readmore">Registration link</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Youth Opportunities</h5>
                <p class="card-text">Youth Opportunities is a comprehensive platform offering a wide array of opportunities including internships, scholarships, conferences, and competitions worldwide. It aims to empower young individuals by providing resources to develop their skills and network globally. The website facilitates access to diverse opportunities that promote personal growth and professional development for youth around the globe.</p>
                <a href="https://www.youthop.com/internships" class="readmore">Registration link</a>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Real World Eperience</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
            <p>Skill Development</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1" class="purecounter"></span>
            <p>Networking Opportunities</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Career Exploration</p>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="clearfix">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">State Govt Jobs</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Officer range</li>
              <li data-filter=".filter-card">Manager range</li>
              <li data-filter=".filter-web">Coordinator range</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://slprb.ap.gov.in/"> Police Officer</a></h4>
                
                <div>
                  
                  <a href="https://slprb.ap.gov.in/" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://psc.ap.gov.in/">Assistant Statistical Officer</a></h4>
                
                <div>
                  
                  <a href="https://psc.ap.gov.in/" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="http://www.psc.ap.gov.in/">Forest Range Officer</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/app2.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                  <a href="http://www.psc.ap.gov.in/" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://in.talent.com/view?id=1ace23cddbb0&utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic">Senior Manager</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/card2.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="https://in.talent.com/view?id=1ace23cddbb0&utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://www.govtjobsblog.in/job/angrau-govt-jobs-in-ap-2024-apply-for-03-technical-assistant-post/59216/?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic">Angrau</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/web2.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
                  <a href="https://www.govtjobsblog.in/job/angrau-govt-jobs-in-ap-2024-apply-for-03-technical-assistant-post/59216/?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://govinfo.me/job/ap-public-service-commission-recruitment-2018-apply-online-309-assistant-executive-engineers-posts-psc-ap-gov/?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic#google_vignette">State Public Service Commision</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/app3.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="https://govinfo.me/job/ap-public-service-commission-recruitment-2018-apply-online-309-assistant-executive-engineers-posts-psc-ap-gov/?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic#google_vignette" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://www.recruitment.guru/govt-jobs-in-ap">All Jobs</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/card1.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="https://www.recruitment.guru/govt-jobs-in-ap" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://srlm.mizoram.gov.in/storage/uploads/5e92f50596c31.pdf">Project Manager</a></h4>
          
                <div>
                  <a href="assets/img/portfolio/card3.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
                  <a href="https://srlm.mizoram.gov.in/storage/uploads/5e92f50596c31.pdf" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://iisdt.in/district-coordinator-application-form/">District Coordinator</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/web1.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
                  <a href="https://iisdt.in/district-coordinator-application-form/" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
    <section id="portfolio" class="clearfix">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Central Govt Jobs</h3>
        </header>

       
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://indianrailways.gov.in/railwayboard/view_section.jsp?lang=0&id=0,7,1281		">Indian Railways</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job1.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                  <a href="https://indianrailways.gov.in/railwayboard/view_section.jsp?lang=0&id=0,7,1281		" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://ndacivrect.gov.in/">NDA jobs</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job2.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                  <a href="https://ndacivrect.gov.in/" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://g.co/kgs/4fx8SxC">Defence Sector fire man job</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job3.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                  <a href="https://g.co/kgs/4fx8SxC" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://g.co/kgs/nV2ipNj">Minitry of social defence</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job4.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="https://g.co/kgs/nV2ipNj" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://g.co/kgs/hW4auJE">Indian Navy SSC</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job5.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="https://g.co/kgs/hW4auJE" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://g.co/kgs/xDLkDic">Apprentice jobs</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job6.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="https://g.co/kgs/xDLkDic" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://g.co/kgs/5da1fcJ">Naval Dockyard Jobs</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job7.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="https://g.co/kgs/5da1fcJ" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://www.indgovtjobs.in/2013/08/bank-jobs-openings-august-2013.html#google_vignette">Central Govt Bank jobs</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job8.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="https://www.indgovtjobs.in/2013/08/bank-jobs-openings-august-2013.html#google_vignette" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://www.bankofbaroda.in/career">Bank of Baroda</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job9.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="https://www.bankofbaroda.in/career" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job10.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://sbi.co.in/web/careers/current-openings">SBI</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job10.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="https://sbi.co.in/web/careers/current-openings" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job11.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://canarabank.com/pages/Recruitment">Canara Bank</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job11.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="https://canarabank.com/pages/Recruitment" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job12.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://g.co/kgs/XGTzt8x">Army security officer</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job12.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="https://g.co/kgs/XGTzt8x" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job13.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://g.co/kgs/Am6i3PA">Data Analysis Job</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job13.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="https://g.co/kgs/Am6i3PA" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job14.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://g.co/kgs/gj3JY6p">Agniveer army jobs</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job14.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="https://g.co/kgs/gj3JY6p" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/job15.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="https://g.co/kgs/2r8c4L9">BSF jobs</a></h4>
                
                <div>
                  <a href="assets/img/portfolio/job15.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="https://g.co/kgs/2r8c4L9" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
      <div class="container" data-aso="zoom-in">

        <header class="section-header">
          <h3>Government Exams</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                    <a href="https://upsc.gov.in/">UPSC</a>
                    <h4>Union Public Service Commission</h4>
                    <p>
                      The UPSC (Union Public Service Commission) conducts one of India's most prestigious examinations, the Civil Services Examination (CSE). It is known for its rigorous selection process, consisting of three stages: Preliminary Examination, Main Examination, and Personality Test (Interview). Successful candidates are recruited for a wide range of administrative positions in the Government of India.

Qualifications:
Nationality: The candidate must be a citizen of India.
Educational Qualification: The candidate must hold a degree from any recognized university.
Age Limit: The candidate must be between 21 to 32 years of age as of August 1.
Number of Attempts: General category candidates can attempt the exam a maximum of six times.
                      </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                    <a href="https://ssc.nic.in/">CHSL</a>
                    <h4>Combined Higher Secondary Level</h4>
                    <p>
                      The CHSL (Combined Higher Secondary Level) examination is conducted by the Staff Selection Commission (SSC) in India. It serves as a gateway for recruiting candidates to various clerical cadre positions in government ministries, departments, and organizations. The exam consists of three tiers: Tier 1 (computer-based), Tier 2 (descriptive paper), and Tier 3 (skill test/typing test), assessing candidates' aptitude in general intelligence, quantitative aptitude, English language, and general awareness.

Qualifications:
Educational Qualification: Candidates must have passed 12th Standard or equivalent examination from a recognized board.
Age Limit: The minimum age limit is usually 18 years, and the maximum age limit is typically 27 years.
Nationality: Candidates must be Indian citizens, or subjects of Nepal, Bhutan, or Tibetan refugees.
                      </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                    <a href="https://www.sbi.co.in/web/careers/">Bank PO exam-SBI</a>
                    <a href="https://www.ibps.in/">Bank PO exam-IBPS</a>
                    <h4>Probationary Officer</h4>
                    <p>
                      The Bank PO (Probationary Officer) exam is conducted by various banks in India, including State Bank of India (SBI) and Institute of Banking Personnel Selection (IBPS), among others. It serves as a gateway for recruiting candidates to the position of Probationary Officer, which is an entry-level managerial position in banks. The exam typically consists of preliminary and mains examinations followed by a personal interview, assessing candidates' proficiency in reasoning, quantitative aptitude, English language, and general awareness.

Qualifications:
Educational Qualification: Candidates must have a bachelor’s degree in any discipline from a recognized university.
Age Limit: The minimum age limit is usually 20 years, and the maximum age limit is typically 30 years.
Nationality: Candidates must be Indian citizens. In some cases, candidates from Nepal, Bhutan, Tibetan refugees.
                      </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                    <a href="https://upsc.gov.in/">NTPC</a>
                    <h4>Non-Technical Popular Categories</h4>
                    <p>
                      The NTPC (Non-Technical Popular Categories) exams conducted by Railway Recruitment Boards (RRBs) in India are for various non-technical posts such as Clerks, Typists, Station Masters, and Ticket Clerks in Indian Railways. These exams assess candidates' proficiency in areas like General Awareness, Mathematics, General Intelligence and Reasoning, and General Science through Computer Based Tests (CBT) and subsequent stages. Successful candidates are selected based on their performance in the exams and subsequent document verification processes.

ultiple stages, evaluating their knowledge, aptitude, and leadership qualities. Successful candidates often serve in key roles shaping policy and governance at national and sometimes international levels.
Qualifications:
Educational Background: A bachelor's degree from a recognized university is often the minimum requirement.
Age Limit: Typically, candidates must be within a certain age range, often between 21 to 32 years.
Physical Fitness: Some positions, especially in law enforcement or defense services, may have requirements related to physical fitness and medical standards.
                      </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                    <a href="https://upsc.gov.in/">CAPF</a>
                    <h4>Central Armed Police Force</h4>
                    <p>
                      Central Armed Police Force (CAPF) exams are conducted by the Union Public Service Commission (UPSC) in India to recruit Assistant Commandants in various paramilitary forces like BSF, CRPF, CISF, etc. The exams assess candidates' physical fitness, leadership qualities, and knowledge in subjects like General Studies, Essay, and Comprehension. Successful candidates are appointed as officers in these forces, responsible for maintaining national security and law enforcement duties.

Qualifications:
Nationality: The candidate must be a citizen of India, a subject of Nepal, or a subject of Bhutan. Tibetan refugees who came to India before January 1, 1962.
Age Limit: The age limit for appearing in the CAPF exam is generally between 20 to 25 years.
Bachelor's Degree: Candidates must have a Bachelor's degree from a recognized university or equivalent qualification.
                     </p>
                  </div>
                </div><!-- End testimonial item -->
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-6.jpg" class="testimonial-img" alt="">
                    <a href="https://ssc.nic.in/">CGL</a>
                    
                    <h4>Combined Graduate Level </h4>
                    <p>
                      The Combined Graduate Level (CGL) exam in India is conducted by the Staff Selection Commission (SSC) to recruit candidates for various Group B and Group C posts in ministries, departments, and organizations of the Government of India.The selection process includes multiple stages such as Tier I (preliminary), Tier II (main), Tier III (descriptive), and Tier IV (skill test/typing test).

Qualifications:
Educational Qualification: Candidates must have a Bachelor's Degree from a recognized university or institution. The degree can be in any discipline.
Age Limit: The age limit for different posts varies, but generally, candidates must be between 18 to 32 years old.
Nationality: Candidates must be Indian citizens.
                     </p>
                  </div>
                </div><!-- End testimonial item -->
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-7.jpg" class="testimonial-img" alt="">
                    <a href="https://upsc.gov.in/">NDA</a>
                  
                    <h4>National Defence Academy</h4>
                    <p>
                      The NDA (National Defence Academy) exam in India is conducted by the Union Public Service Commission (UPSC) twice a year to select candidates for admission into the Army, Navy, and Air Force wings of the NDA. Eligible candidates must be unmarried male Indian citizens who have completed or are in the process of completing their 10+2 education. The selection process includes a written exam followed by SSB (Services Selection Board) interviews and medical tests.

Qualifications:
Nationality: Candidates must be unmarried male Indian citizens, subjects of Nepal, Bhutan, or Tibetan refugees.
Age Limit: Candidates must be between 16.5 to 19.5 years old. There are specific age relaxations for candidates from certain categories as per government rules.
Educational Qualification: For Army Wing of NDA, candidates must have completed their 10+2 education.
                      </p>
                  </div>
                </div><!-- End testimonial item -->
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-8.jpg" class="testimonial-img" alt="">
                    
                    <a href="https://upsc.gov.in/">PSC</a>
                    <h4>Public Service Commission</h4>
                    <p>
                      Public Service Commission (PSC) exams, conducted in various countries, are competitive examinations aimed at recruiting candidates for civil service positions. These exams typically assess candidates' knowledge, aptitude, and suitability for administrative roles within government departments. Preparation often includes studying subjects like general knowledge, current affairs, and specific topics related to the civil service.

Qualifications:
Educational Qualification: Candidates typically need a minimum of a bachelor's degree from a recognized university or institution.
Age Limit: There is usually an age limit within which candidates must fall to be eligible to apply for PSC exams.
Nationality: Candidates must usually be citizens of the country where the exam is being conducted.
                      </p>
                  </div>
                </div><!-- End testimonial item -->
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-9.jpg" class="testimonial-img" alt="">
                    <a href="https://www.rrbcdg.gov.in/">RRB</a>
                    <h4>Railway Recruitment Board</h4>
                    <p>
                      The Railway Recruitment Board (RRB) exam in India is conducted to recruit candidates for various technical and non-technical positions in the Indian Railways. It includes stages such as computer-based tests (CBT), physical efficiency tests (PET), and document verification, depending on the position applied for. As one of the largest recruiting bodies in India, RRB exams attract a wide range of candidates aspiring to join the prestigious railway sector.

Qualifications:
Educational Qualification: Candidates must have completed their 10th (Matriculation), 12th (Intermediate), or possess a Bachelor’s degree from a recognized board or university.
Age Limit: The age limit varies depending on the category and level of the exam, typically ranging from 18 to 32 years.
Nationality: Candidates must be Indian citizens. Some exams may allow candidates from neighboring countries as per bilateral agreements.
                      </p>
                  </div>
                </div><!-- End testimonial item -->
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-10.jpg" class="testimonial-img" alt="">
                    
                    <a href="https://crpf.gov.in/">CRPF</a>
                    <h4>Central Reserve Police Force</h4>
                    <p>
                      The CRPF (Central Reserve Police Force) exam in India is conducted for recruitment into various positions within the CRPF, a premier paramilitary force. The exam assesses candidates' physical fitness, written aptitude, and medical standards, essential for roles ranging from constables to officers. Successful candidates undergo rigorous training before assuming duties crucial for national security and public safety.

                      Qualifications:
                      Educational Qualification: Candidates must have passed 10th, 12th, or possess a Bachelor’s degree from a recognized board or university, depending on the specific position applied for.
                      Age Limit: The age limit varies depending on the position, generally ranging from 18 to 25 years.
                      Physical Standards: Candidates must meet the prescribed physical standards set by the CRPF, which include height, chest measurement, and endurance tests.
                      </p>
                  </div>
                </div><!-- End testimonial item -->
                

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
     <!-- ======= Clients Section ======= -->
     <section id="clients" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Portals</h3>
          
        </div>

        <div class="row g-0 clients-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://bse.ap.gov.in/"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://bie.ap.gov.in/"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://cets.apsche.ap.gov.in/EAPCET/Eapcet/EAPCET_HomePage.aspx"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://ecet-sche.aptonline.in/ECET/Views/index.aspx"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://jeemain.nta.ac.in/"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://neet.ntaonline.in/frontend/web/revised-scorecard/index"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://cets.apsche.ap.gov.in/LAWCET/LAWCET/LAWCET_HomePage.aspx"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://cets.apsche.ap.gov.in/PGCET/PGCET/PGCET_HomePage.aspx"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://cets.apsche.ap.gov.in/APSCHE/APSCHEHome.aspx"><img src="assets/img/clients/client-9.png.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://apschelms.e-pragati.in/#/"><img src="assets/img/clients/client-10.png.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://apdsc.apcfss.in/"><img src="assets/img/clients/client-11.png.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <a href="https://upsc.gov.in/"><img src="assets/img/clients/client-12.png.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Clients Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Team</h3>
          <p>The Easy2Search team is dedicated to simplifying access to vital information and opportunities.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Likhita Beesetty</h4>
                  <span>Web Developer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>BLS Charan</h4>
                  <span>Web Developer,Backend Developer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Varshini</h4>
                  <span>Frontend developer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Manoj</h4>
                  <span>Data Analyst</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team-5.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Chandra Sekar</h4>
                  <span>Frontend Developer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

   

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 340px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="bi bi-geo-alt"></i>
                <p>Viit, Duvvada</p>
              </div>
              <div class="col-md-4 info">
                <i class="bi bi-envelope"></i>
                <p>blscharan2004@gmail.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="bi bi-phone"></i>
                <p>+91 8341950961</p>
              </div>
            </div>

            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Easy2Search</h3>
            <p>Easy2Search is a user-friendly platform designed to streamline access to essential information and opportunities. It provides direct links and detailed information on government schemes, jobs, internships, exams, and more. Whether you're looking for the latest government job openings, applying for internships, or seeking information on various exams and government schemes, Easy2Search has you covered. The website is designed to save time and effort by consolidating all relevant information in one place, ensuring users can easily find and utilize the resources they need to achieve their personal and professional goals.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#hero">Home</a></li>
              <li><a href="#about">govt Schemes</a></li>
              <li><a href="#services">govt Cards</a></li>
              <li><a href="#why-us">internships</a></li>
              <li><a href="#portfolio">govt Jobs</a></li>
              <li><a href="#testimonials">govt Exams</a></li>
              <li><a href="#clients">govt portals</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Vignan's IIT <br>
              Duvvada, Visakhapatnam<br>
              Andhra Pradesh, India<br>
              <strong>Phone:</strong> +91 8341950961<br>
              <strong>Email:</strong> blscharan2004@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>a newsletter is a regularly distributed publication, typically sent via email, that provides subscribers with updates, news, articles, and other relevant information related to the website's content or subject matter.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      
      <div class="credits">
        <!--
        
      -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>