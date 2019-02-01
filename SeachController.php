<?php
	$itemname=$_GET['itemname'];
	//echo $itemname;
	include("db.php");
	$sql="SELECT * FROM brandtb where branddescription like '$itemname%'";
	$query=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($query))
	{
	?>
		<p>
        	<a href="itemshow.php?brandid=<?php echo $row['brandid']?>">
				<?php echo $row["branddescription"];?>
            </a>
        </p>
	<?php		
	}

?>