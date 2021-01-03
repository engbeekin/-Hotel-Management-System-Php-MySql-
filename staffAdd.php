<?php
 require('conn.php');
 require('header.php');

 if (isset($_POST['create'])) {

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $shiff=$_POST['shift'];
    


    $hotel=$db->prepare('insert into staff(name,email,phone,shift)
    values(:name,:email,:phone,:shift)');

    $hotel->bindParam(':name',$name);
    $hotel->bindParam(':email',$email);
    $hotel->bindParam(':phone',$phone);
    $hotel->bindParam(':shift',$shiff);
    
    $hotel->execute();
    header('location:staff.php');
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

    <title>Register New Student!</title>
    <style>
      .form-control{
        width: 400px;
        
      }
      .container{
        margin-left: 350px;
      }
    </style>
  </head>
  <body>
    
    <div class="container">
    <h1 class="" style="margin-bottom: 40px;">Register New Staff</h1>
    <form method="post">
      <div class="row">
        <div class="col-6">
  <div class="form-group">
    <label  class="form-label">Full name</label>
    <input type="text" class="form-control ii" name="name" required>
  </div>
  <div class="form-group">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" name="email" required>
  </div>
        </div>
  
  <div class="col-6">
  <div class="form-group">
    <label class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" required>
  </div>
  
  <div class="form-group">
    <label class="form-label">Shift Timing</label>
    <input type="text" class="form-control" name="shift" required>
    </div>
  </div>
  </div>
  
  <div>   <button type="submit" class="btn btn-primary col-4 offset-3" 
  name="create" style="width: 300px;margin-top:20px">Register New Staff</button>
</div>
  </div>
</form>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
  </body>
</html>
