<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--A.N.-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title>Change Password</title>

<style>
.error {color: #FF0000;}
.success{color: #00aa00;}
a.anc:link{
  font-size: 20px;
}
img{
	opacity:0.9;
}

.copyright {
  font-size: 12px;
  padding: 4px 3px;
  background: #202020;
  border-top: solid 1px #777;
 padding-top:15px;
 text-align:center;
 position:fixed;
 bottom:0;
 
 
 width:100%;
}

.copyright p {
  color: rgba(218, 218, 218, 0.91);
}
</style>

</head>

<body style=" font-family:'Open Sans',sans-serif">
<?php
	$PassErr="";$count=0;$Err=$success="";
	$s_no=$hashpass=$verifypass=$newpass="";
	if(isset($_POST["register"]))
	{
		$s_no=test_input($_POST["scholar_number"]);
		$hashpass=test_input($_POST["hashpass"]);
		$verifypass=test_input($_POST["verifypass"]);
		$newpass=test_input($_POST["newpass"]);
		
		$c=mysqli_connect("localhost","root","","test");
			
			$str1="select * from sign_up_table where scholar_no='$s_no' and hashpass='$hashpass'";
			$rs1=mysqli_query($c,$str1);
			$count=mysqli_num_rows($rs1);
		if($count==1)
		{
			if($newpass!=$verifypass)
			{
				$PassErr="Passwords Do Not Match";
			}
			else
			{
				$newhashpass=md5($newpass);
				$str= "update sign_up_table set hashpass ='$newhashpass' where scholar_no='$s_no' ";
				$rs=mysqli_query($c,$str);
				$success="Your Password has been changed successfully!!! ";
				
			}
		}
		else{
			$Err="Entered Wrong Scholar Number or Hash-Password!!!";
		}
		
			
			
	}	
	
	function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
	}
?>

<div class="container-fluid" style="background-color:#202020;">

<div class="row" style="border-bottom: solid 1px #777;">
<div class="col-lg-3 col-md-1 col-sm-1 col-xs-1" style="margin-left:-10px"></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1  search " style="margin-bottom:10px;margin-top:10px;padding-right:5px;padding-left:40px">
<a href="../project/home.php"><img  class="responsive" src="assets/img/logo.png"  />
</a></div>


<div class="col-lg-5 col-md-8 col-sm-10 col-xs-8" style="margin-top:12px" >
<a  href="../project/home.php" style="text-decoration: none";>
         <span style="font-size:32px; color:#337ab7">Office Of Training and Placement</span><br>
         <div style="color:rgba(218, 218, 218, 0.91); margin-left:-75px; text-align:center">NATIONAL INSTITUTE OF TECHNOLOGY, SILCHAR</div>
      </a>
</div>

</div>
</div>

<div class="container-fluid" id="container" style="background-color:#626262"  >
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4" style="margin-top:2%;margin-bottom:5%; border :1px solid #777; border-radius:3px; background-color:rgba(218,218,218,0.85); ">
<div style=" padding-top:5%">
  
   <h3><img src="assets/img/login.gif" width="36" height="33">
    <b>Change Password</b></h3> 
    <div style="margin-top:-18px"><b><hr style="border-color:#777;" noshade="noshade"></b>
  
</div>
</div>


          <div id="table"><span class="error"><?php echo $Err;?></span><span class="success"><?php if($success) echo $success .'<a class="anc"; href="login.php" >Login</a>';?></span><br /><br>
          <form role="form"  method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
          
			   <div class="form-group">
              <input title ="Eg.12-1-5-001" type="text" class="form-control" name="scholar_number" placeholder="Enter scholar number" value="<?php echo $s_no;?>" <?php if($s_no=="") echo("autofocus")?>  required pattern="^([0-9][0-9]-[0-9]-[0-9]-[0-9][0-9][0-9])$"> </div>            
            <div class="form-group">
                
                <p>
                  <input  title="Hash Password" type="password" class="form-control" name="hashpass" placeholder="Enter hash password " value="<?php echo $hashpass;?>" required />
                </p> 
            </div>
              <div class="form-group">
                
                <p>
                  <input  title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" type="password" class="form-control" name="newpass" placeholder="Enter new password " <?php if($count==1){if($newpass!=$verifypass) echo ("autofocus");} ?> minlength="6" maxlength="30" required pattern ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"/>
                </p> 
            </div>
            <div class="form-group">
             <p>
                  <input type="password" class="form-control" name="verifypass" placeholder="Verify password " required/>
             </p> <span class="error"><?php echo $PassErr ; ?></span>
             </div></p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  	<br />
                 <div>
				
                  <button type="submit" class="btn btn-primary btn-block" name="register">Confirm</button> </div>
                  <p style="padding-top:20px"><a href="LogIn.php">Back to login</a></p>
				 
               
			 <p>&nbsp;</p>
          </form>
          
          
  		  
</div></div></div></div>

 <div class="copyright">
	<div class="container-fluid">
		
								
	            <p> © Copyright 2015. All rights reserved to National Institute of Technology, Silchar, Assam, India
      
	          </p>
		
	</div><!--/container-->	
</div>

</body>
</html>
