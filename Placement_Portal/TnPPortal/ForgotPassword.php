<?php $s_no="" ;
if (isset($_POST['scholar_no']))
			{
				$s_no = $_POST['scholar_no'];
			}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title>Forgot Password</title>

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
 position:fixed;
 bottom:0;
 
 
 width:100%;
}

.copyright p {
  color: rgba(218, 218, 218, 0.91);
}

</style>

</head>
<body style="background-color:#edf0f5; font-family:'Open sans',Sans-serif">

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

<div class="container-fluid" style="background-color:#626262;">

<div class="row">
<div class="col-lg-4"></div>
<div style="height:529px">
<div class="col-lg-4" style=" margin-top:110px; margin-bottom:110px;border:1px solid #777; border-radius:3px; background-color:rgba(218,218,218,0.7)";>
<h4><img src="assets/img/key.png" width="36" height="33"> Reset Lost Password
</h4><hr style="border-color:#777;" noshade="noshade">
<p>&nbsp;</p>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <div class="form-group">
		<p>
		  <label> Enter your Scholar Number:</label>
		  <input  id="scholar_no"  type="text" name="scholar_no" value="<?php echo $s_no;?>" placeholder="xx-x-x-xxx" autofocus required  "/>
		  
	  </p>
		
		<p style="padding-bottom:10px">
		  <?php 
			session_start();
			$c = mysqli_connect('localhost', 'root', '','test');

			if (!$c){
				die("Database Connection Failed" . mysqli_error());
			}//connects to the database
			if (isset($_POST['scholar_no']))
			{
				
				$s_no = $_POST['scholar_no'];
				$query = "select * from sign_up_table where scholar_no='$s_no'";
				$result   = mysqli_query($c,$query);
				$count = mysqli_num_rows($result);
				// If the count is equal to one, we will send message other wise display an error message.
				if($count==1)
				{
					$rows=mysqli_fetch_array($result);
					$hashpass  =  $rows['hashpass'];//FETCHING PASS
					//echo "your pass is ::".($hashpass)."";
					$to = $rows['email'];
					
					if($to)
					{
					//echo "your email is ::".$email;
					//Details for sending E-mail
					$from = "ayushnenawati@gmail.com";
					$url = "http://www.nitstnp.ac.in/";
					$body  =  "TnPPortal password recovery Script
					-----------------------------------------------
					Url : $url;
					Here is your password  : $hashpass;
					Use this hash password to change your password by clicking on this link 'http://localhost/TnPPortal/changepass.php'.
					Sincerely,
					TnPPortal";
					
					$subject = "TnPPortal Password recovered";
					$headers1 = "From: $from\n";
					$headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
					$headers1 .= "X-Priority: 1\r\n";
					$headers1 .= "X-MSMail-Priority: High\r\n";
					$headers1 .= "X-Mailer: Just My Server\r\n";
					$sentmail = mail($to, $subject, $body, $headers1);
					
					
					if($sentmail==1) //If the message is sent successfully, display success message otherwise display an error message.
					{
						echo "<span style='color: #ff0000;'> Your Password Has Been Sent To Your Email Address.</span>";
					}
					else
						echo "<span style='color: #ff0000;'> Cannot send password to your e-mail address.Problem with sending mail...</span>";
					}
					else
					{
							echo"<span style='color: #ff0000;'>problem fetching email from our database...</span>";
					}
				}
				else 
				{
					echo '<span style="color: #ff0000;"> Not found your Scholar Number in our database</span>';
				}
				
				
					
			}

			?>
	  </p>
		
		
		<button type="submit" class="btn btn-primary btn-sm" name="submit" >Submit</button>
       
        <p style="padding-top:20px"><a href="LogIn.php">Back to login</a></p>
	</div>
</form>
</div>
</div>
</div>
</div>


<div class="copyright" >
	<div class="container-fluid" >
		
				<p> © Copyright 2015. All rights reserved to National Institute of Technology, Silchar, Assam, India
      
	          </p>
		
	</div><!--/container-->	
</div>


</body>
</html>