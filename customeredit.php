<?php
include 'db.php';
$customer_id =$_REQUEST['id'];
	$id = $_POST['id'];
	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$Phoneno=$_POST['Phoneno'];
	$Addss=$_POST['Addss'];

	mysqli_query($conn,"UPDATE customer SET id ='$id', Firstname ='$Firstname',
		 Lastname ='$Lastname', Phoneno='$Phoneno', Addss='$Addss' WHERE id = '$customer_id'");
            echo '<script>alert("Data edited successfully")</script>';
		 echo "<script>windows: location='customer.php'</script>";				
			