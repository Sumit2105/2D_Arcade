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
            <li><a href="#">Edit Student</a></li>
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
			<h1>Edit Student Page</h1><hr style="border-color:#72c02c">
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
$print1="";
$print2="";
$print3="";

$c=mysqli_connect("localhost","root","","test");
//add news
if(isset($_POST["add_news"])){
	$a=$_POST["news_textarea"];
	$insert_query1="INSERT INTO news_content(content) VALUES ('$a')";
	mysqli_query($c, $insert_query1) or die("Query Problem");
	$print1="Added Successfully";
}
if(isset($_POST["delete_news"])){
	$delete_query="DELETE FROM news_content order by  sr_no asc limit 1";
	mysqli_query($c, $delete_query);
	$print1="Deleted";
}
//post updates
if(isset($_POST["add_updates"])){
	$a=$_POST["update_textarea"];
	$insert="INSERT INTO student_post_updates(post) VALUES ('$a')";
	mysqli_query($c,$insert) or die("Query Problem6");
	$print2="Added Successfully";
}
if(isset($_POST["delete_updates"])){
	$delete_query1="DELETE FROM student_post_updates order by sr_no asc limit 1";
	mysqli_query($c, $delete_query1);
	$print2="Deleted";
}
//placement news
if(isset($_POST["add_placement_news"])){
	$a=$_POST["placement_news_textarea"];
	$insert1="INSERT INTO placed_news(content) VALUES ('$a')";
	mysqli_query($c,$insert1) or die("Query Problem6");
	$print3="Added Successfully";
}
if(isset($_POST["delete_placement_news"])){
	$delete_query2="DELETE FROM placed_news order by sr_no asc limit 1";
	mysqli_query($c, $delete_query2);
	$print3="Deleted";
}
?>
<div class="container">	
	<label for="email">Post Updates:</label>
	<form action ="StudentAdiminPanel.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
      <textarea class="form-control" name="update_textarea" placeholder="Enter the post you want to display" style="width:500px; height:150px" rows="10" col="10"></textarea>
	<button type="submit" class="btn btn-default add" name="add_updates">Add</button>
	<button type="submit" class="btn btn-default add" name="delete_updates">Delete</button>
	<?php echo "<h5 style='color:red'>".$print2."</h5>"?>
	</div>
	</form>  
	
	<label for="email">Edit News Content:</label>
	<form action ="StudentAdiminPanel.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
    <textarea class="form-control" name="news_textarea" placeholder="Enter News You Want to Display" style="width:500px; height:150px" rows="10" col="10"></textarea>
	<button type="submit" class="btn btn-default add" name="add_news">Add</button>
	<button type="submit" class="btn btn-default add" name="delete_news">Delete</button>
	<?php echo "<h5 style='color:red'>".$print1."</h5>"?>
	</div>
	</form> 
	
	<label for="email">Edit Recent Placement News:</label>
	<form action ="StudentAdiminPanel.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
    <textarea class="form-control" name="placement_news_textarea" placeholder="Enter placement News You Want to Display" style="width:500px; height:150px" rows="10" col="10"></textarea>
	<button type="submit" class="btn btn-default add" name="add_placement_news">Add</button>
	<button type="submit" class="btn btn-default add" name="delete_placement_news">Delete</button>
	<?php echo "<h5 style='color:red'>".$print3."</h5>"?>
	</div>
	</form> 
<label for="email">Upload CV:</label>
	<form action ="StudentAdiminPanel.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
    <textarea class="form-control" name="director" placeholder="Enter the text You Want to Display" style="width:500px; height:150px" rows="10" col="10"></textarea>
	<button type="submit" class="btn btn-default add" name="add_cv">Add</button>
	
	<button type="submit" class="btn btn-default add" name="update_cv">Update</button>
	<button type="submit" class="btn btn-default add" name="delete_cv">Delete</button>
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