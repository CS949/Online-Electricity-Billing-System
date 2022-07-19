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
<form action="userdel.php" method="post">
<h1>Are you sure you want to delete this record <?php echo $Username; ?></h1>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" nsme="ok" value="Delete">
</form>
<div class="back"><a href="user.php">Back</a></div>
</div>
</body>
</html>