<?php

require ('conn.php');

$id=$_POST['id']??null;

if (!$id) {
   header('location:customers.php');
   exit;

}

$hotel=$db->prepare('delete from person where id=:id');
$hotel->bindValue(':id',$id);
$hotel->execute();
header('location:customers.php');



?>