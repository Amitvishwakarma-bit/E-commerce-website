<?php
// Connect to the database
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "e-commerce";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if (!$conn) {
    die("connection failed : " .mysqli_connect_error());
    
}
// Grab User submitted information
$username = $_POST["username"];
$pass = $_POST["psw"];
// Select the database to use
mysqli_select_db($conn,"e-commerce");
$query ="Select * from register WHERE username='$username' and password='$pass'";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
$username_name = mysqli_fetch_assoc($result);
if ($count<=0)
{
    echo '<script>alert("Sorry, No username matches with database!!!.")</script>';
}
else {
    // $msg = 'Login Complete! Thanks';
    // echo'<script>alert("Congratulations!!!,You just logged in ")</script>';
    // header("Location: mens.html");
    $_SESSION['username'] = $_POST['username'];

    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully logged in!!!');
    window.location.href='../HTML/Home.php';
    </script>");
}

?>

 