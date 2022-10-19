<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $hostname = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname ='lab5';
    $connect = mysqli_connect($hostname,$dbuser,$dbpass,$dbname);

    $username = $_POST['username'];
    $pass = $_POST['pass'];

    if(!$connect){
        die('could not connect :<br>'. mysqli_connect_error($connect));
    }else{
        echo "connected successfully";
    }

    $sql = "SELECT * FROM register WHERE username = '$username' and password = '$pass'";
    $returnVal = mysqli_query($connect, $sql);

    $row = mysqli_fetch_array($returnVal,MYSQLI_ASSOC);
    // $active = $row['active'];
    $count = mysqli_num_rows($returnVal);  
          
    if($count == 1){  
        // echo "<h1><center> Login successful </center></h1>";
        header('location: http://localhost/labs/lab-5_welcome.php');
    }  
    else{  
        // var_dump($count);
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }
    mysqli_close($connect);
    session_destroy();
    setcookie("PHPSESSID", "5t1131i5i5rrdn16gpc144936m", time()-1);
}
?>

<html>
    <style>
        body{
        justify-content: center;
        }
        form{
            box-sizing: border-box;
            padding: 2px;
            margin: auto;
            border-radius: 2px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input{
            border-radius: 4px;
        }
        input[type=submit]{
            background-color: grey;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        input[type=submit]:hover{
            background-color: green;
        }
    </style>
    <body>
        
        <form action="lab-5_login.php" method="POST">
        <h2>Login</h2>
            <label for="">Username :</label>
            <input type="text" name="username"><br>
            <label for="">Password :</label>
            <input type="password" name="pass"><br>
            <input type="submit" value="Login" name="login">
        </form>
    </body>
</html>