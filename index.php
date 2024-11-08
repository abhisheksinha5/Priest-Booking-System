
<?php
include "db_connection.php";
?>
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
              <a class="nav-link" href="../priest_login/index.php"> <strong>Register As Priest</strong> </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Title -->

  </section>
  <!-- Features -->

<!-- partial:index.partial.html -->

<div id="container">
<!-- Cover Box -->
<div id="cover">
<!-- Sign Up Section -->
<h1 class="sign-up">Hello, Friend!</h1>
<p class="sign-up">Enter your personal details<br> and start a journey with us</p>
<a class="button sign-up" href="#cover">Sign Up</a>
<!-- Sign In Section -->
<h1 class="sign-in">Welcome Back!</h1>
<p class="sign-in">To keep connected with us please<br> login with your personal info</p>
<br>
<a class="button sub sign-in" href="#">Sign In</a>
</div>
<!-- Login Box -->
<div id="login">
<h1>Sign In</h1>
<a href="#"><i class="social-login fa-brands fa-facebook"></i></a>
<a href="#"><i class="social-login fa-brands fa-google"></i></a>
<a href="#"><i class="social-login fa-brands fa-twitter"></i></a>

<p>or use your user name:</p>
<form action="login.php" method="post">
  <?php if (isset($_GET['error'])) { ?>
    <p class="error">
  <?php echo $_GET['error']; ?></p>
  <?php } ?>
<input type="text" placeholder="Username" autocomplete="off" required="" name="username"><br>
<input type="password" placeholder="Password" autocomplete="off" required="" name="password" ><br>
<a id="forgot-pass" href="#">Forgot your password?</a><br>
<!-- <input class="submit-btn" type="submit" value="Sign In"> -->
<button class="submit-btn" type="submit">Login</button>
</form>


</div>



<!-- Register Box -->
<div id="register">
<h1>Create Account</h1>
<a href="#"><i class="social-login fa-brands fa-facebook"></i></a>
<a href="#"><i class="social-login fa-brands fa-google"></i></a>
<a href="#"><i class="social-login fa-brands fa-twitter"></i></a>
<p>or use your email for registration:</p>


<form action="" method="post">
  <?php if (isset($_GET['error'])) { ?>
    <p class="error">
  <?php echo $_GET['error']; ?></p>
  <?php } ?>
<input type="text" placeholder="Name" autocomplete="off" required="" name="name"  title="Must have number and letters only"><br>
<input type="text" placeholder="Username" autocomplete="off" required="" name="username"><br>
<input type="email" placeholder="Email" autocomplete="off" required="" name="email"><br>
<input type="password" placeholder="Password" autocomplete="off" required="" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Minimun 8 character and must have number,uppercase and lowercase"><br>
<button class="submit-btn" type="submit" name ="register">register</button>

</form>


<!-- PHP code for signup page -->
<?php
require 'db_connection.php';

if(isset($_POST["register"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];


  $sql = "SELECT * FROM users WHERE username='$username'";

        $res=mysqli_query($conn,$sql);

        if (mysqli_num_rows($res) > 0) {

          $row = mysqli_fetch_assoc($res);
          if ($username==isset($row['username']))
          {
            echo "<script> alert('username already exists'); </script>";

          }
    		}
  else{

    $query = "INSERT INTO users VALUES('','$name','$username','$email','$password')";
    mysqli_query($conn,$query);
    echo "<script> alert('Registration Successful. Please Login to Continue'); </script>";
  }


}
?>

</div>
</div> <!-- END Container -->

<!-- partial -->
</body>
</html>
