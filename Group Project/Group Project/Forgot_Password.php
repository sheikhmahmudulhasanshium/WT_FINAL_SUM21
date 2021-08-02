    
<?php
    require_once 'controllers/controller.php';
    ?>
    <html>
    <head>
		<link rel="stylesheet" href="styles/mystyles.css">
	</head>
   
       <body>
         <form action="Reset_Password.php" method="post">
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
                    <b>Your Email</b>  <br>
                    <input type="text" name="email" id="email" value = "<?php echo $email;?>" placeholder="Enter Email..." >
                    <span> <br> <?php echo $err_email;?></span><br>
                    <b>Username</b>  <br>
                    <input type="text" name="username" id="username"  value = "<?php echo $username;?>" placeholder="Enter your username...">
                    <span> <br><?php echo $err_username;?> </span>
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
                 <td><!-- <a target="_blank" href="Reset_Password.php">
                    <input type="submit" value="Submit">
                </a>-->
                <?php  
                echo    "<form  action='Reset_Password.php' method='post'>";
                echo    "<input type='submit' value='Submit'>";
                echo    "</form>";
                    ?>
                 </td>
            </tr>
           </table>
       </form> 

        
    </body>
</html>
