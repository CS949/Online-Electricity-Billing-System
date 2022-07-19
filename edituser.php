<html>
<head>
  <style>
    body{
      background-color: black;
      color: white;
      padding-left: 500px;
      padding-top: 50px;
      
    }
    table{
      width:300px;
    }
    .second{
     
      width: 300px;
      border: 10px solid violet;
      padding: 50px;
      margin: 20px;
    }
    .back{
      text-align: center;
      font-size: larger;
    }
  </style>
</head>
<body>
<?php session_start(); ?>
<?php
include 'db.php';
$user_id =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM user WHERE id  = '$user_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$Username= $test['Username'] ;					
				$Fullname=$test['Fullname'] ;
				$Pass=$test['Pass'] ;
				
?>


  <form method="post" action="useredit.php">
  <div class="second">
  <p><h1>User Update</h1></p>
<table border='5'>
  <tr>
    <td width="107">User Id:</td>
    <td width="315"><input type="text" name="id" value="<?php echo $id; ?>" /></td>
  </tr>
  <tr>
    <td>Username:</td>
    <td><input type="text" name="Username" value="<?php echo $Username; ?>"/></td>
    </tr>
    <tr>
    <td>Fullname:</td>
    <td><input type="text" name="Fullname"value="<?php echo $Fullname; ?>" /></td>
    </tr>
    <tr>
  </tr>
  <tr>
  <td>Pass:</td>
    <td><input type="text" name="Pass" value="<?php echo $Pass; ?>"/></td></tr>
 <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="user" value="Edit"></td>
	</tr>
</table>
<div class="back"><a href="user.php">Back</a></div>
</div>
</body>
</html>