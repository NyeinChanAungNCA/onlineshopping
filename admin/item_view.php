<?php 
	include("db.php");
	$query="select i.itemid,i.price,i.image,i.description,b.branddescription,c.categorydescription from itemtb i, brandtb b,categorytb c where i.brandid=b.brandid and i.categoryid=c.categoryid";
	$ret=mysqli_query($con,$query);
	$num_result=mysqli_num_rows($ret);
	echo"<table border='1' width='100%' class='adminview'>";
    echo"<tr>";
    echo"<th align='center'>No</th>";
    echo"<th align='center'>Brand Name</th>";
    echo"<th align='center'>Category</th>";
    echo"<th align='center'>Price</th>";
	echo"<th align='center'>Desctiption</th>";
	echo"<th align='center'>Image</th>";
    echo"</tr>";
	for ($i=0; $i<$num_result; $i++)
      {
        $row=mysqli_fetch_array($ret);
        echo"<tr>";   
       	echo"<td align='center'>".($i+1)."</td>";
        echo"<td>".$row["branddescription"]."</td>";
    		echo"<td>".$row["categorydescription"]."</td>";
    		echo"<td>".$row["price"]."</td>";
    		echo"<td>".$row["description"]."</td>";
    		echo"<td align='center'>";
		?>
        	<img src="../images/<?php echo $row['image']?>" width="150px" height="100px" />
        <?php
		echo"</td>";
        echo"</tr>";
      }
     echo "</table>";
?>