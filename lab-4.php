
<html lang="en">
<body>
    <center>
    <form action="lab-4.php" method="POST">
        Name: <input type="text" name="username"><br>
        E-mail : <input type="email" name="email"><br>
        Gender : <input value="M" name="gender" type="radio" >male <input value="F" name="gender" type="radio">female<br>
        <input type="checkbox" name="checkbx" value="YES">recive emails from us <br>
        <input type="submit" value="submit">
    </form>
    </center>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $hostname = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='users';
   $conn = mysqli_connect($hostname, $dbuser, $dbpass, $dbname);
   $name = $_POST['username'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $check = $_POST['checkbx'];
   if(empty($_POST['checkbx'])){
    $check = 'NO';
   }
   if(!$conn){
    die('coud not connect :'. mysqli_connect_error($conn));
   }else{
    echo "connected successfully";
   }

   $sql = "INSERT INTO emp (`name`,`email`,`gender`,`checkbox`)
   values ('$name', '$email', '$gender',' $check')";

   $retval = mysqli_query($conn,$sql);

   if(! $retval ) {
      die('Could not insert to table: ' . mysqli_error($conn));
   }else{
      echo "<br>Data inserted to table successfully\n";
   }
     
     
   mysqli_close($conn);
}

     
?>
