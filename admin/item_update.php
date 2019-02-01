<h1 align="center">Item Update Form</h1>
<form>
	<table align="center">
		<tr>
			<td>Select ItemId:</td>
			<td>
				<select name="itemid" id="itemid" onchange="ChangeID(this.value)" class="h1">
				<option value="">--Please select--</option>
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
	</table>
</form>
	<form method="post" action="item_update_info.php"  class="heightconfig">
	<table id="res" align="center">
	</table>
	</form>