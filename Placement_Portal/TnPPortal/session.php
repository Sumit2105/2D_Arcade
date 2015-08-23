<?php

session_start();// Starting Session
$connection = mysqli_connect("localhost", "root", "","test");


// Storing Session
if(isset($_SESSION['login_user']) )
{
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$str="select name from sign_up_table where scholar_no='$user_check'";
$rs=mysqli_query($connection,$str);
$row = mysqli_fetch_array($rs);
$login_session =$row['name'];
}

else if(isset($_COOKIE['scholar_no']))
{
	$user_check=$_COOKIE['scholar_no'];
// SQL Query To Fetch Complete Information Of User
$str="select name from sign_up_table where scholar_no='$user_check'";
$rs=mysqli_query($connection,$str);
$row = mysqli_fetch_array($rs);
$login_session =$row['name'];
}

if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: login.php'); // Redirecting To Home Page
}
?>