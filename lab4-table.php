<?php
$hostname = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname ='users';
$conn = mysqli_connect($hostname, $dbuser, $dbpass, $dbname);

if(!$conn){
    die('coud not connect :'. mysqli_connect_error($conn));
}else{
    echo "connected successfully <br>";
}

$sql = "SELECT id, name, email, gender, checkbox from emp";
mysqli_select_db($conn,$dbname);
$result = mysqli_query($conn,$sql);

if(!$result ) {
    die('Could not get data: ' . mysqli_error($conn));
}

if(mysqli_num_rows($result) > 0){
    echo "<center>";
    echo "<table>";
    // $row = mysqli_fetch_assoc($result);
    echo "<tr><th>ID</th>  <th>Name</th>  <th>E-mail</th> <th>Gender</th>  <th>Mail Status</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        // echo $row['id'], $row['name'],$row['email'],$row['gender'],$row['checkbox']."<br>";
        echo "<tr><td>" . $row['id']. "</td><td>" . $row['name']. "</td> <td>" . $row['email']. " </td><td> " . $row['gender']. " </td>
        <td> " . $row['checkbox']. " </td></tr>";
        
    }
    echo "</table>";
    echo "</center>";
}else{
    echo "table is empty";
}


echo "Fetched data successfully\n";
   
mysqli_close($conn);

?>