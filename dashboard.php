<?php include("header.php")
  ?>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body style="background: #42daf5;">
<div class="container">
  <h2> <u>Welcome to Student Management System </u></h2>
  <p style="font-size: 16px; margin-top: 20px;">Schools and Universities are the foundation of knowledge and an educational body on which students rely upon. Therefore, they need to maintain a proper database of its students to keep all the updated records and easily share information with students.</p>

  <p style="font-size: 16px;">Most schools and Universities count on an advanced software tool knows as<b> 'Student Information System (SIS)'</b> to keep all their student records and administrative operations including, examinations, attendance, and other activities.</p>

   <p style="font-size: 16px;">Over the recent years, the performance and efficiency of the education industry have been enhanced by using the <b>Student Management System.</b> This tool has productively taken over the workload of the admin department with its<b> well-organized, easy, and reliable online school management software.</b></p>
</div>

     <?php

       $conn=mysqli_connect("localhost","root","","sms");
       $sql="SELECT count(*) as total FROM student";
       $result= $conn->query($sql);
       $row=$result->fetch_assoc();
       ?>

      <div class="well" style=" font-size:22px; padding-left: 480px;margin-top: 50px; font-family: Times New Roman; color: #AD4A91;"> <b><?php echo"Total Number of Student : ".$row['total'];
       $conn->close(); ?></b>
       </div>

   
         <?php

       $conn=mysqli_connect("localhost","root","","sms");
       $sql="SELECT count(*) as total FROM teacher";
       $result= $conn->query($sql);
       $row=$result->fetch_assoc();
       ?>

      <div class="well" style="font-size:22px; padding-left: 480px;font-family: Times New Roman;color: #AD4A91;"> <b><?php echo "Total Numaber of Teachers : ".$row['total'];
       $conn->close();?> </b>
     </div>

   

</body>
</html>


  