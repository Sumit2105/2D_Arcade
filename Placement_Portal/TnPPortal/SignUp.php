<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--A.N.-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title>Sign Up</title>

<style>
.error {color: #FF0000;}

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
}

.copyright p {
  color: rgba(218, 218, 218, 0.91);
}

</style>

</head>

<body style=" font-family: 'Open Sans', sans-serif">
<?php
	$PassErr="";$AccountExist="";$count=0;
	$s_no=$name=$pass=$verifypass=$program=$sem=$branch=$email=$cpi="";
	if(isset($_POST["register"]))
	{
		$s_no=test_input($_POST["scholar_number"]);
		$name=test_input($_POST["name"]);
		$pass=test_input($_POST["pass"]);
		$verifypass=test_input($_POST["verifypass"]);
		$program=test_input($_POST["sel1"]);
		$sem=test_input($_POST["sel2"]);
		$branch=test_input($_POST["branch"]);
		$email=test_input($_POST["email"]);
		$cpi=test_input($_POST["cpi"]);
		
		if($pass!=$verifypass)
		{
			$PassErr="Passwords Do Not Match";
		}
		else
		{
			$c=mysqli_connect("localhost","root","","test");
			
			$str1="select * from sign_up_table where scholar_no='$s_no'";
			$rs1=mysqli_query($c,$str1);
			$count=mysqli_num_rows($rs1);
			
			$hashpass=md5($pass);
			
		
			$str= "INSERT INTO sign_up_table(scholar_no, name, hashpass, programme, semester, branch, email, cpi) VALUES ('$s_no','$name','$hashpass','$program','$sem','$branch','$email','$cpi')";
			$rs=mysqli_query($c,$str);
			if($count!=0){
				$AccountExist="Account already exist "."<a href=\"LogIn.php\">LogIn</a>";
				echo "<script>alert(\"Account already exists!!!\"); </script>";
                }
			else
			{
				header('Location:LogIn.php');	
			}
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
<a class="anc" href="../project/home.php" style="text-decoration: none";>
         <span style="font-size:32px; color:#337ab7">Office Of Training and Placement</span><br>
         <div style="color:rgba(218, 218, 218, 0.91); margin-left:-75px; text-align:center">NATIONAL INSTITUTE OF TECHNOLOGY, SILCHAR</div>
      </a>
</div>
<div class="col-lg-3" style="margin-top:30px"><a href="LogIn.php"><button class="btn btn-primary " name="logIn" style="margin-left:95px">LogIn To Existing Account</button> </a>
</div>
</div>
<div class="container-fluid" id="container" style="background:url('assets/img/yeah.jpg');"  >
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4" style="margin-top:2%;margin-bottom:2%; border :1px solid #ccc; border-radius:3px; background-color:rgba(218,218,218,0.85); ">
<div style=" padding-top:5%">
  <p style=" color:#333; font-size:28px"><b>Sign Up</b></p> <div style="margin-top:-18px"><b><hr style="border-color:#999;" noshade="noshade"></b>
  <span style="float:right">*All Fields Are Required&nbsp;</span><span class="error" style="float:left"><?php echo $AccountExist ?></span>
  </div>
</div>


          <div id="table"><br /><br />
          <form role="form"  method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
          
			   <div class="form-group">
              <input title ="Eg.12-1-5-001" type="text" class="form-control" name="scholar_number" placeholder="Enter scholar number" value="<?php echo $s_no;?>"   required pattern="^([0-9][0-9]-[0-9]-[0-9]-[0-9][0-9][0-9])$" autofocus> </div>            
            <div class="form-group">
              <input  type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo $name;?>"   required pattern="^([a-zA-Z ])*$"> </div>
              <div class="form-group">
                
                <p>
                  <input  title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" type="password" class="form-control" name="pass" placeholder="Enter password " <?php if($pass!=$verifypass) echo ("autofocus") ?> minlength="6" maxlength="30" required pattern ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"/>
                </p> 
            </div>
            <div class="form-group">
             <p>
                  <input type="password" class="form-control" name="verifypass" placeholder="Verify password " required/>
             </p> <span class="error"><?php echo $PassErr ; ?></span>
             </div>
			 
             
          <div class="form-group">
  <label for="sel1">Programme</label>
  <select class="form-control" name="sel1" style="width:95px" >
    <option value="B.Tech">B.tech</option>
    <option <?php if($program=="M.Tech") echo "selected";?>  value="M.Tech">M.tech</option>
    <option <?php if($program=="M.B.A.") echo "selected";?> value="M.B.A.">M.B.A.</option>
    
  </select>
          </div>
           <div class="form-group">
  <label for="sel2">Semester</label>
  <select class="form-control" name="sel2" style="width:95px" >
    <option>1</option>
    <option <?php if($sem=="2") echo "selected";?> value="2">2</option>
    <option <?php if($sem=="3") echo "selected";?> value="3">3</option>
    <option <?php if($sem=="4") echo "selected";?> value="4">4</option>
    <option <?php if($sem=="5") echo "selected";?> value="5">5</option>
    <option <?php if($sem=="6") echo "selected";?> value="6">6</option>
    <option <?php if($sem=="7") echo "selected";?> value="7">7</option>
    <option <?php if($sem=="8") echo "selected";?> value="8">8</option>
  </select>
          </div></p>
  
  <div class="form-group">
  <label for="branch">Branch</label>
  <select class="form-control" name="branch" >
    <option>Civil Engineering</option>
    <option <?php if($branch=="cse") echo "selected";?> value="cse">Computer Science & Engineering</option>
    <option <?php if($branch=="ee") echo "selected";?> value="ee">Electrical Engineering</option>
    <option <?php if($branch=="ece") echo "selected";?> value="ece">Electronics & Communication Engineering</option>
    <option <?php if($branch=="eie") echo "selected";?> value="eie">Electronics & Instrumentation Engineering</option>
    <option <?php if($branch=="me") echo "selected";?> value="me">Mechanical Engineering</option>
    <!--option <?//php if($branch=="") echo "selected";?> value=""></option-->
   
  </select>
          </div>
             
             <div class="form-group">
             <p>
                  <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email;?>" required/>
             </p> 
             </div>
             <div class="form-group">
             <p>
                  <input title="Eg. 6.6 or 6.67 or 10" type="text" class="form-control" name="cpi" placeholder="CPI" value="<?php echo $cpi;?>" required pattern="^([0-9].[0-9]|[0-9].[0-9][0-9]|[0-9]|10|10.[0]|10.[0][0])$"/>
             </p> 
             </div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  	<br />
                 <div>
				
                  <button type="submit" class="btn btn-primary btn-block" name="register">Register</button> </div>
                  
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
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
