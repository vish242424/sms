<?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="container bg-info">
	
	 	<h1 class="text-left mt-5"> Admin login</h1>
	<div class="row">
		<div class="col-lg-8 shadow mt-3 rounded border p-4">
		<form action="verify_login.php" method="post">
	   	
		 	<?php
		 	  if (isset($_SESSION["message"])) 
		 	   { ?> 
		 	  	<div class="alert alert-danger ">
		        <b>
		 	<?php  	 
		 	    echo $_SESSION["message"];
			    session_destroy();
			?>    
			    </b>
		        </div>
		 	<?php
		 	  }
		 	?>
		 
			<div  class="form-group">
				 <label> Email </label>
				 <input type="email" name="email" class="form-control">
			</div>
			<div  class="form-group">
				 <label> User password </label>
				 <input type="password" name="password" class="form-control">
			</div>
			<div  class="form-group">
				 <input type="submit" name="" class="btn btn-success">
				 <input type="reset" name="" class="btn btn-danger">
			</div> 
		</form>
	</div>
	</div>           


</body>
</html>