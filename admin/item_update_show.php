<?php
$itemid=$_GET["itemid"];

 include("db.php");
$str="SELECT itemid,price,description FROM `itemtb` WHERE itemid=$itemid";

$res=mysqli_query($con,$str);
$row =mysqli_fetch_array($res);
echo '
    <input type="hidden" value="'.$row["itemid"].'" name="itemid">';
	echo '
	 <tr>
    	<td><label for="price">Price:</label>  </td>
        <td> <input type="text" id="price" name="price" required value="'.$row['price'].'"></td>
    </tr>
     <tr>
    	<td><label for="desc">Description:</label>  </td>
        <td><input type="text" id="desc" name="desc" required  value="'.$row['description'].'"></td>
    </tr>   
     <tr>
             <td><input type="submit" value="Update" class="btnstyle"/></td>
             <td><input type="reset" value="Cancel" class="btnstyle"/></td>        
            </tr> '; 
			
?>
  