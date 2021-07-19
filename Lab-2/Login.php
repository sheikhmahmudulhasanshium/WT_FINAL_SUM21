<?php include 'main_header.php';
	include 'controllers/UserController.php';
?>
<html>
    <body>
        <h1>Log-in</h1>
        <form action="" method="post" align="center">
            Username: <input type="text" name="uname" value="<?php echo $uname;?>"><br>
             <span><?php echo $err_uname; ?></span><br>
            Password: <input type="password" name="pass" value="<?php echo $pass;?>"><br>
             <span><?php echo $err_pass; ?></span><br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>