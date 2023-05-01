<?php
session_start();

   include("db_conn.php");
   include("function.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        $query = "SELECT * FROM users WHERE user_name = '$user_name' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] == $password)
                {
                    $_SESSION['users_id'] = $user_data['users_id'];
                    header("Location: index.php");
                    die();
                }
            }
        }
        echo "Wrong username or password!";
    }else{
        echo "Please enter your username or password!";
    }
  }
?>
<!--------------LOGIN PAGE----------->

<style>

</style>
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
            <form method="POST">
                <input id="email" type="text" name="user_name" placeholder="Email" >
                <input id="pass"type="password" name="password" placeholder="Password" >    
                <a href="#">Forgot Password?</a><br><br><br>
                <button type="submit">Login</button></a>
               
            </form>
            <a href="sign-up.php"><button type="signup" id="btn2">Signup</button></a>
    </div>

<!-----
    <script>
            function isvalid(){
                var user= document.form.user_name.value;
                var pass= document.form.password.value;
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
-->
</body>
</html>
