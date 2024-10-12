<?php 

   $conn = mysqli_connect('localhost','root','','sms');
   $teacher_id = $_GET['teacher_id'];
   $query="SELECT * FROM teacher WHERE teacher_id = ".$teacher_id;
    $result= mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    // echo "<pre>";
    // print_r($row);
    // echo $row['address'];

    $name = $row['name'];
    $mobile = $row['mobile'];
    $address = $row['address'];
    $qualification = $row['qualification'];

?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Update Teacher</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
   <?php 
   include'header.php';
   ?>
   <div class="data">
      <h1 class="text-center text-warning mt-1">Update teacher</h1>
      <div class="row justify-content-center">
         <div class="col-lg-6 card shadow p-4" style="background:#2476;color:white;">
         <form class="form" action="update_teacher_code.php" method="post">

            <input type="hidden" name="teacher_id" value="<?php echo $teacher_id;?>">
            <div class="mb-3">
               <label>teacher Name: </label>
               <input type="text" name="name" class="form-control" placeholder="Enter teacher name" value="<?php echo $name;?>">
            </div>

            <div class="mb-3">
               <label>Mobile:</label>
               <input type="number" name="mobile" class="form-control" placeholder="Enter mobile "  value="<?php echo $mobile;?>">
            </div>

            
            <div class="mb-3">
               <label>Address: </label>
               <textarea class="form-control" name="address" placeholder="Enter address"> <?php echo $address;?></textarea>
            </div>

            <div class="mb-3">
               <label>Qualification:</label>
               <select  name="qualification" class="form-control">
                  <option>--Select Qualificaion--</option>
                  <option name="qualification" value="BHMS" <?php echo $qualification == "BHMS" ? 'selected' : "" ;?>>BHMS</option>
                  <option name="qualification" value="MBBS" <?php echo $qualification == "MBBS" ? 'selected' : "" ;?> >MBBS</option>
                  <option name="qualification" value="BAMS" <?php echo $qualification == "BAMS" ? 'selected' : "" ;?>>BAMS</option>
                  <option name="qualification" value="M.D" <?php echo $qualification == "M.D" ? 'selected' : "" ;?>>M.D</option>
                  <option name="qualification" value="Other" <?php echo $qualification == "Other" ? 'selected' : "" ;?>>Other</option>
               </select>
            </div>
            <div class="mt-3 mb-3 text-center">
               <input type="submit" name="submit" id="btn" class="btn btn-success btn-lg" value="Update teacher">
            </div>

         </form>
      </div>
      </div>
   </div>
       
</body>
</html>
