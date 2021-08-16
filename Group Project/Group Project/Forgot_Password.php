    
<?php
    require_once 'Controller/ForgotPassController.php';
    ?>
    <html>
    <head>
		<link rel="stylesheet" href="styles/mystyles.css">
        <script src="JS/ForgotPass.js">
		
	</script>
	
	</head>
   
       <body>
       <form action="Reset_Password.php" onsubmit="return validate()" method="post">
         <!--<form action="Reset_Password.php" method="post">-->
              <table align="Center">
                  <tr>
                      <td align="Center" colspan="3">
                      <h1>
                           Forgot Your Password?
                      </h1>
                      </td>
                  </tr>
                  <tr>
                   <td rowspan="2"><img src="https://cdn4.iconfinder.com/data/icons/post-office/32/post-email-letter-message-mail-secure-protected-locked-512.png" alt="Email" height="200" width="200"></td>
                   <td><h4>
                        Enter Your email and username<br>
                       We'll email instructs on how <br>
                        to reset your password.
                   </h4></td>
                    <td>
                    <tr>
						<td align="center"><input id="uname" name="Username"  placeholder="Username" value="<?php echo $Username;?>" type="text"> <br> <span id="err_uname"><?php echo $err_Username;?></span></td>
					</tr>
					<tr><td>&nbsp;</td>
						<td ><input id="email" name="email" placeholder="email" value="<?php echo $email;?>" type="email"> <br> <span id="err_email"><?php echo $err_email;?></span> </td>
					</tr>
					
                </td>

            </tr>
            <tr>
                <td>
                    <B>Need Help?</B> Learn more about <br>
                    how to <a href="">retrieve an <br>
                    exisisting account.</a>
                </td>
            </tr>
            <tr>
                <td> <a href="login.html" target="_blank">
                    <input type="button" value="Back">
                </a>
                 </td>
                 <td> <a target="_blank" href="Reset_Password.php">
                    <input name="Reset_Password" type="submit" value="Submit">
                </a>
                </td>
               <!-- <td>
                //<?php  
                //echo    "<form  action='Reset_Password.php' method='post'>";
                //echo    "<input type='submit' value='Submit'>";
                //echo    "</form>";
                    ?></td>-->
                 
            </tr>
           </table>
       </form> 

        
    </body>
</html>
