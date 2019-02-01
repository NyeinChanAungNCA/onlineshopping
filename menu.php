
	<ul>
		<!--<li><a href="index.php" title="Home">Home</a></li>-->
       <li><a href="index.php" title="home">Home</a></li>
		<li><a href="Register.php" title="Register">Register</a></li>
		<li><a href="#" title="brand">Brand</a>
			<ul class="uldown">
					<?php 
						include("db.php");
						$query="select * from brandtb";
						$ret=mysqli_query($con,$query);
						$num_row=mysqli_num_rows($ret);
						for($i=0; $i<$num_row; $i++)
						  {
							  $row=mysqli_fetch_array($ret);
					?>
						<li><a href="itemshow.php?brandid=<?php echo $row['brandid']?>">
						<?php echo $row["branddescription"]?></a></li>
					<?php
						  }
					?>
			</ul>
		</li>
        <li><a href="#" title="category">Category</a>
			<ul class="uldown">
					<?php 
						include("db.php");
						$query="select * from categorytb";
						$ret=mysqli_query($con,$query);
						$num_row=mysqli_num_rows($ret);
						for($i=0; $i<$num_row; $i++)
						  {
							  $row=mysqli_fetch_array($ret);
					?>
						<li><a href="itemshow.php?categoryid=<?php echo $row['categoryid']?>">
						<?php echo $row["categorydescription"]?></a></li>
					<?php
						  }
					?>
			</ul>
		</li>
		<li>
        	<a href="viewcart.php" title="viewcart">
            	Cart(<?php 
				if(isset($_SESSION['cart']))
					echo sizeof($_SESSION['cart']);
				else
					echo "0";
				
				?>)
            
            </a></li>
		<?php
		if(isset($_SESSION["uid"])){
		
		
			echo '<li><a href="logout.php" title="Logout">Logout</a></li>';
		}
		?>
		<li><a href="search.php" title="Contact">Search</a></li>
	</ul>