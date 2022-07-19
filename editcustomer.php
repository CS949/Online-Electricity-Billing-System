
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
$customer_id =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM customer WHERE id  = '$customer_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$Firstname= $test['Firstname'] ;					
				$Lastname=$test['Lastname'] ;
				$Phoneno=$test['Phoneno'] ;
				$Addss=$test['Addss'] ;
?>
<html>
    <div>

  <form method="post" action="customeredit.php">
  <div class="second">
  <p><h1>Customer Update</h1></p>
<table border='5'>
  <tr>
    <td width="107">Customer Id:</td>
    <td width="315"><input type="text" name="id" value="<?php echo $id; ?>" /></td>
  </tr>
  <tr>
    <td>Firstname:</td>
    <td><input type="text" name="Firstname" value="<?php echo $Firstname; ?>"/></td>
    </tr>
    <tr>
    <td>Lastname:</td>
    <td><input type="text" name="Lastname"value="<?php echo $Lastname; ?>" /></td>
    </tr>
    <tr>
  </tr>
  <tr>
    <td>Phoneno:</td>
    <td><input type="text" name="Phoneno" value="<?php echo $Phoneno; ?>" /></td>
  </tr>
  <tr>
  <td>Addss:</td>
    <td><input type="text" name="Addss" value="<?php echo $Addss; ?>"/></td></tr>
 <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="customer" value="Edit"></td>
	</tr>
</table>
<div class="back"><a href="customer.php">Back</a></div>
</div>
</body>
</html>