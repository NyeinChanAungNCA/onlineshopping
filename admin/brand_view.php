<?php 
	include("db.php");
	$query="select brandid,branddescription from brandtb";
	$ret=mysqli_query($con,$query);
	$num_result=mysqli_num_rows($ret);
	echo"<div class='adminview_div'>";
	echo"<table border='1' width='600px' height='200px' align='center' class='adminview'>";
    echo"<tr>";
    echo"<th align='center'>No</th>";
    echo"<th align='center'>Brand Name</th>";
    echo"</tr>";
	for ($i=0; $i<$num_result; $i++)
      {
        $row=mysqli_fetch_array($ret);
        echo"<tr>";   
       	echo"<td align='center'>".($i+1)."</td>";
        echo"<td>".$row["branddescription"]."</td>";
        echo"</tr>";
      }
     echo "</table>";
	 echo "</div>";
?>