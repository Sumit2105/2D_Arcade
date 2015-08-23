<?php
session_start();
if(isset($_SESSION["user"]) && isset($_SESSION["pass"]))
{
$a=$_SESSION["user"];
$b=$_SESSION["pass"];
}
else
	header('location:admin.php');

?>
<html>
<head>
<title>admincontent</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jq111.js"></script>
  <script src="jq1334.js"></script>
  <script src="jquery.js"></script>
  <script type="text/javascript" src="jquery.min.js"></script>
  <link type="text/css" rel="stylesheet" href="css/responsive-tabs.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
  <style>
	.btnji{
		background-color:#ddd;
	}
  </style>
     <style>
body,
html {
  margin: 0;
  overflow: auto;
  font-family: helvetica;
  font-weight: 100;
}

.container {
  position: relative;
  height: 100%;
  width: 100%;
  left: 0;
  -webkit-transition: left 0.4s ease-in-out;
  -moz-transition: left 0.4s ease-in-out;
  -ms-transition: left 0.4s ease-in-out;
  -o-transition: left 0.4s ease-in-out;
  transition: left 0.4s ease-in-out;
}

.container.open-sidebar { left: 240px; }

.swipe-area {
  position: absolute;
  width: 50px;
  left: 0;
  top: 0;
  height: 200%;
  background:white;
  z-index: 0;
  color:black;
}

#sidebar {
  background: #333;
  position: absolute;
  width: 240px;
  height: 200%;
  left: -240px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

#sidebar ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

#sidebar ul li { margin: 0; }

#sidebar ul li a {
  padding: 15px 20px;
  font-size: 16px;
  font-weight: 100;
  color: white;
  text-decoration: none;
  display: block;
  border-bottom: 1px solid white;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  -ms-transition: background 0.3s ease-in-out;
  -o-transition: background 0.3s ease-in-out;
  transition: background 0.3s ease-in-out;
}

#sidebar ul li:hover a { background: #72c02c;color:black; }

.main-content {
  width: 100%;
  height: 100%;
  padding: 10px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  position: relative;
}

.main-content .content {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  padding-left: 60px;
  width: 100%;
}

.main-content .content h1 { font-weight: 100; }

.main-content .content p {
  width: 100%;
  line-height: 160%;
}

.main-content #sidebar-toggle {
  background: #333;
  border-radius: 3px;
  display: block;
  position: relative;
  padding: 10px 7px;
  float: left;
}

.main-content #sidebar-toggle .bar {
  display: block;
  width: 18px;
  margin-bottom: 3px;
  height: 2px;
  background-color: #72c02c;
  border-radius: 1px;
}

.main-content #sidebar-toggle .bar:last-child { margin-bottom: 0; }
</style>
</head>
<body style="background-color:#ddd">
			<div class="container">
        <div id="sidebar">
          <ul>
            <li><a href="HomePageAdminPanel.php">Edit Home Page</a></li>
            <li><a href="StudentAdiminPanel.php">Edit Student</a></li>
            <li><a href="#">Edit Recruiters</a></li>
            <li><a href="#">Edit Guest House</a></li>
			<li><a href="MeetOurTeamAdminPanel.php">Edit Meet Our Team</a></li>
			<li><a href="PastRecruitersAdminPanel.php">Edit Past Recruiters</a></li>
			<li><a href="logout.php">Log Out <?php echo $_SESSION["user"] ?></a></li>
          </ul>
        </div>
        <div class="main-content">
          <div class="swipe-area"></div>
          <a href="#" data-toggle=".container" id="sidebar-toggle">
		  <span class="bar"></span> 
		  <span class="bar"></span>
		  <span class="bar"></span> </a>
          <div class="content">
			<h1>Edit Home Page</h1><hr style="border-color:#72c02c">
            <div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>

</script></div>
<?php
$print6="";
 $print7="";
 $print9="";
 $print10="";
 $print11="";
 $print4="";
 $print12="";
 //Add Latest Updates

 if(isset($_POST["add_updates"]))
{
    $a=$_POST["latest_update"];
	$c=mysqli_connect("localhost","root","","test");
	$n="upload/Latest_updates/".$a.".pdf";
	move_uploaded_file($_FILES["file3"]["tmp_name"], $n);
	$str="INSERT INTO latest_updates(info, file_path) VALUES ('$a','$n')";
	mysqli_query($c,$str);
	$print11="Added Successfully";	
}
if(isset($_POST["delete_updates"])){
	$c=mysqli_connect("localhost","root","","test");
	$delete_query="DELETE FROM latest_updates order by  sr_no asc limit 1";
	mysqli_query($c, $delete_query) or die("Query Problem");
	$print4="Deleted the top index";
}
//Quick Links
if(isset($_POST["add_quick"]))
{
	$textbox_quick=$_POST["quick_links"];
    $c=mysqli_connect("localhost","root","","test");
	$n="upload/Quick_link/Brochure.pdf";
	move_uploaded_file($_FILES["file2"]["tmp_name"], $n);
	$str="INSERT INTO quick_link_table(text_display, file_path) VALUES ('$textbox_quick','$n')";
	mysqli_query($c,$str);
	$print10="Added Successfully";	
}
if(isset($_POST["delete_quick"])){
	$c=mysqli_connect("localhost","root","","test");
	$delete_quick_query="DELETE FROM quick_link_table order by  sr_no asc limit 1";
	mysqli_query($c, $delete_quick_query) or die("Query Problem");
	$print10="deleted successfully";
}
//placement_statistics
if(isset($_POST["add_statistics"]))
{
	$textbox_statistics=$_POST["placement_statistics"];
	
	$c=mysqli_connect("localhost","root","","test");
	$select_query4="select * from placement_statistics where year='$textbox_statistics'";
	$rs=mysqli_query($c, $select_query4) or die("Query Problem");
	$count=mysqli_num_rows($rs);
	if($count==0)
	{
	$n="upload/placement_statistics/".$textbox_statistics.".pdf";
	move_uploaded_file($_FILES["file"]["tmp_name"], $n);
	$str="INSERT INTO placement_statistics(year, file_path) VALUES ('$textbox_statistics','$n')";
	mysqli_query($c,$str);
	$print6="Uploaded Successfully";
	}
	else{
		$print6="Already Exist";
	}
}

if(isset($_POST["delete_statistics"])){
	$c=mysqli_connect("localhost","root","","test");
	$textbox_statistics1=$_POST["placement_statistics"];
	$select_query2="select * from placement_statistics where year='$textbox_statistics1'";
	$rs=mysqli_query($c, $select_query2) or die("Query Problem");
	$count=mysqli_num_rows($rs);
	if($count==0)
	{
		$print6="Does not exist";
	}
	else
	{
	$delete_statistics_query="DELETE FROM placement_statistics where year like '%$textbox_statistics1'";
    mysqli_query($c,$delete_statistics_query);	
	$print6="Deleted Successfully";
	}
}
if(isset($_POST["submit_upload_brochure"]))
{
    $c=mysqli_connect("localhost","root","","test");
	$n="upload/broucher/Brochure.pdf";
	move_uploaded_file($_FILES["file1"]["tmp_name"], $n);
	$str="INSERT INTO upload_brochure(file_name) VALUES ('$n')";
	mysqli_query($c,$str);
	$print9="Uploaded Successfully";	
}
if(isset($_POST["change_image"])){
		$c=mysqli_connect("localhost","root","","test");
		$n="image/director.jpg";
		move_uploaded_file($_FILES["file4"]["tmp_name"], $n);
		$print12="Uploaded Successfully";
}

?>
<?php
$print1="";
$print2="";
$print3="";

$print5="";

//welcome_message
$c=mysqli_connect("localhost","root","","test") or die("connection error");
if (isset($_POST["update"])){
	$welcome_message=$_POST["welcome"];
	$select_query1="select * from home";
	$rs=mysqli_query($c, $select_query1) or die("Query error");
	$count=mysqli_num_rows($rs);
	if($count==0)
	{
		$update_query="insert into home(sr_no, welcome_message) values('1', '$welcome_message')";
	}
	else{
		$update_query="update home set welcome_message='$welcome_message' where sr_no=1";
	}
	
	mysqli_query($c, $update_query);
	$print1="Updated Successfully";
}
if(!isset($_POST["retrive"]))
{
	$no_text1="";
}
if(isset($_POST["retrive"])){
	$select_query="select welcome_message from home where sr_no=1";
	$rs=mysqli_query($c, $select_query) or die("query problem");
	$row=mysqli_fetch_array($rs);
	
	$no_text1=$row["welcome_message"];
}

//about us
if(isset($_POST["update_about_us"])){
	$about_us=$_POST["aboutUs"];
	$select_query2="select about_us from home where sr_no=1";
	$rs=mysqli_query($c, $select_query2) or die("query problem");
	$count=mysqli_num_rows($rs);
	if($count==0)
	{
		$update_query="insert into home(sr_no, about_us) values('1','$about_us')";
	}
	else{
		$update_query="update home set about_us='$about_us' where sr_no=1";
	}
	mysqli_query($c, $update_query);
	$print2="Updated Successfully";
}
if(!isset($_POST["retrive_about_us"]))
{
	$no_text2="";
}
if(isset($_POST["retrive_about_us"])){
	$retrieve_query="select about_us from home where sr_no=1";
	$rs=mysqli_query($c, $retrieve_query) or die("query problem");
	$row=mysqli_fetch_array($rs);
	$no_text2=$row["about_us"];
}

//Director
if(isset($_POST["update_director"])){
	$director=$_POST["director"];
	$select_query3="select director_message from home  where sr_no=1";
	$rs=mysqli_query($c, $select_query3) or die("Query Problem");
	$count=mysqli_num_rows($rs);
	if($count==0){
		$update_query="insert into home(sr_no, director_message) values('1','$director')";
	}
	else{
		$update_query="update home set director_message='$director' where sr_no=1";
	}
	mysqli_query($c, $update_query);
	$print3="updated successfully";
}
if(!isset($_POST["retrive_director"]))
{
	$no_text3="";
}
if(isset($_POST["retrive_director"])){
	$director=$_POST["director"];
	$retrieve_query1="select director_message from home where sr_no=1";
	$rs=mysqli_query($c, $retrieve_query1) or die("Query Error");
	$row=mysqli_fetch_array($rs);
	$no_text3=$row["director_message"];
}



?>
<div class="container">
  <form action="HomePageAdminPanel.php" method="post" entype="multipart/form-data">
 <div class="form-group">
      <label for="email">Welcome Message:</label>
      <textarea  class="form-control" name="welcome" placeholder="Enter Welcome Message You Want to Display" style="width:500px; height:150px" row="15" col="15" ><?php echo $no_text1; ?></textarea>
	 <button type="submit" class="btn btn-default add" name="retrive">Retrive</button>
	<button type="submit" class="btn btn-default add" name="update">Update</button>
	    <?php echo "<h5 style='color:red'>".$print1."</h5>"?>
   </div>
	 <div class="form-group">
	<label for="email">About Us:</label>
      <textarea class="form-control" name="aboutUs" placeholder="Enter About Us You Want to Display" style="width:500px; height:150px" rows="15" cols="100"><?php echo $no_text2;?></textarea>
	  <button type="submit" class="btn btn-default add" name="retrive_about_us">Retrive</button>
	<button type="submit" class="btn btn-default add" name="update_about_us">Update</button>
	<?php echo "<h5 style='color:red'>".$print2."</h5>"?>
	</div>
	</form>
	
	<label for="email">From the Director's Desk:</label>
	<form action ="HomePageAdminPanel.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
      <textarea class="form-control" name="director" placeholder="Enter Director Message You Want to Display" style="width:500px; height:150px" rows="10" col="10"><?php echo $no_text3;?></textarea>
	   <button type="submit" class="btn btn-default add" name="retrive_director">Retrive</button>
	<button type="submit" class="btn btn-default add" name="update_director">Update</button><br><br>
	<?php echo "<h5 style='color:red'>".$print3."</h5>"?>
	<input type="file" name="file4" id="file4">
		<input type="submit" class="btn btn-default add" value="Upload Image" name="change_image" style="height:30px; width:115px;">
	<?php echo "<h5 style='color:red'>".$print12."</h5>"?>
	</div>
	</form>
	<label for="email">Add Latest Updates:</label>
	<form action ="HomePageAdminPanel.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
        <input type="text" class="form-control" name="latest_update" placeholder="Enter the text you want to disply in web page" style="width:500px">
		<input type="file" name="file3" id="file3">
		<input type="submit" class="btn btn-default add" value="submit" name="add_updates" style="">
	 <button type="submit" class="btn btn-default add" name="delete_updates">Delete</button>
	 <?php echo "<h5 style='color:red'>".$print4."</h5>"?>
	 <?php echo "<h5 style='color:red'>".$print11."</h5>"?>
	</div>
	</form>
	
	<label for="email">Modify Quick Links:</label>
	<form action ="HomePageAdminPanel.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
      <input type="text" class="form-control" name="quick_links" placeholder="Enter the quick link you want to display" style="width:300px">
	  <input type="file" name="file2" id="file2">
	  <input type="submit" class="btn btn-default add" value="submit" name="add_quick" style="">
	 <button type="submit" class="btn btn-default add" name="delete_quick">Delete</button>
	 <?php echo "<h5 style='color:red'>".$print5."</h5>"?>
	 <?php echo "<h5 style='color:red'>".$print10."</h5>"?>
	</div>
	</form>
	<label for="email">Update Placement Statistics: </label>
	<form action ="HomePageAdminPanel.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
      <input type="text" class="form-control" name="placement_statistics" placeholder="Enter year in the format(20XX-XX)" style="width:300px">
	  <input type="file" name="file" id="file">
	   <input type="submit" class="btn btn-default add" value="submit" name="add_statistics" style="">
	 <button type="submit" class="btn btn-default add" name="delete_statistics">Delete</button>
	 <?php echo "<h5 style='color:red'>".$print6."</h5>"?>
	 <?php echo "<h5 style='color:red'>".$print7."</h5>"?>
	</div>
	</form>

	
	<label for="email">Update Placement Brochure: </label>
	<form action ="HomePageAdminPanel.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
    <input type="file" name="file1" id="file1">
    <input type="submit" value="submit" name="submit_upload_brochure" style="height:30px; width:92px;">
	<?php echo "<h5 style='color:red'>".$print9."</h5>"?>
	</div>
  </form>
  
</div>
        </div>
      </div>
	
      <script src="jquery-1.11.3.min.js"></script> 
      <script src="jquery.touchSwipe.min.js"></script> 
      <script>
  $(window).load(function(){
        $("[data-toggle]").click(function() {
          var toggle_el = $(this).data("toggle");
          $(toggle_el).toggleClass("open-sidebar");
        });
         $(".swipe-area").swipe({
              swipeStatus:function(event, phase, direction, distance, duration, fingers)
                  {
                      if (phase=="move" && direction =="right") {
                           $(".container").addClass("open-sidebar");
                           return false;
                      }
                      if (phase=="move" && direction =="left") {
                           $(".container").removeClass("open-sidebar");
                           return false;
                      }
                  }
          }); 
      });
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


			
		

</body>
</html>