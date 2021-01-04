<?php
   
    require('..\conn.php');
    require('..\header.php');

    $stmt=$db->prepare('select * from staff');
    $stmt->execute();
    $student=$stmt->fetchAll(PDO::FETCH_ASSOC);
@session_start();
if ($_SESSION['username'] !='admin') {
  header('location:../login.php');
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
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Customer!</title>
  </head>
  <body>
    <h1 class=" text-center"  style="margin-top: 70px;">All Staff  Info</h1>
   
    <hr  style="width: 150px; margin-left:780px; color:black">
    

    
<div class="container">
<div class="" style="margin-bottom: 20px;">
<a href="staffAdd.php" class="btn  btn-primary">Register New Customer</a>
</div>

<div>
<input id="myInput" type="text" placeholder="Search Staff here" class=" form-control" style="width: 300px; 
 margin-left:1000px">
                </div>
                <br>

<table class="table" id="emptable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name </th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      <th scope="col">Shift Timing</th>
     
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
 
 <?php 
 foreach($student as $i => $st){ ?>
  <tr>


  <th><?= $i +1?></th>
<td><?= $st['name'] ?></td>
<td><?= $st['email'] ?></td>
<td><?= $st['phone'] ?></td>
<td><?= $st['shift']?></td>


<td><a href="staffupdate.php?id=<?php echo $st['id'] ?>" class="btn btn-sm btn-success">Edit</a>

<form method="POST" action="staffdelete.php" style="display: inline-block;">
<input type="hidden" name="id" value="<?php echo $st['id']?>">
<button type="submit" class="btn btn-sm btn-danger">Delete</button>
</form>




</td>



</tr>
 
<?php }?>

    
  </tbody>
</table>
<script>
                
                    $(document).ready(function() {
                        $("#myInput").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                            $("#emptable tr").filter(function() {
                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                            $("#emptable tr:first").show();
                        });
                    });
                </script>

</div>






    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


  </body>
</html>
