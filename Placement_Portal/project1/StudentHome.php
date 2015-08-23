<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include('../TnPPortal/session.php');
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/header/style.css" />

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/assets_reach/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
  <style>
  @media(max-width:969px){
			  .search{
				  margin-left:-100px;
			  }
		  }
	   @media(min-width:469px) and (max-width:790px){
			  .search{
				  margin-left:00px;
			  }
		  }
		  
	  @media(min-width:791px) and (max-width:968px){
			  .search{
				  margin-left:0px;
			  }
		  }
		  
		 /* @media(min-width:969px){
			  .search{
				  margin-left:200px;
			  }
		  }*/
	  
  </style>

    
</head>

<body style="background-color:rgb(239, 239, 239)">
<div class="container-fluid" style="background-color:#202020;">

<div class="row" style="border-bottom: solid 1px #777;">
<div class="col-lg-3 col-md-1 col-sm-1 col-xs-1" style="margin-left:-10px"></div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1  search " style="margin-bottom:10px;margin-top:10px;padding-right:5px;padding-left:40px">
<a href="http://localhost/project/home.php"><img  class="responsive" src="../TnpPortal/assets/img/logo.png"  />
</a></div>
<div class="col-lg-5 col-md-8 col-sm-10 col-xs-8" style="margin-top:12px" >
<a class="anc" href="home.php" style="text-decoration: none";>
         <span style="font-size:32px; color:#337ab7">Office Of Training and Placement</span><br>
         <div style="color:rgba(218, 218, 218, 0.91); margin-left:-75px; text-align:center">NATIONAL INSTITUTE OF TECHNOLOGY, SILCHAR</div>
      </a>
</div>

</div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" style="margin-left:330px"id="myNavbar">
      <ul class="nav navbar-nav" style="font: bold 120% Arial, Helvetica, sans-serif;color:#ffffff;text-shadow: 0px -1px 0px #000;">
        <li><a href="home.php">HOME</a></li>
        <li> 
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">STUDENTS<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost/TnPPortal/LogIn.php" target="_blank">Log In</a></li>
            <li><a href="#">Rules</a></li>
			<li><a href="#">Placement Policy</a></li>
			<li><a href="#">Internship Policy</a></li>
			<li><a href="pastrecruiters.php">Past Recruiters</a></li>
          </ul>
        </li>
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">RECRUITERS<span class="caret"></span></a>
		<ul class="dropdown-menu">
            <li><a href="#">Company Portal</a></li>
            <li><a href="#">Why Recruit at NITS</a></li>
			<li><a href="#">Rules And Procedures</a></li>
			<li><a href="guesthouse.php">Facilities</a></li>
			<li><a href="pastrecruiters.php">Past Recruiters</a></li>
			<li><a href="#">Student Profiles</a></li>
          </ul>
		</li>
        <li><a href="guesthouse.php">FACILITIES</a></li>
        
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">CONTACT US<span class="caret"></span></a>
        <ul class="dropdown-menu">
            
            <li><a href="HowToReach.php">Reaching NIT Silchar</a></li>
			<li><a href="MeetOurTeam.php">Our Team</a></li>
          </ul></li>
		  <li><a href="../TnPPortal/logout.php">Log Out <i><?php echo $login_session; ?></i></a></li>
      </ul>
    </div>
  </div>
</nav>

 <div style="margin-bottom:25px"></div>

<?php include 'student_content.php';?>
    
<?php include 'footer.php';?>
</body>
</html>