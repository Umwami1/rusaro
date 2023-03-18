<?php
$conn=mysqli_connect("localhost","root","","idatech");

if(true==true){
    echo 'connected';
}
else{
    echo 'connection failed';
}

$a=$_POST['id'];
$b=$_POST['student_name'];
$c=$_POST['age'];
$d=$_POST['sex'];

$sql="INSERT INTO student VALUES('$a','$b','$c','$d')";
$a=mysqli_query($conn,$sql);


?>