<?php
     
     session_start();

      $conn=mysqli_connect('localhost','root','','sms');

    $teacher_id=$_GET['teacher_id'];


    $query="DELETE FROM teacher where teacher_id='$teacher_id'";

    mysqli_query($conn,$query);

       $_SESSION['success']='Record Deleted Successfully';

        header("location:teacher_list.php");
   
    
 ?>
 