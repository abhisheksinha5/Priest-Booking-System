<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Priests-Login/Register</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="css/styles.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

<script src="https://use.fontawesome.com/releases/v6.0.0/js/all.js"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

  <section class="colored-section" id="title">
    <div class="container-fluid">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="../landing/index.php">Priests</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../landing/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../landing/#features">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../landing/#cta">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../priest_login/index.php"> <strong>Register As Priest</strong> </a>
            </li>
          </ul>
        </div>
      </nav>
  </section>



<div class="searchHeading">
  <h2>Our Rituals</h2>

  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Rituals..." title="Type in a name">
</div>


  <ul id="myUL">
    <li> <div class="card" style="width: 12rem;">
    <img class="card-img-top" src="images/satyanarayana_puja.jpg" alt="Card image cap">
    <div class="card-body">
    <h6 class="card-title">Satyanarayana Puja</h6>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
    </div></li>

  <li></div>
  <div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/rudraksha_puja.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Rudraksha Puja</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div></li>

  <li></div>
  <div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/ganesh_puja.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Ganesh Puja</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div></li>

  <li></div>
  <div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/Grih_Prabesh.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Grih Prabesh</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div></li>

  <li></div>
  <div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/janmastami.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Janmastami</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div></li>

  <li></div>
  <div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/kali_puja.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Kali Puja</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div></li>



  <li></div>
  <div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/marriage.gif" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Marriage</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div></li>



    <li>  </div>
      <div class="card" style="width: 12rem;">
      <img class="card-img-top" src="images/Santi_hawan.jpg" alt="Card image cap">
      <div class="card-body">
      <h6 class="card-title">Santi Hawan</h6>
      <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
      <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
      </div>
      </div></li>

  <li><div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/saraswati_puja.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Saraswati Puja</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div>
  </div></li>
  <li><div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/thread_ceremony.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Thread Ceremony</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div>
  </div></li>
  <li><div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/vishwakarma_puja.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Vishwakarma Puja</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div>
  </div></li>

  <li><div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/dusshera_puja.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Dusshera Puja</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div>
  </div></li>

  <li><div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/Vasant_Panchami.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Vasant Panchami</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div>
  </div></li>

  <li><div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/Gudi_Padwa.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Gudi Padwa</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div>
  </div></li>




  <li><div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/Guru_Purnima.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Guru Purnima</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div>
  </div></li>

  <li><div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/Lakshmi_Puja.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Lakshmi Puja</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div>
  </div></li>

  <li><div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/Rama_Navami.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Rama Navami</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div>
  </div></li>

  <li><div class="card" style="width: 12rem;">
  <img class="card-img-top" src="images/Siva_puja.jpg" alt="Card image cap">
  <div class="card-body">
  <h6 class="card-title">Siva Puja</h6>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  <a href="../select_priest/index.php" class="btn btn-primary">Book</a>
  </div>
  </div></li>

  </ul>



<!-- Searching Feature -->
  <script>
  function myFunction() {
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName("li");
      for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByClassName("card-title")[0];
          txtValue = a.textContent || a.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
          } else {
              li[i].style.display = "none";
          }
      }
  }
  </script>
</body>
</html>
