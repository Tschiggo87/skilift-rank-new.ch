<!-- index.php -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">


  <title>Skilift Rank</title>
  <meta content="Willkommen auf meiner Website! Hier findest du alles über unseren Imbiss" name="description">
  <meta content="Imbiss, Restaurant, Beiz" name="keywords">


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">

        <!-- Uncomment the line below if you also wish to use an image logo -->
        <h1> SKILIFT <span>RANK</span> </h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#getraenkekarte">Getränkekarte</a></li>
          <li><a href="#speisekarte">Speisekarte</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#footer">Kontakt</a></li>
          <li><a href="login.html">Logg In</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down header-big">Herzlich<br>Wilkommen</h2>
            <p data-aos="fade-up"> Bianca Hässig und ihr Team Freuen sich auf deinen Besuch</p>

            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
             <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started geöffnet">Geöffnet</a>
             <?php else: ?>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started geschlossen">Geschlossen</a>
         <?php endif; ?>
        </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/Sihlsee_Fluebrig.jpg)">
      </div>
      <div class="carousel-item" style="background-image: url(assets/img/sitzplatz.png)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/Sihlsee_Fluebrig.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/Sihlsee_Fluebrig.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/Sihlsee_Fluebrig.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero Section -->

  <div class="section-header">
    <img data-aos="fade-up" class="hero-logo" src="assets/img/skilft-rank_logo.png" alt="skilift rank logo">

  </div>

  <main id="main">



    <!-- ======= Getränkekarte Section ======= -->
    <section id="getraenkekarte" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Getränkekarte</h2>
          <p> </p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-sharp fa-solid fa-glass-water"></i>
              </div>
              <h3>Offenausschrank</h3>
              <p>
                Mineral mit Mineral ohne Kohlensäure<br>
                Coca-Cola<br>
                Coca- Cola Zero<br>
                Rivella Rot<br>
                Elmer Citro<br>
                Ice Tea<br>
                Süssmost<br>
                Schorle<br></p>
              <br>
              <p class="readmore stretched-link"> 3dl / Fr. 4.- </p><br>
              <p class="readmore stretched-link"> 5dl / Fr. 5.- </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-beer-mug-empty"></i>
              </div>
              <h3>Bier </h3>
              <p>Feldschlösschen Lager<br>
              <p class="readmore stretched-link">Fr. 5.- </p>
              <p>Feldschlösschen Spezli<br>
              <p class="readmore stretched-link">Fr. 4.50 </p>
              <p>Einsiedler Radler<br>
              <p class="readmore stretched-link">Fr. 4.50 </p>
              <p>Feldschlösschen Alkoholfrei<br>
              <p class="readmore stretched-link">Fr. 5.- </p>
              <p>Schützengarten Grapefruit Alkoholfrei<br>
              <p class="readmore stretched-link">Fr. 5.- </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-wine-glass"></i>
              </div>
              <h3>Wein </h3>
              <p> Weiss <br> Johannisberg du Valais, 7,5dl<br>
              <p class="readmore stretched-link">Fr. 35.- </p>
              <p> Weiss <br> Epesses, 5dl <br>
              <p class="readmore stretched-link">Fr. 20.- </p>
              <p> Rot <br>Don Aurelio, 7,5 dl<br>
              <p class="readmore stretched-link">Fr. 30.- </p>
              <p> Rot <br> Valpolicella Ripasso. 5 dl<br>
              <p class="readmore stretched-link">Fr. 25.- </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-martini-glass-empty"></i>
              </div>
              <h3>Drinks </h3>
              <p> Gespritzter Weisswein <br> süss/sauer<br>
              <p class="readmore stretched-link">Fr. 9.- </p>
              <p> Aperol Spritz <br>
              <p class="readmore stretched-link">Fr. 9.- </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-wine-bottle"></i>
              </div>
              <h3>Suurä Most</h3>
              <p>Mit oder ohne Alkolhol</p>
              <p class="readmore stretched-link">Fr. 5.- </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mug-saucer"></i>
              </div>
              <h3>Kaffee & Tee</h3>
              <p>Kaffee<br>
                Espresso<br>
                Tee in verschiedene Sorten</p>
              <p class="readmore stretched-link">Fr. 4.- </p><br>


            </div>
          </div><!-- End Service Item -->



          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <img class="icon" src="assets/img/icons/Kaffee-luz.png" alt="Kaffee Luz">
              </div>
              <h3>Kaffe Luz</h3>
              <p>Kaffee und Tee
              <p class="readmore stretched-link">Fr. 4.- </p><br>
              <p> Luz <br> Schnaps, Chrüter, Zwetschgen, Kirsch, Wiliams, Pflümli<br>
              <p class="readmore stretched-link">Fr. 5.- </p>


            </div>
          </div><!-- End Service Item -->
        </div>

      </div>
    </section><!-- End Getränkekarte Section -->


    <!-- ======= Speisekarte Section ======= -->
    <section id="speisekarte" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Speisekarte</h2>
          <p> </p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <img class="icon" src="assets/img/icons/schnitzelbrot.png">
                <!-- <i class="fa-solid fa-burger"></i> -->
              </div>
              <h3>Schnitzelbrot</h3>
              <p>Poulet Schnitzel mit Cocktail,Curry oder Tartar Sauce</p>
              <p class="readmore stretched-link">Fr. 10.- </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-fish"></i>
              </div>
              <h3>Fisch Chnusperli</h3>
              <p>Pangasiusfilet im Teig mit Tartar Sauce</p>
              <p class="readmore stretched-link">Fr. 18.- </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-bread-slice"></i>
              </div>
              <h3>Schinken Käse Toast</h3>
              <p>Schwein</p>
              <p class="readmore stretched-link">Fr. 6.- </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <img class="icon" src="assets/img/icons/pommes-frites.png">
                <!-- <i class="fa-solid fa-burger"></i> -->
              </div>
              <h3>Pommes Frites</h3>
              <p> Mit Ketchup und Mayonnaise</p>
              <p class="readmore stretched-link">Fr. 9.- </p>
            </div>
          </div><!-- End Service Item -->



          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <img class="icon" src="assets/img/icons/bratwurst.png">
                <!-- <i class="fa-solid fa-burger"></i> -->
              </div>
              <h3>Bratwurst</h3>
              <p>Kalbs oder Schein, vom Grill mit Brot</p>
              <p class="readmore stretched-link">Fr. 6.-</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <img class="icon" src="assets/img/icons/servelat.png">
                <!-- <i class="fa-solid fa-burger"></i> -->
              </div>
              <h3>Servalat</h3>
              <p>vom Grill mit Brot</p>
              <p class="readmore stretched-link">Fr. 6.-</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <img class="icon" src="assets/img/icons/nussgipfel.png">
                <!-- <i class="fa-solid fa-burger"></i> -->
              </div>
              <h3>Hefe Nussgipfel</h3>
              <p></p>
              <p class="readmore stretched-link">Fr. 3.-</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <img class="icon" src="assets/img/icons/tischwaren.png">
                <!-- <i class="fa-solid fa-burger"></i> -->
              </div>
              <h3>Tischwaren</h3>
              <p>Chips, </p>
              <p class="readmore stretched-link">Fr. 3.-</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-ice-cream"></i>
              </div>
              <h3>Glace</h3>
              <p>Diverese Sorten </p>
              <p class="readmore stretched-link">Fr. 3.-</p>
            </div>
          </div><!-- End Service Item -->


        </div>

      </div>
    </section><!-- End Speisekarte Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Events</h2>
          <p>Verpasse nichts mehr, hier siehst du alle Events</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/Sihlsee_Fluebrig.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Saisoneröffnung.</h4>
                    <p>Saisoneröffnung vom Freitag & Samstag, 3. & 4. Juni 2023</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->



        </div>
      </div>
    </section><!-- End Event Section -->

    <!-- ======= Our Instagram Section ======= -->
    <!-- <section id="instagram" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Instagram</h2>
          <p>Verpasse nichts mehr, hier siehst du alle Events</p>
          <div class="instagram-container">
          </div>
        </div>
      </div> -->
    </section><!-- End Our Instagram Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container footer-container">

        <div>
          <!-- <img class="footer-logo" src="assets/img/skilft-rank_logo.png" alt="skilift rank logo"> -->
          <h3 class="h3-footer">Skilift <span class="hero-highlight">Rank</span></h3>

          </div>

          <p>
            Bianca Hässig <br>Gleitschirmlandeplatz <br> Euthalerstrasse<br>8844 Euthal<br>
            <strong>Telefon:</strong> +41 79 472 12 77<br>
            <strong>Email:</strong> info@skilift-rank.ch<br>
          </p>
          
          <div class="footer-links">
            <h4>FOLGE UNS</h4>
            <div class="social-links">
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
            </div>
        </div>



      </div>
      <div class="container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2716.3737240250493!2d8.81792567718808!3d47.09174377114713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47854ac72a952beb%3A0xd5da97961ba2fcf4!2sSkilift%20Euthal%2C%20Sommer%20Imbiss%20bei%20sch%C3%B6nem%20Wetter%20ge%C3%B6ffnet!5e0!3m2!1sde!2sch!4v1682850889754!5m2!1sde!2sch"
          frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen>
        </iframe>
      </div>


      <div class="footer-legal text-center position-relative">
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong>Skilift <span class="hero-highlight">Rank</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script async defer src="//www.instagram.com/embed.js"></script>
  <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>