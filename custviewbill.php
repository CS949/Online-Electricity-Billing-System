html>
<head>
  <style>
    body{
      background-color: black;
      
      padding-left: 400px;
      padding-top: 50px;
      
    }
    table{
      width:300px;
    }
    .second{
     
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
<div class="second">
<h4 style="color:#F00;">Note: Bill Amount = Total Consumption * Price/Cu.m</h4>
<?php
include 'db.php';
$id =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM bill where customer_id='$id'");

echo "<table border='1' bgcolor='#fff'>
<tr>
<th>Id</th>
<th>Previous Reading</th>
<th>Present Reading</th>
<th>Consuption</th>
<th>Price</th>
<th>Date</th>
<th>Bill Amount</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
	  $prev=$row['prev'];
	  $pres=$row['pres'];
	  $price=$row['price'];
	  $totalcons=$pres - $prev;
	  $bill=$totalcons * $price;
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $prev . "</td>";
  echo "<td>" . $pres . "</td>";
  echo "<td>". $totalcons."</td>";
  echo "<td>" . $price . "</td>";
  echo "<td>" . $row['dates'] . "</td>";
  echo "<td>" . $bill . "</td>";
 echo "<td><a rel='facebox' href='custviewpayment.php?id=".$row['id']."'>View </a>| ";
 echo "<a rel='facebox' href='pay.php?id=".$row['id']."'>Pay</td>";
  echo "</tr>";
  }
echo "</table>";
?>
<br>
<div class="back"><a href="custbill.php">Back</a></div>
</div>
</body>
</html>