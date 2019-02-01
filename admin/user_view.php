<?php 
	include("db.php");
	$query="select * from usertb";
	$ret=mysqli_query($con,$query);
	$num_result=mysqli_num_rows($ret);
	echo"<div class='adminview_div'>";
	echo"<table border='1' width='600px' align='center' class='adminview'>";
    echo"<tr>";
    echo"<th align='center'>No</th>";
    echo"<th align='center'>User Name</th>";
	echo"<th align='center'>Email Address</th>";
	echo"<th align='center'>Country</th>";
	echo"<th align='center'>Phone No</th>";
	echo"<th align='center'>Gender</th>";
    echo"</tr>";
	for ($i=0; $i<$num_result; $i++)
      {
        $row=mysqli_fetch_array($ret);
        echo"<tr>";   
       	echo"<td align='center'>".($i+1)."</td>";
        echo"<td>".$row["username"]."</td>";
		echo"<td>".$row["email"]."</td>";
		echo"<td>".$row["country"]."</td>";
		echo"<td>".$row["phoneno"]."</td>";
		echo"<td>".$row["gender"]."</td>";
        echo"</tr>";
      }
     echo "</table>";
	 echo "</div>";
?>