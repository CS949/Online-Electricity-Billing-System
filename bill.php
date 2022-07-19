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
            height: 600px;
            border: 5px solid rgb(66, 0, 128);
        }
        .second{
           padding-left: 35%;
           padding-top: 10px;
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
        <h1 style="text-align: center;">BILLING</h1>
        <hr>
        <div class="second">
<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM customer");

echo "<table border='5' >
<tr>
<th>id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Phoneno</th>
<th>Address</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['Firstname'] . "</td>";
    echo "<td>" . $row['Lastname'] . "</td>";
    echo "<td>" . $row['Phoneno'] . "</td>";
    echo "<td>" . $row['Addss'] . "</td>";
  echo "<td><a  href='Billing.php?id=".$row['id']."'>Bill </a>| ";
 echo "<a  href='viewbill.php?id=".$row['id']."'>View Bill</td>";
  echo "</tr>";
  }
echo "</table>";

?>

<p>&nbsp;</p>

</div>
    </div>
</body>

</html>