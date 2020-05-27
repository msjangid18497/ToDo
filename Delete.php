<?php
$con=mysqli_connect('localhost','root','','todo');
$id=$_POST['id'];
$sql="delete from todo1 where id=$id";
mysqli_query($con,$sql);
?>