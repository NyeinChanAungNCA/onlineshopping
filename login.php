<form action="login_check.php" method="post">
				<center>
        			<h2 align="center">Login Form</h2>
					<table border="0">
						<tr>
							<td><label for="uname"><b>Email:</b></label></td>
                            <td><input type="text" name="uname" id="uname" placeholder="aaa@gmail.com" required="required"/></td> 
						</tr>
						<tr>
							<td><label for="pwd"><b>Password:</b></label></td>
                            <td><input type="password" name="pasw" id="pwd" placeholder="passwrod" required="required"/></td>
						</tr>
                        <tr>
                            <td colspan="2" height="15px"></td>
                        </tr>
						<tr>
							<td colspan="2" align="center">
                            	<input type="submit" value="Login" class="btnstyle"/>
                                <input type="reset" value="Cancel" class="btnstyle"/>
                            </td>
						</tr>
					</table>
				</center>
			</form>