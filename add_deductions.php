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
		
		@$id 			= $_POST['deduction_id'];
		@$philhealth 	= $_POST['philhealth'];
		@$bir 			= $_POST['bir'];
		@$gsis 			= $_POST['gsis'];
		@$love 			= $_POST['pag_ibig'];
		@$loans 		= $_POST['loans'];


		$sql = mysqli_query($conn,"UPDATE deductions SET bir='$bir', gsis='$gsis', pag_ibig='$love', loans='$loans', philhealth='$philhealth' WHERE deduction_id='1'");

		if($sql)
		{
			?>
		        <script>
		            alert('Deductions successfully updated...');
		            window.location.href='home_deductions.php';
		        </script>
		    <?php 
		}
		else {
			echo "Not Successfull!"; 
		}
 ?>