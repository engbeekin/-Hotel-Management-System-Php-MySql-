<?php
require('conn.php');
$id =$_POST['id']?? null;
if (!$id) {
    header('location:staff.php');
}

$d=$db->prepare('delete from staff where id=:id');
$d->bindParam(':id',$id);
$d->execute();
header('location:staff.php');




?>