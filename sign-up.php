<?php
    session_start();

    include("db_conn.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone_num = $_POST['phone_num'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            $users_id = random_num(20); 
            $query = "INSERT INTO users (f_name, l_name, users_id, user_name, password, address, email, phone_num) 
            VALUES('$f_name', '$l_name', '$users_id', '$user_name', '$password', '$address', '$email', '$phone_num')";
            
            mysqli_query($conn, $query);
            header("Location: login.php");
            die;
        }
        else{
            echo "Please enter your Username and Password";
        }

    }
    
 
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <style>

</style>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Complex</title>
    <link rel="icon" href="/Logo/Seal_of_Santa_Rosa,_Laguna.png">
    <link rel="stylesheet" href="https//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="styles.css">
    <img class="Logo2" src="Logo/Seal_of_Santa_Rosa,_Laguna.png">   


    <div class="H1">
        <p>City Government of Santa Rosa Laguna<br>Santa Rosa Multi-Purpose Complex<br>4026</p>
    </div>
</head>
<body>

<form method="POST">
    <div class="container2">
       
        <div class="header2">SIGNUP</div>       
        <input type="text" id="fname" name="f_name" placeholder="First Name" required>
        <input type="text" id="lname" name="l_name" placeholder="Last Name" required>
        <br>
        <input type="text" id="address" name="address"placeholder="Complete Address" required>
        <br>
        <input type="tel" id="num" name="phone_num"placeholder="Enter your number" required>
        <br>
        <input type="text" id="email" name="email" placeholder="Email" required>
      
        <input type="text" id="username" name="user_name" placeholder="Username" required>
        <br>
        <input type="password" id="pass" name="password"placeholder="Password" required>
        <br>
        <input type="password" id="Scpass" placeholder="Confirm Password" required>
       <br>
        <input type="checkbox" id="terms" required>
        <label for="terms"></label><span>Agree with <a href="#">Terms & Conditions</a></span>
        <br>
        <br>
        <button>Submit</button></a>

</form>
<a href="login.php"><button id="btn2">Cancel</button></a>
    </div>
</body>
</html>