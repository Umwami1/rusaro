<?php
$conn=mysqli_connect("localhost","root","","idatech");

$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['password'];
$d=$_POST['location'];

$sql="UPDATE user SET id='$a',name='$b',password='$c',location='$d' WHERE id='$a'";
$a=mysqli_query($conn,$sql);
header("location:updateform.php");

?>