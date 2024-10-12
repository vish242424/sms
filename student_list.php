<?php include("header.php")?>

<div class="container">
	<h1> Student List</h1>

	<table class="table table-bordered shadow table-hover">
		<tr>
			<th> id</th>
			<th> name</th>
			<th> mobile</th>
			<th> Email</th>
			<th> gender</th>
			<th> course</th>
			<th> Address</th>
			<th> date </th>
			<th> Update</th>
			<th> Delete</th>
	
		</tr>
         <?php
           $conn=mysqli_connect("localhost","root","","sms");
           $query="SELECT * FROM student";
           $result=mysqli_query($conn,$query);
          while ($row =mysqli_fetch_assoc($result)) 
          {

         ?>
           <tr>
			<td> <?php echo $row['student_id'];?></td>
			<td> <?php echo $row['name'];    ?>   </td>
			<td> <?php echo $row['mobile'];  ?>   </td>
			<td> <?php echo $row['email'];   ?>   </td>
			<td> <?php echo $row['gender'];  ?>   </td> 
			<td> <?php echo $row['course'];  ?>   </td>
			<td> <?php echo $row['address']; ?>   </td>
			<td> <?php echo $row['date'];    ?>   </td>
				<td >
		    <a class=" btn btn-primary " href="update_student.php?student_id=<?php echo $row['student_id']; ?>"> Update</a> </td>
		   
			<td>
				<a class=" btn btn-danger " href="delete.php?student_id=<?php echo $row['student_id']; ?>" onclick="return confirm('Are you Sure ?')"> Delete </a>
   </td>

		  </tr>
		<?php
	       }
	     ?>
	<!--   $row=mysqli_fetch_assoc($result); // return record in accociative array formate
           echo "<pre>";
           print_r($row); -->
	</table>
</div>
</body>
</html>