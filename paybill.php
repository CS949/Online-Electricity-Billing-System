<?php
include 'db.php';
   
	$customer_id=$_POST['customer_id'] ;
	$prev = $_POST['prev'];
	$pres = $_POST['pres'];
	$price = $_POST['price'];
	$dates=$_POST['dates'] ;
	
	mysqli_query($conn,"INSERT INTO  bill (customer_id,prev,pres,price,dates) 
		 VALUES ('$customer_id','$prev','$pres','$price','$dates')"); 
				
				echo '<script>alert("success")</script>';
				echo '<script>windows: location="bill.php"</script>'; 