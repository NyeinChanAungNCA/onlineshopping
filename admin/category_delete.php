<h1 align="center">Category Delete Form</h1>
<form action="category_delete_info.php" method="post" class="heightconfig">
	<table align="center">
		<tr>
			<td>Select CategoryID:</td>
			<td>
				<select name="categoryid" class="h1">
				<option>--Please select--</option>
					<?php
						include("db.php");
						$query="select categoryid from categorytb";
						$ret=mysqli_query($con,$query);
						while($_row=mysqli_fetch_array($ret))
						{
							echo '<option>'.$_row["categoryid"].'</option>';
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