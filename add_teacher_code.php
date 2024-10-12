<?php

 $conn=mysqli_connect("localhost","root","","sms");

 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 $qualification=$_POST['qualification'];

 $query="INSERT INTO teacher(name,mobile,qualification)VALUES('$name','$mobile','$qualification')";

 $result=mysqli_query($conn,$query);

 header("location:teacher_list.php");
  
?>