<?php include("header.php")?>

<div class="container " style="background-color: #34ebc3; border-radius: 20px;box-shadow: 10px 10px 5px lightblue;">
  <h3 >Add Student</h3>
  <div class="row" >
    <div class="col-lg-6" style="display:flex;">
      <form action="add_student_code.php" method="POST">
         <div class="mb-2" style="width:500px">
           <label> Date </label>
           <input type="Date" name="date" class="form-control">
        </div>
        <div class="mb-2">
           <label> Student Name </label>
           <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-2">
           <label> Mobile </label>
           <input type="number" name="mobile" class="form-control">
        </div>
        <div class="mb-2">
           <label> Email </label>
           <input type="Email" name="email" class="form-control">
        </div>
        <div class="mb-2">
           <label> Gender </label>
           <input type="radio" name="gender" value="male">Male
           <input type="radio" name="gender" value="female">Female   
        <div class="mb-2">
           <label> Course </label>
           <select class="form-control" name="course">
             <option> C Programming    </option>
             <option> Java Programming </option>
             <option> Web Development  </option>
             <option> PHYSIOTHERAPY    </option>
           </select>
        </div>
        <div class="mb-2">
           <label> Address </label>
           <textarea class="form-control" name="address"></textarea>
        </div>
        <div class="mb-2" >
           <input type="submit" name="" class="btn btn-primary">
           <input type="reset" name="" class="btn btn-danger">
        </div>
      </form style="display:flex;">
    
</div>
  <div style=" border: 1px solid black; height: 400px; width: 400px; margin-left: 100px;margin-top: 50px;"><img src="smss.jpeg" style="height: 40px; height: 400px; width: 400px ;"></div>
</div>

</div>
</body>
</html>


  