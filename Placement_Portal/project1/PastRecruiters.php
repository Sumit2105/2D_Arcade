<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Past Recruiters</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/assets_reach/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/assets_reach/css/style.css">
    <link rel="stylesheet" href="assets/assets_reach/css/headers/header1.css">
    <link rel="stylesheet" href="assets/assets_reach/plugins/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="assets/assets_reach/css/style_responsive.css">
        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="assets/assets_reach/plugins/font-awesome/css/font-awesome.css">
    
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/assets_reach/css/themes/default.css" id="style_color">
    <link rel="stylesheet" href="assets/assets_reach/css/themes/headers/default.css" id="style_color-header-1">
</head>

<body>
<?php include 'header.php';?>
<div class="row-fluid breadcrumbs margin-bottom-40">
  <div class="container">
        <h1 class="pull-left">Past Recruiters</h1>
  </div><!--/container-->
</div><!--/breadcrumbs-->
<div class="container">
<div class="row-fluid">     
  <div class="span9">


<div class="row-fluid">
    
  <div class="row-fluid">
	<div class="span12">
		<div class="headline"><h3>This is a list of companies that have visited our campus</h3></div>
		<?php 
		$c=mysqli_connect("localhost","root","","test") or die("connection problem");
		$str="select * from company";
		$rs=mysqli_query($c,$str) or die("error");
		echo "<div class='table-responsive'>";
		echo "<table class='table-striped'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>Company name</th>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
		while($row=mysqli_fetch_array($rs))
		{
			echo "<tr>";
			echo "<td>".$row["company_name"]."</td></tr>";
		}
		echo "<tbody>";
		echo "</table></div>";

		?>
		
		
	</div>
	</div>
	



  </div>



    </div>
    </div>
    </div>
    
    
    <?php include 'footer.php';?>
</body>
</html>
