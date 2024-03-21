<?php
include('../includes/connection.php');
			$zz = $_POST['id'];
			$fname = $_POST['firstname'];
		    $lname = $_POST['lastname'];
			$phone = $_POST['phone'];
	   	
		
	 			$query = 'UPDATE User set FIRST_NAME ="'.$fname.'",
					LAST_NAME ="'.$lname.'", PHONE_NUMBER="'.$phone.'" WHERE
					USER_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("You've Update User Successfully.");
			window.location = "User1.php";
		</script>