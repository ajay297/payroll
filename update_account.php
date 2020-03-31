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
$deduction = $_POST['deduction'];
$overtime = $_POST['overtime'];
$bonus = $_POST['bonus'];

$sql = mysqli_query($conn,"UPDATE employee SET deduction='$deduction', overtime='$overtime', bonus='$bonus' WHERE emp_id='$id'");

if ($sql) {
    ?>
    <script>
      alert('Account successfully updated.');
      window.location.href='home_employee.php';
    </script>
    <?php
} else {
    echo "Invalid";
}
?>