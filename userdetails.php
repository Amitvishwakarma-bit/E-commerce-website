<?php

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "e-commerce";


$conn=mysqli_connect($server_name,$username,$password,$database_name);
if (!$conn) {
    die("connection failed : " .mysqli_connect_error());
    
}


if (isset($_POST['save'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];  
    $address = $_POST['address'];
    $landmark = $_POST['landmark'];
    $room = $_POST['room'];
    $gender = $_POST['gender'];


    $sql_query = "INSERT INTO register
    (first_name,last_name,mobile,email,username,password,re_password,address,landmark,room_no,gender)
    VALUES('$fname' , '$lname' , '$mobile' ,'$email' , '$username', '$password' , '$repassword' , '$address' , '$landmark' , '$room' , '$gender')";

    if (mysqli_query($conn,$sql_query)) {
        echo ("<script LANGUAGE='JavaScript'>
                 window.alert('Congratulations!!, you registered successfully!!!!!');
                 window.location.href='../HTML/Home.php'; </script>");
    }
    else{
        echo "Error : " .$sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);

}
?>