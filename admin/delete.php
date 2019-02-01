<form action="delete_info.php" method="post" class="heightconfig">
	<table align="center">
		<tr>
			<td>Select ItemID:</td>
			<td>
				<select name="itemid" class="h1">
				<option>--Please select--</option>
					<?php
						include("db.php");
						$query="select itemid from itemtb";
						$ret=mysqli_query($con,$query);
						while($_row=mysqli_fetch_array($ret))
						{
							echo '<option>'.$_row["itemid"].'</option>';
						}
						
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Delete" class="btnstyle" />
			</td>
		</tr>
	</table>
</form>