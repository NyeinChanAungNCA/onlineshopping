<?php
$brandid=$_GET["brandid"];
include("db.php");
$str="SELECT brandid,branddescription FROM brandtb WHERE brandid=$brandid";

$res=mysqli_query($con,$str);
$row=mysqli_fetch_array($res);
echo '
    <input type="hidden" value="'.$row["brandid"].'" name="brandid">';
	echo '
     <tr>
    	<td><label for="branddesc">Description:</label></td>
        <td><input type="text" id="branddesc" name="branddesc" required  value="'.$row['branddescription'].'"></td>
    </tr>   
     <tr>
         <td><input type="submit" value="Update" class="btnstyle"/></td>
         <td><input type="reset" value="Cancel" class="btnstyle"/></td>        
     </tr> '; 
			
?>
  