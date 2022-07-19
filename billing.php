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

 <form method="post" action="paybill.php">
<div class="second">
 <table border="5">
 <p><h1>Customers Bill</h1></p>
 <h3>Name: <?php echo $Firstname.'&nbsp;' .$Lastname?></h3>
<p><?php $dates=date('y/m/d');
 echo $dates;?></p>
  <tr>
  <input type="hidden" name="customer_id" value="<?php echo $id; ?>" />
  <input type="hidden" name="dates" value="<?php echo $dates; ?>" />
    <td width="118">Previous Reading:</td>
    <td width="66"><input type="text" name="prev"  /></td>
  </tr>
  <tr>
    <td>Present Reading:</td>
    <td><input type="text" name="pres"  /></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price" value="2.66"  /></td>
  </tr>
   <tr>
    <td><input type="submit" name="total" value="Add"  /></td>
  </tr>
</table>
</form>
<div class="back"><a href="bill.php">Back</a></div>
</div>
</body>
</html>