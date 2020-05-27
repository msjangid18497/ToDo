<?php
$con=mysqli_connect('localhost','root','','todo');
$textbox=$_POST['textbox'];
$sql="insert into todo1(title) values('$textbox')";
mysqli_query($con,$sql);
$id=mysqli_insert_id($con);
echo $id;
?>