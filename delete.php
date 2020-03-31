<?php
require 'db.php';
$conn = mysqli_connect('localhost', 'root', '');
if (!$conn)
{
  die("Database Connection Failed" . mysqli_error($conn));
}

$select_db = mysqli_select_db($conn,'payroll');
if (!$select_db)
{
  die("Database Selection Failed" . mysqli_error($conn));
}
$id = $_GET['emp_id'];
$query = "DELETE FROM employee WHERE emp_id=$id";
$result = mysqli_query($conn,$query) or die(mysqli_error());
header("Location: home_employee.php");
