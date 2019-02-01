<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script type="text/javascript" src="javascript/pwdcheck.js"></script>
    <script type="text/javascript" src="jquery/cycle-plugin.js"></script>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery/chili-1.js"></script>
  <!--  <script type="text/javascript" src="../jquery/jquery_002.js"></script>-->
      
</head>
<body>
	<div id="container">
		<div id="header">
			<?php 
				include("header.php");
			?>
		</div>
		<div id="menu">
			<?php 
				include("menu.php");
			?>
		</div>
		<div id="register">
			<div id="main" align="center">
				<form action="register_info.php" method="post">
					
						<h2 align="center">Register Form</h2>
						<table align="center" width="400px">
							<tr>
								<td><label for="uname"><b>Username:</b></label></td>
								<td><input type="text" name="name" id="uname" placeholder="Username" required/></td>
							</tr>
							<tr>
								<td><label for="pwd"><b>Password:</b></label></td>
								<td> <input type="password" name="pass" id="pwd" placeholder="Password" onFocus="Change()" required/></td>
							</tr>
							<tr>
								<td><label for="cpwd"><b>Confirm Password:</b></label></td>
								<td><input type="password" name="pass" id="cpwd" onBlur="checkpwd()" placeholder="Confirm password"/required></td>
							</tr>
                            <tr>
                            	<td colspan="2"><span id="show" style="color:#F00"></span></td>
                            </tr>
							<tr>
								<td><label for="email"><b>Email:</b></label></td>
								<td> <input type="email" name="email" id="email" placeholder="someone@gmail.com" onBlur="CheckEmail(this.value)" required/></td>
							</tr>
                            <tr>
                            	<td colspan="2" id="emailerror"></td>
                            </tr>
							<tr>
								<td><label for="country"><b>Select Country:</b></label></td>
								<td><select name="country" id="country" required>
                                		<option>--Please Select--</option>
										<option>Myanmar</option>
										<option>India</option>
										<option>Thailand</option>										
										<option>China</option>
									 </select></td>
							</tr>
							<tr>
								<td><label><b>Gender:</b></label></td>
								<td><input type="radio" name="sex" value="male" id="male" required/>
									<label for="male"><b>Male</b></label>
                                    <input type="radio" name="sex" value="female" id="female" required/>
									<label for="female"><b>Female</b></label>
								</td>
							</tr>
							<tr>
								<td><label for="phno"><b>Phone No:</b></label></td>
								<td><input type="text" name="phone" id="phno" placeholder="phone no" required/></td>
							</tr>
                            <tr>
                                <td colspan="2" height="25px"></td>
                            </tr>
							<tr>
								<td colspan="2" align="center">
                                	<input type="submit" value="Register" class="btnstyle"/>
                                    <input type="reset" value="Cancel" class="btnstyle"/>
                                </td>
							</tr>
						</table>
				
				</form>
             
		</div>
		
		<div id="footer">
			<?php 
				include("footer.php");
			?>
		</div>
	
	</div>
</body>
</html>
