<?php
$categoryid=$_GET["categoryid"];
include("db.php");
$str="SELECT categoryid,categorydescription FROM categorytb WHERE categoryid=$categoryid";

$res=mysqli_query($con,$str);
$row=mysqli_fetch_array($res);
echo '
    <input type="hidden" value="'.$row["categoryid"].'" name="categoryid">';
	echo '
     <tr>
    	<td><label for="categorydesc">Description:</label></td>
        <td><input type="text" id="categorydesc" name="categorydesc" required  value="'.$row['categorydescription'].'"></td>
    </tr>   
     <tr>
         <td><input type="submit" value="Update" class="btnstyle"/></td>
         <td><input type="reset" value="Cancel" class="btnstyle"/></td>        
     </tr> '; 
			
?>
  