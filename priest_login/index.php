
<?php
include "../login/db_connection.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/styles.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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
                <a class="nav-link" href="..\login\login.php"> <strong>SignIn/SignUp</strong> </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Title -->

    </section>


<div id="container">
  <h3 style="background-color: #f0f4f3;color:#231955;text-align:center">Register As Priest</h3>

    <form class="priest_reg_form" action="priest_reg.php" method="post"  enctype="multipart/form-data">
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationDefault01" style="color:#FFFFFF">First name</label>
          <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="fname" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefault02" style="color:#FFFFFF">Last name</label>
          <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" name="lname" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefaultUsername" style="color:#FFFFFF">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend2">@</span>
            </div>
            <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" name="username" required>
          </div>
        </div>
      </div><br>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationDefault03" style="color:#FFFFFF">City</label>
          <input type="text" class="form-control" id="validationDefault03" placeholder="City" name="city" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefault04" style="color:#FFFFFF">State</label>
          <input type="text" class="form-control" id="validationDefault04" placeholder="State" name="state" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefault05" style="color:#FFFFFF">Zip</label>
          <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" name="zip" required>
        </div>

      </div>

<br>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationDefault03" style="color:#FFFFFF">Experience</label>
          <input type="text" class="form-control" id="validationDefault03" placeholder="Experience in Years" name="experience" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefault04" style="color:#FFFFFF">Specialization</label>
          <input type="text" class="form-control" id="validationDefault04" placeholder="Specialization" name="specialization" required>
        </div>

       <div class="col-md-4 mb-3">
         <label for="validationDefault03" style="color:#FFFFFF">Schedule Interview</label>
         <input type="date" class="form-control" id="date_picker" placeholder="Schedule Interview" name="interview" required>
          <script language="javascript">
            var today = new Date();
              var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0');
                  var yyyy = today.getFullYear();

                    today = yyyy + '-' + mm + '-' + dd;
                    $('#date_picker').attr('min',today);
          </script>
       </div>



      </div>

      <div class="form-group">
        <div class="container"><br>
            <div class="row">
            <div class="imgUp">
              <div class="imagePreview"></div>
          <label class="btn btn-primary">
                  Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="image">
                  </label>
            </div>
           </div>
         </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
          <label class="form-check-label" for="invalidCheck2" style="color:#FFFFFF">
            Agree to terms and conditions
          </label>
        </div>
      </div>
      <button class="btn btn-primary" type="submit" name="priest_register">Submit form</button>
    </form>

  </div>





      <script src="script.js">

      </script>
  </body>
</html>
