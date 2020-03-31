<?php

include "db.php";
include "auth.php";
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
$id = $_POST['id'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$gender = $_POST['gender'];
$division = $_POST['division'];
$emp_type = $_POST['emp_type'];

$sql = mysqli_query($conn,"UPDATE employee SET emp_type='$emp_type', lname='$lname', fname='$fname', gender='$gender', division='$division' WHERE emp_id='$id'");

if ($sql) {
    ?>
    <script>
      alert('Employee successfully updated.');
      window.location.href='home_employee.php';
    </script>
    <?php
} else {
    ?>
    <script>
      alert('Invalid action.');
      window.location.href='home_employee.php';
    </script>
    <?php
}
?>