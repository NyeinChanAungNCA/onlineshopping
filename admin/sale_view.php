<?php 
	include("db.php");
	$query="select * from salestb";
	$ret=mysqli_query($con,$query);
	$num_result=mysqli_num_rows($ret);
	echo"<div class='adminview_div'>";
	echo"<table border='1' width='600px' align='center' class='adminview'>";
    echo"<tr>";
    echo"<th align='center'>SaleID</th>";
    echo"<th align='center'>ItemID</th>";
	echo"<th align='center'>Quantity</th>";
	echo"<th align='center'>UserID</th>";
	echo"<th align='center'>SalesDate</th>";
    echo"</tr>";
	for ($i=0; $i<$num_result; $i++)
      {
        $row=mysqli_fetch_array($ret);
        echo"<tr>";   
       	echo"<td align='center'>".$row["salesID"]."</td>";
        echo"<td>".$row["itemID"]."</td>";
		echo"<td>".$row["quantity"]."</td>";
		echo"<td>".$row["userID"]."</td>";
		echo"<td>".$row["salesDate"]."</td>";
        echo"</tr>";
      }
     echo "</table>";
	 echo "</div>";
?>