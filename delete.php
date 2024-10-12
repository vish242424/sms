<?php
     
     session_start();

      $conn=mysqli_connect('localhost','root','','sms');

    $student_id=$_GET['student_id'];


    $query="DELETE FROM student where student_id='$student_id'";

    mysqli_query($conn,$query);

       $_SESSION['success']='Record Deleted Successfully';

        header("location:student_list.php");
   
    
 ?>
 