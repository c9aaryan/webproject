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

    <title>Document</title>
</head>
<body>

<!--NavBar-->
<?php
  include 'navbar.php';
?>


<div class="jumbotron">
  <h1>Why us?</h1>
  <p>We offer the ultimate cardio and strength conditioning workouts in a single studio location.
     Maximize your movements with instructor-led cardio and weight training sessions. Get lost in immersive workouts built for your body.
     The combination of strength and cardio training will burn more calories while toning your arms, back, abs, glutes, and legs.</p>
</div>

<!--AboutUs-->
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
        <a href="ourServices.php" class="btn btn-success"> Check More </a>
      </div>
    </div>
  </div>
</section>

<footer>
  <p class="p-3 pl-3 bg-dark text-white">
    This is just a personal project for educational purposes! :)
  </p>
</footer>

</body>

</html>