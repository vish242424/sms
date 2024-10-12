<?php
     session_start();
    $conn = mysqli_connect('localhost','root','','sms');

 $student_id = $_POST['student_id'];

 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $course = $_POST['course'];
 $address= $_POST['address'];


 $query ="UPDATE student SET name = '$name', mobile = '$mobile',email = '$email',gender = '$gender', course = '$course', address = '$address' WHERE student_id =".$student_id;


    //Execute query
    mysqli_query($conn,$query);
    $_SESSION['success']='Record Updated Successfully';
    header("location:student_list.php");
   
?>