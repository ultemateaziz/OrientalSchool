<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Oriental School</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.5.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Oriental School</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.html#school">School</a></li>
          <li><a class="nav-link scrollto" href="index.html#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto active" href="index.html#alumuni">Alumini</a></li>
          <li><a class="nav-link scrollto " href="corespondentdesk.html">Corespondent Desk</a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>alumini deatils</li>
        </ol>
        <h2>alumini details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container-fluid">
      <?php
$conn = mysqli_connect("localhost", "osakkur_oriental", "hggvO6Pc", "osakkur_oriental");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT first_name, last_name,email,phone_number,address,studied_year  FROM alumini";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
  echo "<table class='table'>
  <thead class='thead-dark'>

<tr>

<th scop='col'>First Name</th>

<th scop='col'>Last Name</th>

<th scop='col'>Email</th>

<th scop='col'>Phone</th>

<th scop='col'>Address</th>

<th scop='col'>Studied Year</th>

</tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";

    echo "<td scope='row'>" . $row['first_name'] . "</td>";

    echo "<td scope='row'>" . $row['last_name'] . "</td>";

    echo "<td scope='row'>" . $row['email'] . "</td>";

    echo "<td scope='row'>" . $row['phone_number'] . "</td>";

    echo "<td scope='row'>" . $row['address'] . "</td>";

    echo "<td scope='row'>" . $row['studied_year'] . "</td>";

    echo "</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>


      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Oriental Arabic Higher Secondary School </h3>
            <p>
              Thiruvalluvar vethi, <br />Rabindranath Tagore St,<br /> Udayayarkoil Pathy, Akkur<br /> Tamil Nadu
              6093012<br /><br />
              <strong>Phone:</strong> 04364 – 280705<br>
              <strong>Email:</strong> info@orientalschoolakkur.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#School">School</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#gallery">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
            <ul>
              
          </div>

          <div class="col-lg-4 col-md-6 social-links">
            <h4>Join Our Whatsapp Group</h4>
            <p>Please Click on the link</p>
            <a href="https://wa/me/9443013196" class="twitter"><i class="fas fa-comment"></i></a>
          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Protech</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
          Designed by <a href="">MD Aziz</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>