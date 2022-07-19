<?php
 session_start();
 
include 'db.php';
 $login = mysqli_query($conn,"SELECT * FROM customer WHERE (Firstname = '" .($_POST['Firstname']) . "') and (Phoneno = '" .($_POST['Phoneno']) . "')");
 $row=mysqli_fetch_array($login);  
 
 if($row){
 $_SESSION['id'] = $row['id'];

 echo '<script>windows: location="custhome.php"</script>';
	}
	else {
        echo '<script>alert("invalid username/ password")</script>';
        echo '<script>windows: location="index.php"</script>';
		}
 
 
?>
