<!DOCTYPE html>
<?php
//session_start();
?>
<html>
<head>
<meta charset="utf-8" />
<title>Student</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
<link href="css/site.css" rel="stylesheet" type="text/css" />
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="JS/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
<style>

</style>
</head>

<body>
<?php
if(isset($_POST["submit_image"])){
	$var6=$_SESSION['login_user'];
	$c=mysqli_connect("localhost","root","","test");
	$n="upload/user/".$var6.".jpg";
	move_uploaded_file($_FILES["file"]["tmp_name"], $n);
	$str="UPDATE sign_up_table SET image='$n' WHERE scholar_no='$var6'";
	mysqli_query($c,$str) or die("Query Problem");
}
?>

<?php
$c=mysqli_connect("localhost","root","","test");
$var7=$_SESSION['login_user'];
$select_name1="SELECT * FROM sign_up_table WHERE scholar_no='$var7'";
$rs4=mysqli_query($c, $select_name1) or die("Query Problem");
while($row2=mysqli_fetch_array($rs4))
{
	$var8=$row2["name"];
	$var9=$row2["image"];
}
if(isset($_POST["comment_button"])){
	$a5=$_POST["comment_textarea"];
	$add_comment_query="INSERT INTO comments_table(comment, name, image_path) VALUES ('$a5','$var8','$var9')";
	mysqli_query($c, $add_comment_query) or die("Query Problem");
}


?>
<?php
$print_name="";
$print_branch="";
$print_scholar="";
$print_programme="";
$print_email="";

$c=mysqli_connect("localhost","root","","test");
$var=$_SESSION['login_user'];
$select_query1="SELECT * FROM sign_up_table WHERE scholar_no='$var'";
$rs1=mysqli_query($c, $select_query1) or die("Query Problem");
while($row=mysqli_fetch_array($rs1))
{
	$print_name=$row["name"];
	$print_branch=$row["branch"];
    $print_scholar=$row["scholar_no"];
    $print_programme=$row["programme"];
    $print_email=$row["email"];
}

?>
<div class="container">

<div class="row">
<div class="col-md-2" style="border-right:solid 1px #e5e5e5; height: 300px;width: 231px;">

<form action="StudentHome.php" method="post" enctype="multipart/form-data">
<div>
<?php
$a2=$_SESSION['login_user'];
echo "<img style=\"width:100px;height:100px; border:solid 2px #A39F9E;\" src=\"upload/user/$a2.jpg\" />"
?>
</div>
    Select image to upload:
    <div style="position:relative;">
        <a class='btn btn-default btn-xs' href='javascript:;'>
            Choose File...
            <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file" id="file" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info"></span>
</div>
<p></p>
    <button type="submit" value="Upload Image" name="submit_image" class="btn btn-info btn-xs" style="width:110px" >Submit</button>
    <p></p>
</form>

</div>
<div class="col-md-4">
    <h3>Details</h3>
    <hr>
<div><span style=" font-size:19px; color:rgba(32, 32, 32, 0.87)">Name:&nbsp</span><span style="font-size:15px;color:#337ab7"><?php echo $print_name; ?></span></div>
<div><span style="font-size:19px; color:rgba(32, 32, 32, 0.87)">Branch:&nbsp</span><span style="font-size:15px;color:#337ab7"><?php echo $print_branch; ?></span></div>
<div><span style="font-size:19px; color:rgba(32, 32, 32, 0.87)">Scholar Number:&nbsp</span><span style="font-size:15px;color:#337ab7"><?php echo $print_scholar; ?></span></div>
<div><span style="font-size:19px; color:rgba(32, 32, 32, 0.87)">Programme:&nbsp</span><span style="font-size:15px;color:#337ab7"><?php echo $print_programme; ?></span></div>
<div><span style="font-size:19px; color:rgba(32, 32, 32, 0.87)">Email:&nbsp</span><span style="font-size:15px;color:#337ab7"><?php echo $print_email; ?></span></div>
<br>
<p><a href="#">Edit Info</a></p>
<hr>
</div>
<div class="col-md-2"></div>

<div class="col-md-4 " style="margin-left:13%">

<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<?php
$c=mysqli_connect("localhost","root","","test");
$select_query="SELECT * FROM news_content";
$rs=mysqli_query($c, $select_query) or die("Query Problem");
echo "<ul class=\"demo1\">";
while($row=mysqli_fetch_array($rs)){
	echo "<li class=\"news-item\">";
	echo $row["content"];
	echo "<a href=\"#\">";
	echo "</a>";
	echo "</li>";
}
echo "</ul>";

?>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>

</div>
<div class="row">
<div class="col-lg-7" style="background-color:white; padding:10px 10px 10px 10px;">

<?php
$a3=$_SESSION['login_user'];
$c=mysqli_connect("localhost","root","","test");
$select_query1="SELECT * FROM student_post_updates";
$rs1=mysqli_query($c, $select_query1) or die("Query Problem");


while($row=mysqli_fetch_array($rs1)){
	echo "<hr>";
	$a1="SELECT * FROM comments_table";
	$rs2=mysqli_query($c, $a1) or die("Query Problem");
	
	echo "<p>";
	echo $row["post"];
	echo "</p>";
	echo "<hr>";
	echo "<div style=\"background-color:rgb(239, 239, 239); padding:10px 10px 10px 10px\" >";
	while($row1=mysqli_fetch_array($rs2))
	{
		$var10=$row1["image_path"];
		echo "<p>";
		echo "<img src=\"$var10\" style=\"width:40px; height:40px; border:solid 1px #A39F9E; margin-bottom:10px\">";
		echo "<a color=\"red\">";
		echo $row1["name"] ."</a>"."- ".$row1["comment"];
	    echo "</p>";
	}
	
	echo "<hr>";
	echo "<form action =\"StudentHome.php\" method=\"post\" enctype=\"multipart/form-data\">";
	echo "<img src=\"upload/user/$a3.jpg\" style=\"width:40px; height:40px; border:solid 1px #A39F9E; margin-bottom:10px\">";
	echo "<textarea name=\"comment_textarea\" placeholder=\"Write a Comment..\" style=\"width:500px; height:40px\" rows=\"10\" col=\"10\">";
	echo "</textarea>";
	echo "<button style=\"margin-bottom:10px\" type=\"submit\" class=\"btn btn-info add\" name=\"comment_button\">Comment</button>";	
    echo "</form>";
	echo "</div>";
}

?>

<?php
$c=mysqli_connect("localhost","root","","test");
?>
</div>
<div class="col-lg-1"></div>
<div class="col-lg-4" style="padding-left:0px">

<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Recent Placement News</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<?php
$c=mysqli_connect("localhost","root","","test");
$select_query1="SELECT * FROM placed_news";
$rs=mysqli_query($c, $select_query1) or die("Query Problem");
echo "<ul class=\"demo2\">";
while($row=mysqli_fetch_array($rs)){
	echo "<li class=\"news-item\">";
	echo $row["content"];
	echo "<a href=\"#\">";
	echo "</a>";
	echo "</li>";
}
echo "</ul>";

?>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 5,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		$(".demo2").bootstrapNews({
            newsPerPage: 8,
            autoplay: true,
			pauseOnHover:true,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function () {
                //console.log(this);
            }
        });

        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,
            
            onToDo: function () {
                //console.log(this);
            }
        });
    });
</script>
</body>
</html>