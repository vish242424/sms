<?php 

   $conn = mysqli_connect('localhost','root','','sms');
   $student_id = $_GET['student_id'];
   $query="SELECT * FROM student WHERE student_id = ".$student_id;
    $result= mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    // echo "<pre>";
    // print_r($row);
    // echo $row['address'];

    $name = $row['name'];
    $mobile = $row['mobile'];
    $email = $row['email'];
    $gender = $row['gender'];
    $course = $row['course'];
    $address = $row['address'];
   $date = $row['date'];
?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Update Student</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
   <?php 
   include'header.php';
   ?>
   <div class="data">
      <h1 class="text-center text-warning mt-1">Update Student</h1>
      <div class="row justify-content-center">
         <div class="col-lg-6 card shadow p-4" style="background:#2476;color:white;">
         <form class="form" action="update_student_code.php" method="post">

            <input type="hidden" name="student_id" value="<?php echo $student_id;?>">
            <div class="mb-3">
               <label>student Name: </label>
               <input type="text" name="name" class="form-control" placeholder="Enter student name" value="<?php echo $name;?>">
            </div>

            <div class="mb-3">
               <label>Mobile :</label>
               <input type="number" name="mobile" class="form-control" placeholder="Enter mobile "  value="<?php echo $mobile;?>">
            </div>
            <div class="mb-3">
               <label>email </label>
               <input type="text" name="email" class="form-control"value="<?php echo $email;?>">
            </div>
            <div class="mb-3">
               <label>gender :</label>
               <input type="text" name="gender" class="form-control"value= "<?php echo $gender;?>">
            </div>            
            <div class="mb-3">
               <label>Address: </label>
               <textarea class="form-control" name="address" placeholder="Enter address"> <?php echo $address;?></textarea>
            </div>
            <div class="mb-3">
               <label> Course</label>
               <select  name="course" class="form-control">
                  <option>--Select course--</option>
                  <option name="course" value="C programming" <?php echo $course == "C programming" ? 'selected' : "" ;?>> C programming</option>
                  <option name="course" value="Java"         <?php echo $course == "Java" ? 'selected' : "" ;?> > Java</option>
                  <option name="course" value="Python"      <?php echo $course == "Python" ? 'selected' : "" ;?>> Python</option>
                  <option name="course" value="SQL"        <?php echo $course == "SQL" ? 'selected' : "" ;?>> SQL</option>
                  <option name="course" value="Other"      <?php echo $course == "Other" ? 'selected' : "" ;?>>Other</option>
               </select>
            </div>
            <div class="mt-3 mb-3 text-center">
               <input type="submit" name="submit" id="btn" class="btn btn-success btn-lg" value="Update student">
            </div>

         </form>
      </div>
      </div>
   </div>
       
</body>
</html>
