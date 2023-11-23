
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Achievements - Tech-Verse Academy</title>
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

  
</head>

<body>

  
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Tech-Verse Academy</a></h1>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php #about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php #services">Our Courses</a></li>
          
          <!-- <li><a class="nav-link scrollto" href="index.php #team">Faculties</a></li> -->



          </li>
          <li><a class="nav-link scrollto" href="index.php #contact">Contact</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <main id="main">

    
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          
        </ol>
        <h2>Our Achievements</h2>

      </div>
    </section>

    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Top Rank holders from TVA</h3>
              <ul>
                <li><strong>Examination</strong>: TITLEE, DEEET</li>
                <li><strong>Examination type</strong>: All Tripura Entrance Examination</li>
                <li><strong>Year</strong>: 2022-23</li>
                
                <li><strong>Faculties & Students Review</strong>: <a href="index.php #team">show</a></li>
                
                
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>TITLEE</h2>
              <p>
                TITLEE ( Tripura Institute Of Technology Lateral Entrance Examination ) is a lateral Entrance Examination Test for all diploma engineering students for taking admission in B-Tech courses conducted by Tripura institute of Technology ( Govt. Of Tripura ).  TVA have  huge achievements in previous TITLEE exams. Our institute have maximum top rank holders of TITLEE exam. Even, TVA have Top ranking TITLEE faculties. So, join with us for upcoming TITLEE exams.......... Hurry Up!
              </p>
              <h2>DEEET</h2>
              <p>
                DEEET ( Diploma Engineering Entrance Examination Test ) is an entrance test conducted by CSC ( Central Selection Committee, Govt. Of Tripura ) for taking admission in different diploma engineering colleges of Tripura like, TIT, GDP, TTAADC, NTDP, DDP, WP etc. We have best achievements in previous DEEET exams. So, what are you waiting for ? Join with us immediately for securing best rank in upcoming DEEET exams.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>






<?php
include "dbconnection.php";

  $sql = "select * from feedback";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);


if($resultcheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    // echo $row['name'] . "<br>";
?>



    <div class="testimonial-col">
        <img src="assets/img/none.jpg">
        <div>
            <p>
            <?php echo $row['message'] ?>
            </p>
            <h3> <?php echo $row['name'] ?></h3>
            
        </div>
    </div>
  <?php }
}


?>





</section>
  


  </main>

<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Tech-Verse Academy</h3>
          <p>
            Nagerjala, Agartala
            <br>799003 West Tripura <br>
            India<br><br>
            <strong>Phone:</strong><a href="tel:+91 6009625817"> +91 6009625817</a><br>
            <strong>Email:</strong><a href="mailto:techverseacademy@gmail.com"> techverseacademy@gmail.com </a><br>
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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>