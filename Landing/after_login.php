<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Project</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.0.0/js/all.js"></script>
    <!-- BootStrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <section class="colored-section" id="title">
      <div class="container-fluid">
        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="">My Project</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#achievements">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#cta">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><?php
                session_start();
                echo "Welcome ".$_SESSION['user_name'];
                ?>
                </a>
              </li>
              <li class="nav-item">
                <h5><a class="nav-link" href="index.html">Logout</a> </h5>
              </li>


              </ul>
          </div>
        </nav>
        <!-- Title -->
        <div class="row">
          <div class="col-lg-6">
            <h1 class="big-heading">Education is for improving the lives of others.</h1><br><br>
            <button type="button" class="btn btn-dark btn-lg know-more-button">
              Contact Me</button>
            <button type="button" class="btn btn-outline-light btn-lg know-more-button">
              Download CV</button>
          </div>
          <div class="col-lg-6">
            <img class="title-img" src="images/bkm.png" alt="B K mishra">
          </div>
        </div>
      </div>
    </section>
    <!-- Features -->
    <section class="white-section" id="features">
      <div class="container-fluid">
        <div class="row">
          <div class="feature-box col-lg-4">
            <i class="icon fa-solid fa-circle-check fa-4x"></i>
            <h3 class="feature-title">Reachable</h3>
            <p>Reachable and easy to learn things.</p>
          </div>
          <div class="feature-box col-lg-4">
            <i class="icon fa-solid fa-bullseye fa-4x"></i>
            <h3 class="feature-title">Focused</h3>
            <p>Be focused on Goal and achieve it surely.</p>
          </div>
          <div class="feature-box col-lg-4">
            <i class="icon fa-solid fa-heart fa-4x"></i>
            <h3 class="feature-title">Friendly</h3>
            <p>Find the love of your dog's life or your money back.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials -->
    <section class="colored-section" id="testimonials">
      <div id="testimonial-carousel" class="carousel slide" data-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active container-fluid">
            <h2 class="testomonial-text">Education is the passport to the future, for tomorrow belongs to those who prepare for it today.</h2>
            <em>- Malcolm X</em>
          </div>

          <div class="carousel-item container-fluid">
            <h2 class="testomonial-text">You don’t have to be great to start, but you have to start to be great.</h2>
            <em>- Zig Ziglar</em>
          </div>

          <div class="carousel-item container-fluid">
            <h2 class="testomonial-text">The beautiful thing about learning is that no one can take it away from you.</h2>
            <em>- B B King</em>
          </div>

        <div class="carousel-item container-fluid">
          <h2 class="testomonial-text">The future belongs to those who believe in the beauty of their dreams.</h2>

          <em>- Eleanor Roosevelt</em>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="testomonial-text">The whole purpose of education is to turn mirrors into windows.</h2>

          <em>- Sydney J. Harris</em>
        </div>
        </div>
        <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </section>
    <!-- Press -->
    <section class="colored-section" id="press">
      <img class="press-logo" src="images/giet.png" alt="giet-logo">

    </section>
    <!-- achievements -->
    <section class="white-section" id="achievements">
      <h2 class="section-heading">My Achievements</h2>
      <p>My Designation and Achievements.</p>
      <div class="row">
        <div class="achievements-column col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header">
              <h3>Designation</h3>
            </div>
            <div class="card-body">
              <p>Associate Dean, International Affairs</p>
              <p>Professor, Department of CSE</p>
              <p>GIET University</p>
              <p>Gunupur-765022, Odisha</p>
              <a href="#" class="btn btn-lg btn-block btn-outline-dark">Know More</a>
            </div>
          </div>
        </div>
        <div class="achievements-column col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header">
              <h3>Educational Qualification</h3>
            </div>
            <div class="card-body">
              <p>Ph. D. in Computer Science, Berhampur University </p>
              <p>M.Tech (Computer Science), Berhampur University </p>
              <p>MCA, IGNOU</p>
              <a href="#" class="btn btn-lg btn-block btn-dark">Konw More</a>
            </div>
          </div>
        </div>
        <div class="achievements-column col-lg-4">
          <div class="card">
            <div class="card-header">
              <h3>Research Work</h3>
            </div>
            <div class="card-body">
              <p>31 Research Papers</p>
              <p>45 Book Chapters</p>
              <p>13 edited books</p>
                <p>02 authored books</p>
              <p>04 Book series</p>
              <p>02 Patents</p>
              <p>01 Copyright</p>
              <a href="#" class="btn btn-lg btn-block btn-dark">Know More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action -->
    <section class="colored-section" id="cta">
      <div class="container-fluid">
        <h3 class="big-heading">17 Years of Fine Teaching Experience with Versatile ability and Knowledge.</h3>
        <button type="button" class="cta-icon btn btn-dark btn-lg know-more-button">
          Contact Me</button>

      </div>
    </section>
    <!-- Footer -->
    <footer class="white-section" id="footer">
      <div class="container-fluid" >
        <a href="https://www.researchgate.net/profile/Brojo_Mishra2"><i class=" social-icon fa-brands fa-researchgate "></i></a>
        <a href="https://orcid.org/0000-0002-7836-052X"><i class="social-icon  fa-brands fa-orcid "></i></a>
        <a href="https://scholar.google.com/citations?hl=en&user=-gWJbS8AAAAJ"><i class="social-icon  fa-brands fa-google "></i></a>
        <a href="mailto:brojomishra@gmail.com"><i class="social-icon  fa-solid fa-envelope"></i></i></a>

        <p>© Copyright 2022 My Project</p>

      </div>
    </footer>
  </body>
</html>
