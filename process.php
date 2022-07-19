<?php
 session_start();
 
include 'db.php';
 $login = mysqli_query($conn,"SELECT * FROM user WHERE (Username = '" .($_POST['Username']) . "') and (Pass = '" .($_POST['Pass']) . "')");
 $row=mysqli_fetch_array($login);  
 
 if($row){
 $_SESSION['id'] = $row['id'];

 echo '<script>windows: location="home.php"</script>';
	}
	else {
        echo '<script>alert("invalid username/ password")</script>';
        echo '<script>windows: location="index.php"</script>';
		}
 
 
?>
