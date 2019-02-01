<h1 align="center">Brand Update Form</h1>
<form>
	<table align="center">
		<tr>
			<td>Select BrandId:</td>
			<td>
				<select name="brandid" id="brandid" onchange="ChangeBrandID(this.value)" class="h1">
				<option value="">--Please select--</option>
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
	</table>
</form>
	<form method="post" action="brand_update_info.php"  class="heightconfig">
	<table id="res" align="center">
	</table>
	</form>