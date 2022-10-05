<?php
$msg=$check="";
$name = $agree ="";
?>

<html>
    <body>
        <h2>Registration form</h2>
        <p><span style="color:red;">* required field</span></p>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            Name : <input type="text" name="name" value="<?php ?>"><span style="color:red;">* <?php echo $msg;?></span><br>
            
            E-mail : <input type="email" name="email"><br>
            Group# : <input type="text" name="gNum"><br>
            Class details : <textarea name="class" rows="4" col="10"></textarea><br>
            Gender : <input value="male" name="gender" type="radio">male <input value="female" name="gender" type="radio">female<br>
            Select courses : <select name="course[]" id="" multiple>
            <option value="php">PHP</option>
            <option value="JS">JavaScript</option>
            <option value="mysql">MYSQL</option>
            <option value="html">HTML</option>
            </select><br>
            Agree : <input name="agree" type="checkbox" ><span style="color: red;">* <?php echo $check;?></span><br>
            <input type="submit" value="submit">

        </form>
    </body>
</html>

<?php
echo "<h1>your given values are : </h1>";
echo "<br>";
if($_SERVER["REQUEST_METHOD"] == "POST")
    if(empty($_REQUEST['name'])){
        $msg = "Name is Required";
    }else{
        $name =$_REQUEST['name'];
        echo "Name :".$name."<br>";
    }
    if (empty($_REQUEST["agree"])) {
        $check = " required";
    }else{
        $agree = $_REQUEST["agree"];
    }
    // echo "Name :".$name."<br>";
    echo  "E-mail : ".$_REQUEST['email']."<br>";
    echo  "Group # : ".$_REQUEST['gNum']."<br>";
    echo  "Class detalis : ".$_REQUEST['class']."<br>";
    if($_REQUEST["gender"]){
        echo  "Gender : ".$_REQUEST['gender']."<br>";
    }else{
        echo  "Gender : ".$_REQUEST['gender']."<br>";
    }
    if($_REQUEST['course']){
        $course = $_REQUEST['course'];
        foreach($course as $value){ 
            echo  "Courses : ".$value."<br>";
        }
    }
?>