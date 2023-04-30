<?php
    include "db_conn.php";
    if(isset($_POST['submit'])){
    $user_name = $_POST['uname'];
    $password = $_POST['pwd'];
    

    $sql = "SELECT * FROM users WHERE user_name = '$user_name' AND  password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, mysqli_assoc);
    $count = mysqli_num_rows($result);
    if($count==1){
        header("Location: home.php");
    }
    else{
        echo '<script>
        window.location.href="index.php";
        alert("Login Failed. Incorrect username or password!");
      </script>';
        }
    }
?>
