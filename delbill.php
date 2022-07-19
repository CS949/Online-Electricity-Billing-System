<html>
    <head>
      <style>
          body{
              background-color: black;
              color: white;
              text-align: center;  
              padding-left: 400px;
              padding-top: 50px;
          }
          .first{
            width: 500px;
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
        <div class="first">
        <?php session_start(); ?>
<?php
 include 'db.php';
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM bill WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
			

?>
<form action="billdel.php" method="post">
<h1>Are you sure you want to delete this record</h1>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" name="ok" value="Delete">
</form>
<div class="back"><a href="bill.php">Back</a></div>
</div>
</body>
</html>