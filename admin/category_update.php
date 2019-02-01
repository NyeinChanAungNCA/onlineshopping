<h1 align="center">Category Update Form</h1>
<form>
	<table align="center">
		<tr>
			<td>Select CategoryId:</td>
			<td>
				<select name="categoryid" id="categoryid" onchange="ChangeCategoryID(this.value)" class="h1">
				<option value="">--Please select--</option>
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
	</table>
</form>
	<form method="post" action="category_update_info.php"  class="heightconfig">
	<table id="res" align="center">
	</table>
	</form>