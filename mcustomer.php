<?php
   //require('header.php');
    require('conn.php');
    require('header.php');

    $stmt=$db->prepare('select * from person');
    $stmt->execute();
    $student=$stmt->fetchAll(PDO::FETCH_ASSOC);

 session_start();

 if ($_SESSION['username']!="manager") {
   header('location:login.php');
 }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Customer!</title>
  </head>
  <body>
    
  
   
  <h1 class=" text-center" style="margin-top: 70px;">All Customer  Info</h1> <span style="margin-left:1300px">welcome <?= $_SESSION['username'] ?></span>
    <hr  style="width: 150px; margin-left:780px; color:black">
    
    
<div class="container">
<div class="" style="margin-bottom: 20px;">
<a href="create.php" class="btn  btn-primary">Register New Customer</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name </th>
      <th scope="col">phone</th>
      <th scope="col">Country</th>
      <th scope="col">Staying days</th>
      <th scope="col">Paid Price</th>
      <th scope="col">Balance price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
 
 <?php 
 foreach($student as $i => $st){ ?>
  <tr>


  <th><?= $i +1?></th>
<td><?= $st['name'] ?></td>
<td><?= $st['phone'] ?></td>
<td><?= $st['country'] ?></td>
<td><?= $st['days']?></td>
<td><?= $st['price'] . '$' ?></td>
<td><?= $st['balance'] .'$' ?></td>

<td><a href="update.php?id=<?php echo $st['id'] ?>" class="btn btn-sm btn-success">Edit</a>



</td>



</tr>
 
<?php }?>

    
  </tbody>
</table>

</div>






    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


  </body>
</html>
