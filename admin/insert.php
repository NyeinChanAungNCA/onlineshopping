<form action="insert_info.php"  method="post" enctype="multipart/form-data" class="heightconfig">
<table align="center">
	<tr>
		<td>Select Brand:</td>
		<td>
			<select name="brandid">
			<option>---Please Select Brand---</option>
				<?php
					include("db.php");
					$query="select brandid, branddescription from brandtb";
					$ret=mysqli_query($con,$query);
					while($_row=mysqli_fetch_array($ret))
					{
						echo '<option value="'.$_row["brandid"].'">'.$_row["branddescription"]
						.'</option>';
					}
					
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Select Category:</td>
		<td>
			<select name="categoryid">
			<option>-Please Select Category-</option>
				<?php
					include("db.php");
					$query="select categoryid, categorydescription from categorytb";
					$ret=mysqli_query($con,$query);
					while($_row=mysqli_fetch_array($ret))
					{
						echo '<option value="'.$_row["categoryid"].'">'.$_row["categorydescription"]
						.'</option>';
					}
					
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			Price:
		</td>
		<td>
			<input type="text" name="price" size="24" />
		</td>
	</tr>
	<tr>
		<td>
			Description:
		</td>
		<td>
			<textarea name="des" cols="21"></textarea>
		</td>
	</tr>
	<tr>
		<td>
			Upload Image:
		</td>
		<td>
			<input type="file" name="image"/>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" value="Insert" class="btnstyle" />
		</td>
		<td>
			<input type="reset" value="Cancel" class="btnstyle" />
		</td>
	</tr>
</table></form>