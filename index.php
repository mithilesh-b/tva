<?php

include 'dbconnection.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tech-Verse Academy - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>

<style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
    }
    </style>


  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Tech-Verse Academy</a></h1>
            <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Our Courses</a></li>
          
          <li><a class="nav-link   scrollto" href="portfolio-details.php" >Our Achievements</a></li>
          
          <!-- <li><a class="nav-link scrollto" href="team.php">Faculties</a></li> -->


 

          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="form.php">Sign-Up</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav>
    </div>
   
<img src="assets/img/amrit.jpg" alt="Your Image" class="corner-image">

  </header>

  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>An Institute of Engineering Excellence</h1>
          <h2>A Govt. registered Coaching Institute</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="assets/img/video.mp4" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>

  <main id="main">

 

    <section id="about" class="about">

      <div class="container" data-aos="fade-up">

        <div class="section-title">

                <!-- photo slide show -->
                <div class="container">
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>
          
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
          
                <div class="item active">
                  <img src="assets/img/picnic.jpg" alt="Chania" width="460" height="345">
                 
                </div>
          
                <div class="item">
                  <img src="assets/img/class1.jpg" alt="Chania" width="460" height="345">
                  
                </div>
              
                <div class="item">
                  <img src="assets/img/class2.jpg" alt="Flower" width="460" height="345">
                  
                </div>
          
                <div class="item">
                  <img src="assets/img/class3.jpg" alt="Flower" width="460" height="345">
                  
                    
                </div>
            
              </div>
          
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          
        

          <h2>Notifications:</h2>
        </div>
       
        <a href="assets/img/admission-notice-TVA.pdf" target="_blank"><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
          <img src="assets/img/new-gif.gif" width="50" height="50">Admission & classes Notification regarding session 2023-2024 <br> </a>
          <a href=""></marquee></a>
          <a href="assets/img/FoundationCourse.png" target="_blank"><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
            <img src="assets/img/new-gif.gif" width="50" height="50">Foundation Course Notification regarding session 2023-2024 <br> </a>
            <a href=""></marquee></a>
            <a href="assets/img/DEEET.png" target="_blank"><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
              <img src="assets/img/new-gif.gif" width="50" height="50">DEEET classes Notification regarding session 2023-2024 <br> </a>
              <a href=""></marquee></a>
              <a href="assets/img/semester2nd4th.jpg" target="_blank"><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
              <img src="assets/img/new-gif.gif" width="50" height="50">2nd & 4th semester classes (Tripura Engineering colleges) notification regarding session 2023-2024<br> </a>
              <a href=""></marquee></a>


        <br>
        <br>
        <br>
        </div>

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            Tech-Verse Academy is a Govt. Registered leading Engineering Coaching institute of Tripura for the students of Diploma & B-Tech Engineering.
            </p>
            <ul>
              
              
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
              •  Financial relaxation for poor & meritorious student specially for economically weaker students (EWS) <br>
              •  Subject wise printed study materials <br>
              •  Proper strategy to crack different exams <br>
              •  Special Mock test & Remedial classes <br>
              •  Minimum Fee
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section>
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Why Choose us?</h3>
              <p>
                
              
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Faculties qualifications? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      All faculties are from NITs & TIT <br> B-Tech, M-Tech, B.Sc & M-Sc faculties are available.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> How many faculties? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Particular subject wise faculties available.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Class room & infrastructure? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      We have well established class room with all technological facilities at the heart of the city.
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
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>A Govt. registered Coaching institute</h3>

            <h2>MSME Udyam Registration</h2>
            <h4>Regd No:TR-08-0005118</h4>
            <p class="fst-italic">
              An Udyam Registration, also known as an MSME Registration, comprises of a government sign-off provided along with a Recognition Certificate and a Unique Number. This is instrumental if you wish to certify that your small or medium business or enterprises is legal and operational.
            </p>
            <h4>Here are the benefits of MSME Udyam registration in India:</h4>
            <p>• Get Collateral Free Loans. <br>
              • 50% Subsidy on Patent Registration. <br> 
              • Exemption on Overdraft Interest Fee. <br>
              • Industrial Promotion Subsidy Eligibility. <br> 
              • Protection Against Delayed Payments. <br>
              • Subsidy on Electricity Bills. <br>
              • Free ISO Certification. <br>
              • Extended Tax Benefits.</p>

              <h2>Agartala Minicipal Corporation Trade Lisence Registration</h2>
              <h4>Lisence No: 4/22/945</h4>
              <h4></h4>
              <p>A trade license is a document/certificate that permits the applicant (person seeking to open a business) to commence a particular trade or business in a particular area/location. However, the license does not allow the holder to any other trade or business than it is issued. It ensured that the business or trade is carried by adhering to all the standards of safety as issued by State Municipal Corporation . It protects the residents from being affected by any health hazards.</p>
              

          </div>
        </div>

      </div>
    </section>
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Courses!</h2>
          <p>Your Goal, Our Responsibility</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="inner-page.php">All India Entrance Examinations </a></h4>
              <p>NEET, JEE(Mains), WBJEE, CUET</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="inner-page.php">Tripura Entrance Examinations </a></h4>
              <p>TBJEE,TITLEE, TCEALET, DEEET <br>
                NERIST (Arunachal Pradesh), JELET (WBJEEB) 
              
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="inner-page.php">Boards & Engineering classes </a></h4>
              <p>Diploma & Degree Engineering all branches
                CBSE & TBSE Boards</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="inner-page.php">Special Classes </a></h4>
              <p>Auto-CAD (2D & 3D), Creo-CAD, C,C++ Programming, OOPs, MATLAB</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Enroll Our various courses</h3>
            <p></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="inner-page.php" >Enroll Now</a>
          </div>
        </div>

      </div>
    </section>




    <!-- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Books & Study Materials</h2>
          
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>MRP ₹</sup>100<span> </span></h4>
              <ul>
                <img src="assets/img/DEEET.png" alt="Trulli" width="300" height="300">
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>MRP ₹</sup>100<span> </span></h4>
              <ul>
              <img src="assets/img/DEEET.png" alt="Trulli" width="300" height="300">
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>MRP ₹</sup>100<span> </span></h4>
              <ul>
              <img src="assets/img/DEEET.png" alt="Trulli" width="300" height="300">
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section>


 -->







    <section class="testimonials">
      
      <h1>What Our Students say!</h1>
      <div class="show">

      <p><a href="portfolio-details.php" class="btn-show">Show</a</p>
      </div>
      </section>
    

      
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Nagerjala, Agartala - 799003
                  Tripura (West) 
                  <br>
                  India</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
               
                <p><a href="mailto:techverseacademy@gmail.com">techverseacademy@gmail.com</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
               <p><a href="tel:+91 6009625817">+91 6009625817</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.8383506549435!2d91.26857791498276!3d23.82434658455309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753f5de4cb17a51%3A0x3bdbe15750179821!2sTech-Verse%20Academy!5e0!3m2!1sen!2sin!4v1673237858310!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
<br> <br>

            <div>
            
<style>        
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
button[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 40px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}    
    
button[type=submit]:hover {    
  background-color: #0325338c;    
}    
    
.container {    
  border-radius: 5px;    
     
  padding: 20px;    
}    
    
.col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}    
    
   
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}    
    

</style>    
   
<h2>FEED BACK FORM</h2>    
<div class="container">    
  <form action="server.php?opcode=1"  method="post">    
    <div class="row">    
      <div class="col-25">    
        <label for="name">Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="name" name="name" placeholder="Your name..">    
      </div>    
    </div>    
    
    <div class="row">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="email" placeholder="Your mail id..">    
        </div>    
      </div>    
    
    <div class="row">    
      <div class="col-25">    
        <label for="message">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row">   
    <button type="submit"  name="submit">submit</button> 
      
    </div>    
  </form>    
</div>    

          </div>
        
        </div>

      </div>
    </section>

  </main>
  <footer id="footer">



    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Tech-Verse Academy</h3>
            <p>
            Nagerjala, Agartala - 799003
                  Tripura (West) 
                  <br>
                  India</p><br><br>
              <strong>Phone:</strong><a href="tel:+91 6009625817">+91 6009625817</a><br>
              <strong>Email:</strong> <a href="mailto:techverseacademy@gmail.com"> techverseacademy@gmail.com </a><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="index.php #about">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="index.php #services">Coursess</a></li>
            
            </ul>
          </div>

         

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Follow us on Social media</p>
            <div class="social-links mt-3">
              
              <a href="https://www.facebook.com/techverse.academy/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://instagram.com/tech_verse_academy?igshid=YmMyMTA2M2Y=" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/in/tech-verse-academy-386862262/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              <a href="https://twitter.com/techversacademy" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
             
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>techverseacademy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
                Designed by <a href="https://www.linkedin.com/in/mithilesh-bhattacharjee-bbb354231" target="_blank">Mithilesh Bhattacharjee (NIT Agartala)</a>

        
      </div>
    </div>
  </footer>
  
  
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  
  <script src="assets/js/main.js"></script>

</body>

</html>



















