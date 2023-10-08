<?php
require 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GCC Centre</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


<!-- for myanmar font -->

  <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3' />
  <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=zawgyi' />
  <style type="text/css">
    .zawgyi{
      font-family:Zawgyi-One;
    }
    .unicode{
      font-family:Myanmar3,Yunghkio,'Masterpiece Uni Sans';
    }
  </style>




</head>

<body>


<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1 class="text-light"><a href="index.php"><span>GCC Centre</span></a></h1>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar px-5">
      <ul>
        <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
        <li><a class="nav-link scrollto" href="about.html">About Us</a></li>
        <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="assisted_living.html">ASSISTED LIVING</a></li>
            <li><a href="memory_care.html">MEMORY CARE</a></li>
            <li><a href="skilled_nursing.html">SKILLED NURSING</a></li>
            <li><a href="rehabilitation.html">REHABILITATION & RECOVERY</a></li>
            <li><a href="respite_care.html">RESPITE CARE</a></li>
          </ul>
        </li>

        <li><a class="nav-link scrollto" href="contact.html">Contact</a></li>
        <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
                <li><a href="admin_login.php">Admin</a></li>
                <li><a href="doctor_login.php">Doctor</a></li>
                <li><a href="nurse_login.php">Nurse</a></li>

         </ul>
        </li>


      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="h-25">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>GCC Centre</span></h2>
                <p class="animate__animated animate__fadeInUp">As much as getting old is inevitable, it can be a satisfying and meaningful experience.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">RENEWING THE MIND</h2>
                <p class="animate__animated animate__fadeInUp">Bring back your inner peace, there is always a way. We are here to help you.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">WE TAKE CARE BECAUSE WE CARE</h2>
                <p class="animate__animated animate__fadeInUp">Excellent health service for all seniors who come to our GCC Centre.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->



  <main id="main">


    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services">
      <div class="container" style="cursor:pointer;">
        <div class="section-title">
          <h2>Our Services</h2>
          <h6 class="lh-lg"><b>ကျွန်တော်တို့ GCC Centre မှ အဖိုးအဖွား မိဘပြည်သူများအတွက် ပြီးပြည့်စုံသော ကျန်းမာရေးဝန်ဆောင်မှုများကို စိတ်ကျေနပ်မှုအပြည့်အဝရရှိစေရန် အစဉ်အမြဲဝန်ဆောင်မှုပေးလျက်ရှိပါသည်။</b></h6>
        </div>



        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" id="your-div" onclick="location.href='assisted_living.html';">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="assisted_living.html">ASSISTED LIVING</a></h4>
              <p class="description">Assisted living provides a touch of help for those who need it, with
                  a distinct combination of individualized care, familiar neighborhood surroundings and professional expertise.</p>
            </div>
          </div>
          </a>



          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" onclick="location.href='memory_care.html';">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="memory_care.html">MEMORY CARE</a></h4>
              <p class="description">Memory care is a form of residential long-term care that provides intensive,
                  specialized care for people with memory issues. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" onclick="location.href='skilled_nursing.html';">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="skilled_nursing.html">SKILLED NURSING</a></h4>
              <p class="description">Skilled nursing is for those who need greater care while recovering
                  from a hospital stay, or who need long-term care.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" onclick="location.href='rehabilitation.html';">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="rehabilitation.html">REHABILITATION & RECOVERY</a></h4>
              <p class="description">Rehabilitation is a set of interventions created to assist a person’s
                  recovery from an injury, physical or mental illness, or substance abuse.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex  align-items-center justify-content-center mt-3" onclick="location.href='respite_care.html';">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="respite_care.html">RESPITE CARE</a></h4>
              <p class="description">Respite care is professional care for a loved one that allows
                  caregivers a temporary break from their responsibilities. </p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Our Services Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">
        <div class="section-title mb-4">
          <h2>Why choose us?</h2>
          <h5 class="mb-3">We believe in building relationships with our clients, not just services.</h5>

          <p class="lh-lg">We take pride in providing an alternative to nursing home and hospital facilities and aim
            to make sure we are administering the best home care in the area. Kindness and consideration of
            daily needs is our foremost goal and we treat your loved ones like family.</p>

          <p class="lh-lg">No matter what your level of care is, our home care can be customized for your specific needs.
            We have a professional staff who can help determine what the best actions to take to help you and/or your loved one are.</p>
        </div>

        <div class="row no-gutters justify-content-center">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>

              <?php
                           $senior_query_run = mysqli_query($db,"SELECT * FROM senior");

                           $senior_total = mysqli_num_rows($senior_query_run );

                           if(!$senior_total){

                           echo "<span>No data</span>";
                            }

              ?>

              <span data-purecounter-start="0" data-purecounter-end=" <?php echo $senior_total;  ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p class="fs-4"><strong>Happy Senior</strong></p>

            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-capsule"></i>

                <?php
                $doctor_query_run = mysqli_query($db,"SELECT * FROM doctor");

                $doctor_total = mysqli_num_rows($doctor_query_run );

                if(!$doctor_total){

                    echo "<span>No data</span>";
                }

                ?>


              <span data-purecounter-start="0" data-purecounter-end="<?php  echo $doctor_total;   ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p class="fs-4"><strong>Doctors</strong></p>

            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-file-medical"></i>

                <?php
                $nurse_query_run = mysqli_query($db,"SELECT * FROM nurse");

                $nurse_total = mysqli_num_rows($nurse_query_run);

                if(!$nurse_total){

                    echo "<span>No data</span>";
                }

                ?>




              <span data-purecounter-start="0" data-purecounter-end="<?php echo  $nurse_total;  ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p class="fs-4"><strong>Nurses</strong></p>

            </div>
          </div>


          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= More Services Section ======= -->
    <section class="more-services">
      <div class="container">
        <div class="section-title">
          <h2>Type of Rooms</h2>
          <p>We offer private and semi-private rooms, designed to keep your loved ones comfortable and happy and offer them an excellent quality of life.</p>
        </div>
        <div class="row w-100">
          <div class="col-sm-6">
            <div class="card section-bg">
              <img src="assets/img/semi_private_room.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="">Semi Private Room</a></h5>

              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card section-bg">
              <img src="assets/img/private_room.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="">Private Room</a></h5>

              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End More Services Section -->

    <!-- ======= Charges Section ======= -->
    <section class="charges section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Check our Pricing</h2>
          <p>Facilities offer different options and features, and these differences can drastically change the cost of the nursing home.</p>
        </div>
        <div class="row w-100">
          <div class="col-sm-12">



                <table class="table table-striped table-bordered">
                  <thead>
                  <tr class="text-center">
                    <th scope="col">Type of accommodation</th>
                    <th scope="col">Daily cost</th>
                    <th scope="col">Monthly cost</th>
                    <th scope="col">Annual cost</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr class="text-center">
                    <td>Semi-private room</td>
                    <td>50000 Kyats</td>
                    <td>1,500,000 Kyats</td>
                    <td>18,250,000 Kyats</td>
                  </tr>
                  <tr class="text-center">
                    <td>Private room</td>
                    <td>80000 Kyats</td>
                    <td>2,400,000 Kyats</td>
                    <td>29,200,000 Kyats</td>
                  </tr>

                  </tbody>
                </table>


          </div>


        </div>

      </div>

    </section><!-- End More Services Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-faq-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Who cares for me in a nursing home?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                    A variety of professionals care for nursing home residents: registered and licensed practical nurses; physical, speech and occupational therapists, and social workers. Certified nursing assistants (CNAs)
                    handle much of the day-to-day patient care such as helping with bathing, getting in and out of bed, and delivering medications.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">When is a nursing home stay needed and for how long? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">

                    <p>- Short-term stay (up to 100 days): This is usually for physical, occupational, or speech therapy following an in-patient hospital stay (like for a hip replacement or small stroke)
                        or after an outpatient procedure.</p>
                    <p>- Long-term stay (100 days and beyond): For disabled, chronically ill, and older individuals who do not require
                        hospital-level care but need more support than is possible in their own homes.</p>

              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">When it is time to consider a nursing home for your parents? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">

                    <p>- Both medical and personal care needs have become too great to handle at home or in another senior living community.
                        This may be due to a recent hospitalization, or a chronic illness which has gradually been worsening.</p>
                    <p>-Your parent needs a higher level of care temporarily after a hospitalization, but it's anticipated you will be able
                        to return to home or another facility after a period of time.</p>

              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">What happens if an elder has an emergency? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                    Staff and trained personal are available 24 hours a day to handle emergency situations. Skilled nursing
                    facilities have arrangements with local hospitals and health care professionals for assistance with emergencies.
                </p>
              </div>
            </li>


          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>GCC Centre</h3>
            <p>
              No. (--), (--) Street, (--) Quarter,<br>
                (--) Township, Yangon<br><br>
              <strong>Phone:</strong> 01-000000, 09-000000000 <br>
              <strong>Email:</strong> gcc@example.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact</a></li>

                </ul>
            </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="assisted_living.html">Assisted Living</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="memory_care.html">Memory Care</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="skilled_nursing.html">Skilled Nursing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="rehabilitation.html">Rehabilitation & Recovery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="respite_care.html">Respite Care</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>GCC Centre</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Developed by Min Thein Tun</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>