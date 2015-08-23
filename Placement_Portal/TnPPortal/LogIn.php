

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--A.N.-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>



<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title>Tnp portal</title>
<style>
.error {color: #FF0000;}
img{
	opacity:0.9;
}

.anc a:hover{
color:black;

}
.copyright {
  font-size: 12px;
  padding: 4px 3px;
  background: #202020;
  border-top: solid 1px #777;
 padding-top:15px;
 text-align:center;
}
.copyright p {
  color: rgba(218, 218, 218, 0.91);
}
</style>
</head>

<body style="font-family:'Open Sans', sans-serif";>


<?php

include('inputlogin.php'); 						// Includes Login Script

 if(isset($_SESSION['login_user']) || isset($_COOKIE['scholar_no'])){
header('Location: ../project1/StudentHome.php');
} 											// redirecting to profile when the user is already log in
 
?>
<div class="container-fluid" style="background-color:#202020;">

<div class="row" style="border-bottom: solid 1px #777;">
<div class="col-lg-3 col-md-1 col-sm-1 col-xs-1" style="margin-left:-10px"></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1  search " style="margin-bottom:10px;margin-top:10px;padding-right:5px;padding-left:40px">
<a href="../project/home.php"><img  class="responsive" src="assets/img/logo.png"  />
</a></div>
<div class="col-lg-5 col-md-8 col-sm-10 col-xs-8" style="margin-top:12px" >
<a class="anc" href="../project/home.php" style="text-decoration: none";>
         <span style="font-size:32px; color:#337ab7">Office Of Training and Placement</span><br>
         <div style="color:rgba(218, 218, 218, 0.91); margin-left:-75px; text-align:center">NATIONAL INSTITUTE OF TECHNOLOGY, SILCHAR</div>
      </a>
</div>

</div>
</div>
<!--div style="background:url('assets/img/ub.jpg') no-repeat center";-->
<div class="container-fluid" id="container" style="background:url('assets/img/yeah.jpg') no-repeat; " >


<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 "  style="margin-top:2%;margin-bottom:2%;border :1px solid #ccc; border-radius:3px; background-color:rgba(218,218,218,0.85);    ">

<div ><p style="color:#333 ; font-size:24px">&nbsp;</p>
  <p style="color:#333 ; font-size:28px">Login Details </p>		
  <div style="margin-top:-15px"><b><hr style="border-color:#9c9c9c;" noshade="noshade"></b><span class="error"><?php echo $Err ?></span> 
  <p>&nbsp;</p>
</div>
</div>

          <div id="table">
          <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
          
			   <div class="form-group">
              <div class="col-md-5 control-label"><h5 style="font-size:16px">Scholar Number</h5></div><div class="col-md-7"><input title="Eg.12-1-5-001" type="text" class="form-control" name="scholar_no"  placeholder="Enter scholar number" value="<?=$scholar_no?>" <?php if($scholar_no=="") echo("autofocus")?> required pattern="^([0-9][0-9]-[0-9]-[0-9]-[0-9][0-9][0-9])$"></div>            
            </div>
              <br />
                <p>&nbsp;
                </p>
                <div class="form-group">
                <div class="col-sm-5 control-label"><h5 style="font-size:16px">Password</h5></div><div class="col-sm-7"> <input type="password" class="form-control" name="pass" placeholder="Enter password" value="<?=$pass?>" <?php  if($Err== "Incorrect Password") echo("autofocus");?> required></div> <span class="error"><?php /*echo $passErr */?></span></div>
                <div><br /><br></div>
           <div class="row" > 
	   
          <div class="col-md-7"> <div class="checkbox">
      &nbsp&nbsp&nbsp <label><input type="checkbox" name="remember" > Remember me</label>
    </div></div><div class="row" style="margin-top:12px ">  <div class="col-md-4" style="margin-left:15px"> <a href="forgotpassword.php"  >  Forgot Password?</a></div>
    </div></div>
     
           
  	<br />
                <br /> <div><button type="submit" class="btn btn-primary btn-block" name="log_in" >Log In</button> </div>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 
         </form>
          
          
  		  
	       <div id="New">
           <form action="SignUp.php" method= "post">
           <button type="submit" class="btn btn-default btn-block"  autofocus> <?php if($count2==0) echo"<div style='color:#666'><b>"?>Sign Up<?php if($count2==0) echo"</b></div>"?></button>
           <p>&nbsp;</p>
           <p>&nbsp;</p>
           </form>
  </div></div></div></div></div>
  <div class="copyright">
	<div class="container-fluid">
		
								
	            <p> © Copyright 2015. All rights reserved to National Institute of Technology, Silchar, Assam, India
      
	          </p>
		
	</div><!--/container-->	
</div>

</body>

</html>
