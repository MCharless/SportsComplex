<?php
    include("db_conn.php");
?>

<!--------------LOGIN PAGE----------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Complex</title>
    <link rel="icon" href="/Logo/Seal_of_Santa_Rosa,_Laguna.png">
    <link rel="stylesheet" href="https//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="styles.css">
    <img class="Logo" src="Logo/Seal_of_Santa_Rosa,_Laguna.png">   

    <div class="H1">
        <p>City Government of Santa Rosa Laguna<br>Santa Rosa Multi-Purpose Complex<br>4026</p>
    </div>
</head>
<body>
    
    <div class="container">
        <div class="header">LOGIN</div>
            <form name="form" action="home.php" onsubmit="return isvalid()" method="POST">
                <input id="email" type="text" name="uname" placeholder="Email" >
                <input id="pass"type="password" name="pwd" placeholder="Password" >    
                <a href="#">Forgot Password?</a><br><br><br>
                <button type="submit">Login</button></a>
               
            </form>
            <a href="sign-up.php"><button type="signup" id="btn2">Signup</button></a>
    </div>


    <script>
            function isvalid(){
                var user= document.form.uname.value;
                var pass= document.form.pwd.value;
                if(user.length=="" && pass.length==""){
                    alert("Please enter your Username and Password");
                    return false;
                }
                else{
                    if(user.length==""){
                    alert("Please enter your Username");
                    return false;
                }
                if(pass.length==""){
                    alert("Please enter your Password");
                    return false;
            }
        }
    }
    </script>

</body>
</html>