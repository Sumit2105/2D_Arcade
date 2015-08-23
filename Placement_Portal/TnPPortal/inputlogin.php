<?php 
session_start();

$Err="";
$passErr="";
$count2=$count1=-1;

if (isset($_POST['scholar_no']) && isset($_POST['pass'])) {
	
	
	$scholar_no = test_input($_POST['scholar_no']);
	$pass = test_input($_POST['pass']);
	$hashpass=md5($pass);
		
	$c=mysqli_connect("localhost","root","","test") or die("not conected"); //connect to database
		
		$str1="select * from sign_up_table where scholar_no='$scholar_no' and hashpass='$hashpass'  ";
		$str2="select * from sign_up_table where scholar_no='$scholar_no'";
		$rs1=mysqli_query($c,$str1);
		$rs2=mysqli_query($c,$str2);
		$count1=mysqli_num_rows($rs1);
		$count2=mysqli_num_rows($rs2);
			
			if($count2==0)
				$Err="Scholar Number "."<b><i>\"".$scholar_no."\"</b></i>". " is not registered";
			else if($count2!=0 && $count1==0)
				$Err= "Incorrect Password";
			else if($count1==1)
				
			{
				if (isset($_POST['remember']) && $_POST['remember'] == 'on') {
						/*
						 * Set Cookie from here for one hour
						 * */ 
						setcookie("scholar_no", $scholar_no, time()+3600);
						setcookie("pass", $pass, time()+3600);  /* expire in 1 hour */
						header('Location:../project1/StudentHome.php');
				  } 
				  else {
						/**
						 * Following code will unset the cookie
						 * it set cookie 1 sec back to current Unix time
						 * so that it will invalid
						 * */
						 
						
						$_SESSION['login_user']=$scholar_no;
						$_SESSION['pass']=$pass;
						header('Location:../project1/StudentHome.php');
					}
					
				
				
				
			} 

  

} 
else {
	$scholar_no = '';
	$pass = '';
	
	
  if (isset($_COOKIE['scholar_no'])) {
	
    $scholar_no = $_COOKIE['scholar_no'];
  }

  if (isset($_COOKIE['pass'])) {
	
    $pass = $_COOKIE['pass'];
  }
  
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
	}
?>