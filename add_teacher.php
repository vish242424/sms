<?php include("header.php") ?>

<div class="container table-bordered  table-hover " style="background-color: #34ebc3; border-radius: 20px; box-shadow: 10px 10px 5px lightblue;">

	<h1 > Add Teacher </h1>
	<div class="col-lg-6" style="margin: 10px 10px 20px 10px;">
	<form action="add_teacher_code.php" method="POST">
	<div class="mb-2"> 
		<lable> Name </lable>
		<input type="text" name="name" placeholder="Enter name" class="form-control" style="margin-top: 10px;">
	</div>
	<div class="mb-2">
		<label> Mobile </label>
		<input type="number" name="mobile" class="form-control">
	</div>
	<div class="mb-2">
		<label> Qualification </label>
		<select name="qualification" class="form-control">
			<option> MCA    </option>
			<option> BCA    </option>
			<option> Btech  </option>
			<option> Mtech  </option>
			<option> PHYSIO </option>

		</select>	
	</div>
	<div class="mb-2" style="margin-top: 10px;">
		<input type="submit" name="" class="btn btn-primary">
		<input type="reset" name="" class="btn btn-danger">
	</div>
</form>
</div>
</div>
</body>
</html>