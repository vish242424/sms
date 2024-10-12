<?php include("header.php") ?>

<div class="container">
    <h1> Teacher List </h1> 
	<table class="table table-bordered shadow table-hover">
		
		<tr>
			<th> Teacher_Id </th>
			<th> Name </th>
			<th> Mobile </th>
			<th> Address</th>
			<th> qualification </th>
			<th> Update </th>
			<th> Delete</th>
	    </tr>

	    <?php

	     $conn=mysqli_connect("localhost","root","","sms");
	     $query="SELECT * FROM teacher";
	     $result=mysqli_query($conn,$query);

	     while($row=mysqli_fetch_assoc($result))
	     {
	    ?>

	    <tr>
	    	<td> <?php echo $row['teacher_id']?> </td>
	    	<td> <?php echo $row['name']?> </td>
	    	<td> <?php echo $row['mobile']?> </td>
	    	<td> <?php echo $row['address']?> </td>
	    	<td> <?php echo $row['qualification']?> </td>
	    	<td >
		<a class=" btn btn-primary " href="update_teacher.php?teacher_id=<?php echo $row['teacher_id']; ?>"> Update</a> </td>
		<td >
		<a class=" btn btn-danger " href="delete_teacher.php?teacher_id=<?php echo $row['teacher_id']; ?>"> Delete</a> </td>

	    </tr>
	<?php 
       }
	 ?>

	</table>
</div> 
</body>
</html>



