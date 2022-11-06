<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include('nav.php'); ?>
  <?php include('slider.php'); ?>
  <?php
  include('functions.php');
  if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  ?>

  <div class="container-fluid">
    <h1 align=center>Travel Around The World</h1>
    <h3 align=center>Explore,Discover,travel</h3>
    <div class="row mb-5">
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="images/dubai.jpg"  width="200" height="200" class="card-img-top" alt="...">
          <div class="card-body">
           <center> <h5 class="card-title">Dubai</h5></center>
        

          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="images/oahu.jpg" class="card-img-top"  width="200" height="200" alt="...">
          <div class="card-body">
          <center> <h5 class="card-title">Oahu</h5></center>
           

          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="images/france.jpg" width="200" height="200" class="card-img-top" alt="...">
          <div class="card-body">
           <center> <h5 class="card-title">Paris</h5></center>
           

          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="images/newzeland.jpg"  width="200" height="200" class="card-img-top" alt="...">
          <div class="card-body">
           <center> <h5 class="card-title">New Zealand</h5></center>
            

          </div>
        </div>
      </div>
    </div>


  </div>


  <h4 align=center>Our services</h4>
  <div class="row">
    <div class="column">
      <a href="services.php#safari">
        <img src="images/1.jpg" alt="safari" style="width:100% ">
      </a>
    </div>
    <div class="column">
      <a href="services.php#camping">
        <img src="images/2.jpg" alt="camping" style="width:100%">
      </a>
    </div>
    <div class="column">
      <a href="services.php#hiking">
        <img src="images/3.jpg" alt="hiking" style="width:100%">
      </a>
    </div>
    <div class="column">
      <a href="services.php#diving">
        <img src="images/4.jpg" alt="siving" style="width:100%">
      </a>
    </div>
    <div class="column">
      <a href="services.php#skydiving">
        <img src="images/5.jpg" alt="skydiving" style="width:100%">
      </a>
    </div>

  </div>

  <?php include('footer.php'); ?>
</body>

</html>