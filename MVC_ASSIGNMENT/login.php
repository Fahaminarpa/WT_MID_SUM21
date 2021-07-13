<?php
    include 'controllers/user_control.php';
?>
<html>
    <head>

    </head>
    <body>
    <h5><?php echo $err_db; ?></h5>
        <form action="" method="post">
            <fieldset>
                <legend><h1>Login</h1></legend>
            <table align="center">
                <tr>
                    <td>
                        <input type="text" name="username" " placeholder="Enter Username">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="password" name="password"  ?>" placeholder="Enter Password">
                    
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="login" value="Login">
                    </td>
                </tr>
                <tr>
                    <td>
                        Not registed yet?
                        <a href="signup.php">Signup
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
    </body>
</html>



<?php

?>

