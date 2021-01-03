<?php

require('conn.php');
 require('header.php');
  session_start();
  $msg='';
if (isset($_POST['login'])) {
  $username=$_POST['username'];
  $password=sha1($_POST['password']);
  $l=$db->prepare('select * from user where username=:u and password=:p');
  $l->bindParam(':u',$username);
  $l->bindParam(':p',$password);
  $l->execute();
  $r=$l->fetch(PDO::FETCH_ASSOC);
  session_regenerate_id();
  @$_SESSION['username']=$r['username'];
  if ($r !=="" && $_SESSION['username']=="admin") {
    header('location:customers.php');
    
  }elseif($r !=="" && $_SESSION['username']=="manager"){
    header('location:mcustomer.php');
  }
  else{
    $msg='username or password Incorrect';
  }
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

    <title>Login</title>
    <style>
      .form-control{
        width: 400px;
        
      }
      .container{
        margin-left: 350px;
      }
    </style>
  </head>
  <body class="">

       
    
    <div class="container" style="width: 450px; margin-top:50px">
    <h1 class="  text-center" style="margin-bottom: 40px;">Login</h1>
    <form method="post">
      
  <div class="form-group">
    <label  class="form-label">User name</label>
    <input type="text" class="form-control ii" name="username" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" name="password" required>
  </div>
  <div class="col-3 offset-4" >
      <button type="submit" style="width: 100px;"  name="login" class="btn btn-primary"> Login</button>
  </div>
 <div >
   <h3 class="text-danger"><?= $msg?></h3>
 </div>
</form>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
  </body>
</html>
