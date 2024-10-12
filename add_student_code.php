<?php

   $conn=mysqli_connect("localhost","root","","sms");
  $date=$_POST["date"];
  $name=$_POST["name"];
  $mobile=$_POST["mobile"];
  $email=$_POST["email"];
  $gender=$_POST["gender"];
  $course=$_POST["course"];
  $address=$_POST["address"];

  $query="INSERT INTO student(date,name,mobile,email,gender,course,address) VALUES('$date','$name','$mobile','$email','$gender','$course','$address')";
  // echo "$query";
//mysqli_query($conn,$query);
  $result=mysqli_query($conn,$query);

 
header("location:Student_list.php");




   // if($result)
   // {
   // 	echo "Record Inserted";
   // }

  /* echo "$date";
  echo "$name";
    echo "$mobile";
    
      echo "$email";
        echo "$gender";
          echo "$course";
            echo "$address";
              
  student_id	name	mobile	email	gender	course	address	date */



?>