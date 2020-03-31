<?php
	
		require("db.php");
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
		@$id 			= $_POST['ot_id'];
		@$overtime		= $_POST['rate'];


		$sql = mysqli_query($conn,"UPDATE overtime SET rate='$overtime' WHERE ot_id='1'");

		if($sql)
		{
			?>
		        <script>
		            alert('Overtime rate per hour successfully changed...');
		            window.location.href='home_salary.php';
		        </script>
		    <?php 
		}
		else {
			echo "Not Successfull!"; 
		}
 ?>