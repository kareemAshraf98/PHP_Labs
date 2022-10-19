<html>
    <style>
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
        input[type=submit],input[type=reset]{
            background-color: grey;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        input[type=submit]:hover,input[type=reset]:hover{
            background-color: green;
        }
    </style>
    <body>
        <form action="lab-5.php" method="POST">
        <h2>Sign Up</h2>
            <label for="">Username :</label>
            <input type="text" name="username"><br>
            <label for="">Password :</label>
            <input type="password" name="pass"><br>
            <input type="submit" value="submit" name="signUp">
            <input type="reset" value="reset" name="reset">
        </form>
    </body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $hostname = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname ='lab5';
    $conncet = mysqli_connect($hostname,$dbuser,$dbpass,$dbname);

    $userName = $_POST['username'];
    $pass = $_POST['pass'];

    if(!$conncet){
        die('could not connect :<br>'. mysqli_connect_error($conncet));
    }else{
        echo "connected successfully";
    }

    $sql = "INSERT INTO register (`username`, `password`)
    values ('$userName', '$pass')";
    $returnVal = mysqli_query($conncet, $sql);

    if(!$returnVal){
        die("could not insert into table<br>". mysqli_error($conncet));
    }else{
        echo "<br>Data inserted to table successfully\n";
    }
    mysqli_close($conncet);
}
?>