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
<meta charset="utf-8">
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
			<h1>Edit Meet Our Team</h1><hr style="border-color:#72c02c">
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
$print="";
if(isset($_POST["add"]))
{
$Srno=$_POST["srno"];
$Name=$_POST["name"];
$Branch=$_POST["branch"];
$Email=$_POST["email"];
$Mobile=$_POST["mobile"];
$FaceBook=$_POST["facebook"];
$LinkedIn=$_POST["linkedin"];

$c=mysqli_connect("localhost","root","","test") or die("Connection Error");
$add_query="insert into our_team(sch_no, name, branch, email, mobile,facebook_link,linkedin_link) values ('$Srno','$Name','$Branch','$Email','$Mobile','$FaceBook','$LinkedIn')";
mysqli_query($c, $add_query) or die("query problem");
$print="Added Successfully";
}
if(isset($_POST['delete']))
{
	$sch_no=$_POST["srno"];
	$c=mysqli_connect("localhost","root","","test") or die("connection error");
	$delete_query="delete from our_team where sch_no='$sch_no'";
	mysqli_query($c, $delete_query) or die("Query Problem");
	$print="Delted Successfully";
}
if(isset($_POST['update']))
{
	$Srno=$_POST["srno"];
    $Name=$_POST["name"];
	$Branch=$_POST["branch"];
	$Email=$_POST["email"];
	$Mobile=$_POST["mobile"];
	$FaceBook=$_POST["facebook"];
	$LinkedIn=$_POST["linkedin"];
	$c=mysqli_connect("localhost","root","","test") or die("connection error");
	$update_query="update our_team set sch_no='$Srno', name='$Name', branch='$Branch', email='$Email', mobile='$Mobile',facebook_link='$FaceBook',linkedin_link='$LinkedIn' where sch_no='$Srno'";
	mysqli_query($c, $update_query) or die("connection error");
	$print="Updated Succesfully";
}
?>


<div class="container">
 <?php echo "<h1 style='color:red'>".$print."</h1>"?>
  <form role="form" action="MeetOurTeamAdminPanel.php" method="post">
  <div class="form-group">
      <label for="email">Scholar No.:</label>
      <input type="text" class="form-control" name="srno" placeholder="Enter Scholar No."  style="width:300px">
    </div>
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name" style="width:300px">
    </div>
	<div class="form-group">
      <label for="email">Branch:</label>
      <input type="text" class="form-control" name="branch" placeholder="Enter Branch" style="width:300px">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" name="email" placeholder="Enter Email" style="width:300px">
    </div>
	<div class="form-group">
      <label for="email">Mobile:</label>
      <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile" style="width:300px">
    </div>
	<div class="form-group">
      <label for="email">FaceBook Link:</label>
      <input type="text" class="form-control" name="facebook" placeholder="Enter FaceBook Link" style="width:300px">
    </div>
	<div class="form-group">
      <label for="email">LinkedIn Link:</label>
      <input type="text" class="form-control" name="linkedin" placeholder="Enter LinkedIn Link" style="width:300px">
    </div>
   <p></p>
    <button type="submit" class="btn btn-default" name="add">Add</button>
	<button type="submit" class="btn btn-default" name="delete">Delete</button>
	<button type="submit" class="btn btn-default" name="retrive">Retrive</button>
	<button type="submit" class="btn btn-default" name="update">Update</button>
	
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