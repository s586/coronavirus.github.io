<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login system</title>  
    <!-- // insert style.css file inside index.html   -->
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>
<body>
<div id = "frm">  
        <h1>Login</h1>  
        <span id="UpErr"></span><br>
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <!-- <label> UserName: </label>   -->
                <input placeholder="UserName: " type = "email" id ="user" name  = "user" /><span id="UErr"></span>
                  
            </p>  
            <p>  
                <!-- <label> Password: </label>   -->
                <input placeholder="Password: " type = "password" id ="pass" name  = "pass" /> <span id="PErr"></span>
            </p>  
            <p>     
                <input type =  "submit" id = "btn" placeholder=" Login " />
                <div class="register"><a href="register.php">Create new account</a></div>
            </p>  
        </form>  
    </div>  
    <!-- // validation for empty field    -->
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    document.getElementById("UpErr").innerHTML="Username and Password is empty"  ;
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        document.getElementById("UpErr").innerHTML="Username  is empty";  
                        return false;  
                    }   
                    if (ps.length=="") {  
                        document.getElementById("UpErr").innerHTML="Password  is empty";  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>
</html>