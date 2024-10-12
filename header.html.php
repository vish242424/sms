<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Student Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Dashboard.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_student.php">Add Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_teacher.php"> Add Teacher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="student_list.php">All Student List</a>
      </li>
      <li>
        <a class="nav-link" href="teacher_list.php">All Teachers List</a>
      </li>  
        <li class="nav-item">
        <a class="nav-link btn btn-danger btn-sm" href="login.php">Logout</a>
      </li>   
    </ul>
  </div>  
</nav>
<br>