<?php
if (isset($_POST["submit"])) {
 $data = '{
      "FromEmail":"godfreyekaji@gmail.com",
      "FromName":"Your Mailjet Pilot",
      "Recipients":[
        {
          "Email":"lindaiweka@gmail.com",
          "Name":"Passenger 1"
        }
      ],
      "Subject":"Your email flight plan!",
      "Text-part":"Dear passenger, welcome to Mailjet! May the delivery force be with you!",
      "Html-part":"<h3>Dear passenger, welcome to Mailjet!</h3><br />May the delivery force be with you!<table><tr><th>Fullname</th><td>'.$_POST["fullname"].'</td> </tr><tr> <th>Email</th> <td>'.$_POST["email"].'</td> </tr> <tr><th>Phone number</th><td>'.$_POST["phone"].'</td> </tr></table>"
 }';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.mailjet.com/v3/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic Nzg0OGI2N2UxMjc5ZjgwZTViZGI3YTBmZjQ2YjE3ZWM6ODQ0Y2Y4MTc5YjJiN2M4NDU1MjkzNDUyZTZiYWYzYTA=',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PRETORIAH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/6.0.4/esm/ionicons.min.js" integrity="sha512-J4LkJr/AeK/KXjqkfb/65C4jzT4gG7BDqH9OtiOzCmULhWdKGppS3dCCzo0bmFULnZkajr4esopJYYLOLzuznw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/6.0.4/collection/components/icon/icon.min.css" integrity="sha512-DR9Jj0uFIfe7v1QLrvPRusRxqdSnVSVRyRBt1H8gcRQgxMKEwsOMSNYs0hyIpo8AITFyCMDC2Q1fCg1XcgdYig==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css"/>
  <style>
    .text-class-nav >li{
     color: white;
    }
    .logo a{
      color:red !important;
    }
 
    @media only screen and (max-width: 600px) {
      .sm-ml-4{
        margin-left: 24px;
      }
 
}

@media only screen and(min-width:768px){
  #hero{
    padding-top:80px;
  }
}




  </style>

</head>

<body>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="ion-ios-close"></span>
        </button>
      </div>
      <div class="modal-body p-4 py-5 p-md-5">
        <h3 class="text-center mb-3">Join Now For Free</h3>
        <form action="" class="signup-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="form-group mb-2">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" placeholder="Enter Full Name"
            name="fullname">
          </div>
          <div class="form-group mb-2">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" placeholder="Enter Email"
            name="email"/>
          </div>
          <div class="form-group mb-2">
            <label for="password">PhoneNumber</label>
            <input type="text" class="form-control" placeholder="Enter Phone Number">
          </div>
          <div class="form-group mb-2">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3">JOIN NOW</button>
          </div>
          <div class="form-group d-md-flex">
            <div class="w-100 text-center">
              <!-- <a href="#" class="forgot">I'm already a member</a> -->
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo" style="color: red;"><a href="index.html"><img src="1.png"></a></div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about"
            data-toggle="modal" data-target="#exampleModalCenter">JOIN VIP TRADING NOW</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center features">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Start Trading Like A VIP</h1>
          <ul class="text-class-nav">
            <li><i class="bi bi-check"></i>BEGINNERS TO <span class="sm-ml-4">ADVANCED</span> COURSES</li>
            <li><i class="bi bi-check"></i>FREE WEBINARS</li>
            <li><i class="bi bi-check"></i>FREE DAILY SIGNALS</li>
            <li><i class="bi bi-check"></i>EXCLUSIVE CUSTOMER <span class="sm-ml-4">SUPPORT</span></li>
            <li><i class="bi bi-check"></i>PERSONAL EDUCATION</li>
            <!-- <li><i class="bi bi-check"></i>1-ON-1 TRAINING <span class="session">SESSIONS</span></li> -->
          </ul>
           <h2>Get the Ultimate Package and trade like a VIP</h2>
          <div><a 
            href="#" class="btn-get-started scrollto"
            data-toggle="modal" data-target="#exampleModalCenter"
            >JOIN US NOW</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img">
          <!-- <img src="assets/img/home-img.png" class="img-fluid animated" alt=""> -->
        </div>
      </div>
    </div>

  </section>



  


    
    
    


  <!-- </main>End #main -->

  <!-- ======= Footer ======= -->
   <footer id="footer">
 <div class="footer-top">
      <div class="container">
        <div class="row">

          <!-- <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Techie</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div> -->

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe"> -->
             </form>
          </div>

        </div>
      </div>
    </div> 

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span></span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by <a href="#">Gemcode</a>
          </div>
        </div>
        <!-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div> -->
      </div>

    </div> 
  </footer>

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div> -->


<!----> 
<!-- <button type="button" class="btn btn-dark" 
data-bs-toggle="modal" data-bs-target="#ModalForm">
  Launch Modal Form
</button> -->






  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
  </script>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
