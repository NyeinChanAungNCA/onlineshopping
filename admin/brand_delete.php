<h1 align="center">Brand Delete Form</h1>
<form action="brand_delete_info.php" method="post" class="heightconfig">
	<table align="center">
		<tr>
			<td>Select BrandID:</td>
			<td>
				<select name="brandid" class="h1">
				<option>--Please select--</option>
					<?php
						include("db.php");
						$query="select brandid from brandtb";
						$ret=mysqli_query($con,$query);
						while($_row=mysqli_fetch_array($ret))
						{
							echo '<option>'.$_row["brandid"].'</option>';
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