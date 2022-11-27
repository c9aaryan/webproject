<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>TrainerWebsite</title>
</head>
<body>

<!--NavBar-->
<?php
  include 'navbar.php';
?>

<!--Carousel-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/leg_press.jpg" alt="leg_press" width="1100" height="500">
      <div class="carousel-caption">
        <h3>SHOW UP!</h3>
        <p>A year from now you may wish you had started today.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/boxing.jpg" alt="boxing" width="1100" height="500">
      <div class="carousel-caption">
        <h3>WORK!</h3>
        <p>The more you sweat in the gym, the less you will bleed in the ring!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/barbell_clean.jpg" alt="barbell_clean" width="1100" height="500">
      <div class="carousel-caption">
        <h3>FEEL!</h3>
        <p style="background-color:black;">It is a shame for a man to grow old without seeing the strength his body is capable of!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!--AboutUs-->
<!--
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>

  <div class="container-fluid">
    <div class= "row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/1.jpg" class="image-fluid aboutimg">
      </div>

      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">We are here to help you through your fitness journey!</h2>
        <p class="py-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
          when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
          It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
          and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <a href="about.php" class="btn btn-success"> Check More </a>
      </div>
    </div>
  </div>
</section>
-->

<!--OurServices-->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
  </div>

  <div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-1">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="images/PT.jpg" height="500" alt="Card image">
            <div class="card-body">
              <h4 class="card-title"><center>COACHING</center></h4>
              <p class="card-text">We have experienced trainers who you can hire as personal trainers as well if needed.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-1">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="images/diet.jpg" height="500" alt="Card image">
            <div class="card-body">
              <h4 class="card-title"><center>MEAL PLANS</center></h4>
              <p class="card-text">Curated diet and meal plans specially for your needs and goals, and no, they're not just salads!</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-1">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="images/rehab.jpg" height="500" alt="Card image">
            <div class="card-body">
              <h4 class="card-title"><center>REHAB</center></h4>
              <p class="card-text">With the help our our experienced trainers and physios, we help you recover from injuries and chronic pains</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Gallery-->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Gallery</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div col-lg-4 col-md-4 col-1>
        <img src="images/gallery1.jpg" width="480px" class="img-fluid pb-3 pr-3 pl-3">
      </div>

      <div col-lg-4 col-md-4 col-1>
        <img src="images/gallery1.jpg" width="480px" class="img-fluid pb-3 pr-3 pl-3">
      </div>

      <div col-lg-4 col-md-4 col-1>
        <img src="images/gallery1.jpg" width="480px" class="img-fluid pb-3 pr-3 pl-3">
      </div>

      <div col-lg-4 col-md-4 col-1>
        <img src="images/gallery1.jpg" width="480px" class="img-fluid pb-3 pr-3 pl-3">
      </div>

      <div col-lg-4 col-md-4 col-1>
        <img src="images/gallery1.jpg" width="480px" class="img-fluid pb-3 pr-3 pl-3">
      </div>

      <div col-lg-4 col-md-4 col-1>
        <img src="images/gallery1.jpg" width="480px" class="img-fluid pb-3 pr-3 pl-3">
      </div>

      <div col-lg-4 col-md-4 col-1>
        <img src="images/gallery1.jpg" width="480px" class="img-fluid pb-3 pr-3 pl-3">
      </div>

      <div col-lg-4 col-md-4 col-1>
        <img src="images/gallery1.jpg" width="480px" class="img-fluid pb-3 pr-3 pl-3">
      </div>

      <div col-lg-4 col-md-4 col-1>
        <img src="images/gallery1.jpg" width="480px" class="img-fluid pb-3 pr-3 pl-3">
      </div>

      <div col-lg-4 col-md-4 col-1>
        <img src="images/gallery1.jpg" width="480px" class="img-fluid pb-3 pr-3 pl-3">
      </div>

      <div col-lg-4 col-md-4 col-1>
        <img src="images/gallery1.jpg" width="480px" class="img-fluid pb-3 pr-3 pl-3">
      </div>

      <div col-lg-4 col-md-4 col-1>
        <img src="images/gallery1.jpg" width="480px" class="img-fluid pb-3 pr-3 pl-3">
      </div>
    </div>
  </div>
</section>

<!--UserInfo-->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">User Info</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="POST">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Phone number</label>
        <input type="text" name="number" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Comment</label>
        <textarea name="Comment" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>

<footer>
  <p class="p-3 pl-3 bg-dark text-white">
    This is just a personal project for educational purposes! :)
  </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>