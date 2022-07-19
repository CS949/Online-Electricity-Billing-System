<?php
include 'db.php';
	$id = $_POST['id'];
	mysqli_query($conn,"DELETE from bill WHERE id='$id'");

    echo '<script>alert("Data deleted successfully")</script>';
	echo "<script>windows: location='bill.php'</script>";