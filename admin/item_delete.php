<h1 align="center">Item Delete Form</h1>
<form action="item_delete_info.php" method="post" class="heightconfig">
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
			<td colspan="2" align="center">
				<input type="submit" value="Delete" class="btnstyle" />
			</td>
		</tr>
	</table>
</form>