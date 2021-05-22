<?php
include("register_db.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rlform.css">
    <title>Register</title>
</head>
<body>
    <div class="rlform">
        <div class="rlform rlform-wrapper">
            <div class="rlform-box">
                <div class="rlform-box-inner">
                    <form action="register_db.php" method="post" onSubmit="return validPassword()">
                        <p>Let create your account</p>
                        <div class="rlform-group">
                            <?php 
                                if (@$_GET['Empty']==true) 
                                {?>
                                 <?php   echo $_GET['Empty']?>
                                <?php }
                            ?>
                        </div>
                        <div class="rlform-group">
                        <label for="fullName">Full Name</label>
                            <input type="text" name="fullName" class="rlform-input" id="fullName" >            
                        </div>
                        <div class="rlform-group">
                            <label for="email"> Email</label>
                            <input type="email" name="email" class="rlform-input" id="email" >            
                        </div>
                        <div class="rlform-group">
                            <label for="password">Password</label>
                            <input type="password" name="newPassword" value="" class="rlform-input" id="newPass" >
                        </div>
                        <div class="rlform-group">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" name="conformPassword" value="" class="rlform-input" id="conformPass" >
                        </div>
                        <button class="rlform-btn" name="signUp">Sign Up</button>
                        <div class="text-foot">Already have an account? <a href="login.php">Login</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validPassword()
        {
            if(newPassword.value!=conformPassword.value)
            {
                conformPass.setCustomValidity("Password do not match.");
            }
        }
    </script>
</body>

</html>