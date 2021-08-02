<?php
require_once 'controllers/controller.php';
?>

<html>
    <body> <fieldset>
	
	<table align="center">
	<tr>
		<td colspan="2">
		<h1>Change Password</h1>
		<form action="MyLogin.php" method="post">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			In order to <b> protect your account </b>, make sure your <br>
			password:
			<ul>
				<li>
					is longer than 8 character
				</li>
				<li>
					has atleast 1 lowercase and 1 uppercase letters
				</li>
				<li> 
					does not match or significant contain your <br>
					username, e.g. do not use 'username123'
				</li>
				<li>
					has minimum 1 '#' and '?'
				</li>
				<li>
					is not a member of this <a target="_blank" href="https://en.wikipedia.org/wiki/List_of_the_most_common_passwords">list of common passwords</a>
				</li>
				<li>
					is not a member of the <a a target="_blank" href="https://gcn.com/articles/2018/03/05/haveibeenpwned-gov-users.aspx"> have been pwned</a> breach 
					<br>database
				</li>

			</ul>
		</td>
	</tr>
	<td> <b> Change Password</td>
	<td>: </b><input name="password" value = "<?php echo $password;?>" type="password" placeholder="Enter Password...">
	<span><br><?php echo $err_password; ?></span></td><br>
	</tr>
	<tr>
	<td> <b> Confirm Password</td>
	<td>: </b><input name="confirm_password" value = "<?php echo $confirm_password;?>" type="password" placeholder="Enter Password again...">
	<span><br><?php echo $err_confirm_password; ?></span></td>
	</tr>

	<tr>
		
			<td colspan="2" align="center"> 
			<!--	<input type="submit" value="Change Password" >	-->
				<?php  
                echo    "<form  action='MyLogin.php' method='post'>";
                echo    "<input type='submit' value='Change Password'>";
                echo    "</form>";
                ?>	
			</a> 
		</td>
	</tr>
	</fieldset>
	</table>
	</form>
	
	</body>
</html>
		