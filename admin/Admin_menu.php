	<ul>
		<li><a href="index.php" title="Home">Home</a></li>
		<li><a href="index.php?id=Insert" title="Insert">Insert</a></li>
		<li><a href="index.php?id=Update" title="Update">Update</a></li>
		<li><a href="index.php?id=Delete" title="Delete">Delete</a></li>
		<li><a href="index.php?id=view" title="View">View</a></li>
		<?php
		if(isset($_SESSION["adminid"])){
		
		
			echo '<li><a href="logout.php" title="Logout">Logout</a></li>';
		}
		?>
	</ul>