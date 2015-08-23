<?php session_start();
?> 
 <html>
 <head>
 <title>admin</title>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/admin/bootstrap.min.css">
  <script src="jq111.js"></script>
  <script src="jq1334.js"></script>
  <script src="jquery.js"></script>
 </head>
 <body style="background-color:#ddd">
<?php
 $var="";
 $c=mysqli_connect("localhost","root","","test") or die("error");
 if(isset($_POST["submit1"]))
 {
 $a=$_POST["user"];
 $b=$_POST["password"];
 
 $str="select * from admin where ( username='{$a}' and password='{$b}')";
 $rs=mysqli_query($c,$str) or die("query problem");
 $count=mysqli_num_rows($rs);
 echo $count;
 if($count!=0)
 {
	 $_SESSION["user"]=$a;
	 $_SESSION["pass"]=$b;
	header('location:admincontent.php');
 }
else{
   $var="Incorrect username or Password";
$_SESSION["user"]=$a;
$_SESSION["pass"]=$b;
 }

mysqli_close($c);
 }
 if(isset($_SESSION['user'])){
header('Location: admincontent.php');
} 
 ?>
 <div class="container">
 <div class="row">
 <div style="background-color:white;height:700px;margin-top:-20px;color:rgba(20,25,25,1.6)" class="col-lg-5 col-sm-6 col-xs-12 col-md-5 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 "><br><br><br>
 <div class="col-lg-10 col-lg-offset-1 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" style="font-family:newtimes roman times serif"> 
 <h2><b color="red">ADMIN PANEL</b></h2><br><?php echo "<div style='color:red'>".$var."</div>"; ?>
 </div>
 <form action="admin.php"  class="form-horizontal" role="form" method="post">
 <div class="form-group">
 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
 <input class="form-control" type="text" name="user" placeholder="Username" ><br></div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
 <input class="form-control" type="password" name="password" placeholder="Enter password"><br></div>
 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
 <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit1" class="smoothscroll" >Log In</button></div>
 </form>
 </div></div></div></div>
 </body>
 </html>