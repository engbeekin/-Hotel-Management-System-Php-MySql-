<?php
require('header.php');
require('conn.php');
$stmt=$db->prepare('select * from person');
$stmt->execute();
$student=$stmt->fetchAll(PDO::FETCH_ASSOC);


$stmt=$db->prepare('select * from staff');
$stmt->execute();
$student1=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<style>
    img{
        height: 500px;
    }
   
    #img1{
        height: 300px;
    }
</style>
</head>

<body>

 <!-- carousel  code -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\slider1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\slider2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\slider3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\slider4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </a>
</div>

<!-- hotel service  code -->
    



  <!-- Rooms code -->
<div class="container" style="padding: 40px;">
<h1 class=" text-center">Our Rooms</h1>
    <hr class="bg-primary" style="width: 100px; margin-left:480px; ">
  <div class="row row-cols-1 row-cols-md-3 g-4">

  <div class="col">
    <div class="card h-100" style="width: 20rem;">
    <img src="images\doublevip2.jpg" id="img1" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">Delux Vip Room</h3>
    <p class="card-text">Price: <span style="font-weight: bold;">100$</span>  per day</p>
  </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" style="width: 20rem;">
    <img src="images\vip.jpg" id="img1" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">Vip Room</h3>
    <p class="card-text">Price: <span style="font-weight: bold;">90$</span>  per day</p>
  </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" style="width: 20rem;">
    <img src="images\doublevip2.jpg" id="img1" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">Double Vip Room</h3>
    <p class="card-text">Price: <span style="font-weight: bold;">80$</span>  per day</p>
  </div>
    </div>
  </div>
    
  <div class="col" style="margin-top: 30px;">
    <div class="card h-100" style="width: 20rem;">
    <img src="images\double.jpg" id="img1" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">Double Room</h3>
    <p class="card-text">Price: <span style="font-weight: bold;">70$</span>  per day</p>
  </div>
    </div>
  </div>
  <div class="col" style="margin-top: 30px;">
    <div class="card h-100" style="width: 20rem;">
    <img src="images\normal.jpg" id="img1" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">Normal Room</h3>
    <p class="card-text">Price: <span style="font-weight: bold;">50$</span>  per day</p>
  </div>
    </div>
  </div>
  <div class="col" style="margin-top: 30px;">
    <div class="card h-100" style="width: 20rem;">
    <img src="images\single.jpg" id="img1" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">single Room</h3>
    <p class="card-text">Price: <span style="font-weight: bold;">40$</span>  per day</p>
  </div>
    </div>
  </div>
  
</div>
</div>

<div class="container" style="padding: 40px;">
<h1 class=" text-center">Our Service</h1>
    <hr class="bg-primary" style="width: 100px; margin-left:480px; ">

    <div class="row row-cols-1 row-cols-md-3 g-4">

  <div class="col">
    <div class="card h-100" style="width: 20rem;">
    <img src="images\rest.jpg" id="img1" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">Vip Restuartant </h3>

  </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" style="width: 20rem;">
    <img src="images\swim.jpg" id="img1" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">Swimming Pool</h3>
   
  </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" style="width: 20rem;">
    <img src="images\parking.jpg" id="img1" class="card-img-top" alt="...">
  <div class="card-body">
  <h3 class="card-title">Car Parking</h3>
   
  </div>
    </div>
  </div>
</div>

<div class="container" style="padding: 40px;">
<h1 class=" text-center">Our Features</h1>
    <hr class="bg-primary" style="width: 100px; margin-left:480px; ">
    
   

    <div class="row text-center">
    <div class="col">
    <div class="card h-100" style="width: 450px;">
    <img src="images\slider1.jpg" id="img1" class="card-img-top" alt="...">
  <div class="card-body">
  <h2 class="card-title"><span class="badge badge-pill badge-info"><?= count($student)?></span> Customers</h2>
  <p><a class="btn btn-secondary" href="Customers.php" role="button">View Customers »</a></p>
  </div>
  </div>
  </div> 
  <div class="col">
    <div class="card h-100" style="width: 450px;">
    <img src="images\staff.jpg" id="img1" class="card-img-top" alt="...">
  <div class="card-body">
  <h2 class="card-title"><span class="badge badge-pill badge-info"><?= count($student1)?></span> Staffs</h2>
  <p><a class="btn btn-secondary" href="staff.php" role="button">View Staffs »</a></p>
  </div>
  </div>
  </div>
  </div>

       


</body>

</html>