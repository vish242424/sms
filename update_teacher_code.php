<?php
     session_start();
    $conn = mysqli_connect('localhost','root','','sms');

 $teacher_id = $_POST['teacher_id'];

 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
 $address= $_POST['address'];
 $qualification = $_POST['qualification'];


 $query ="UPDATE teacher SET name = '$name', mobile = '$mobile', address = '$address', qualification = '$qualification' WHERE teacher_id = ".$teacher_id;


    //Execute query
    mysqli_query($conn,$query);
    $_SESSION['success']='Record Updated Successfully';
    header("location:teacher_list.php");
   
?>