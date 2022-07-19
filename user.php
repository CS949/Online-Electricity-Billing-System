<html>

<head>
    <style>
        .topnav {
            overflow: hidden;
            background-color: #333;
        }
        
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }
        
        .topnav-right {
            float: right;
        }
        
        .first {
            width: 1500px;
            height: 630px;
            border: 5px solid rgb(66, 0, 128);
        }
        * {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  position: absolute;
  left: 60px;
  margin: 20px;
  max-width: 600px;
  padding: 16px;
  background-color: white;
  color: black;
}


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.second{
    padding-left: 800px;
    
}
td{
    padding: 10px;
}
    </style>
</head>

<body style="background-color: black;color: white;">
    <div class="topnav">
        <a class="active" href="home.php">Home</a>
        <div class="topnav-right">
            <a href="customer.php">Customer  </a>
            <a href="bill.php">Billing</a>
            <a href="user.php">Users</a>
            <a href="logut.php">Logout</a>
        </div>
    </div>
    <div class="first">
        <h1 style="text-align: center;">USERS</h1>
<form method="POST" action="users.php" style="border:1px solid #ccc">

  <div class="container"style="padding-left:30px">
    <p>Please fill in this form to create an user account.</p>
    <hr>

    <label for=" Username"><b> User Name</b></label>
    <input type="text"  placeholder="Enter username" name="Username" required><br>

    <label for="Fullname"><b>Full Name</b></label>
    <input type="text"  placeholder="Enter full name" name="Fullname" required><br>

    <label for="Pass"><b>Password</b></label>
    <input type="text"  placeholder="Enter pass" name="Pass" required><br>

    <div class="clearfix">
      <a href="user.php"> <button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" name="user" class="signupbtn">Add User</button>
    </div>
  </div>
</form>
<?php session_start();

?>


<div class="second">
<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM user");

echo "<table border='5' >
<tr>
<th>id</th>
<th>Username</th>
<th>FullName</th>
<th>Pass</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['Username'] . "</td>";
  echo "<td>" . $row['Fullname'] . "</td>";
  echo "<td>" . $row['Pass'] . "</td>";
  echo "<td><a  href='edituser.php?id=".$row['id']."'>Edit </a>| ";
 echo "<a  href='deluser.php?id=".$row['id']."'>Del</td>";
  echo "</tr>";
  }
echo "</table>";

?>

<p>&nbsp;</p>

</div>
    </div>
</body>

</html>