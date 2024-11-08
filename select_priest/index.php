
<?php
include "../login/db_connection.php";
include "fetch.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../rituals/css/styles.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="" href="/css/master.css">
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
                <a class="nav-link" href="#achievements">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#cta">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <strong>Register As Priest</strong> </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Title -->

    </section>
    <br><br>
    <div class="container">
     <div class="row">
       <div class="col-sm-12">
        <?php echo $deleteMsg??''; ?>
        <div class="table-responsive">
          <table class="table table-bordered">
           <thead><tr>

             <th>S.N</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Experience</th>
             <th>Specialization</th>
             <th>Photo</th>
             <th>Action</th>
        </thead>
        <tbody>
      <?php
          if(is_array($fetchData)){
          $sn=1;
          foreach($fetchData as $data){
        ?>
          <tr>
          <td><?php echo $sn; ?></td>
          <td><?php echo $data['fname']??''; ?></td>
          <td><?php echo $data['lname']??''; ?></td>
          <td><?php echo $data['experience']??''; ?></td>
          <td><?php echo $data['specialization']??''; ?></td>
          <td><img src="../priest_login/images/<?php echo $data['filename']??''; ?>" width="200" height="200" alt=""></td>
          <td><a class="popup btn btn-primary" onclick="myFunction()">Contact<span class="popuptext" id="myPopup">Phone: 7596842596 <br> Email:abc@gmail.com</span></a></td>



          <script>
          // When the user clicks on div, open the popup
          function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
          }
          </script>


          <!-- class="popup" onclick="myFunction()">Click me to toggle the popup!
            <span class="popuptext" id="myPopup">Phone: 7596842596 <br> email : abc@gmail.com</span> -->
         </tr>
         <?php
          $sn++;}}else{ ?>
          <tr>
            <td colspan="8">
        <?php echo $fetchData; ?>
      </td>
        <tr>
        <?php
        }?>
        </tbody>
         </table>
       </div>
    </div>
    </div>
    </div>


  </body>
</html>
