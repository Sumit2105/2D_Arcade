<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<title>TNP NIT Silchar</title>

<!--bottom Slider-->    
</head>

<body style="font-family:'Open Sans',sans-serif";>
<?php include 'header.php';?>




    <!-- Use a container to wrap the slider, the purpose is to enable slider to always fit width of the wrapper while window resize -->
    <div class="container">
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
        <!-- ================================================== -->
        <div id="slider1_container" style="display: none; position: relative; margin-top:20px; width: 1140px; height: 442px; overflow: hidden;">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(image/Main_Slider/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
            overflow: hidden;">
                <div>
                    <img u="image" src2="image/Main_Slider/home/001.jpg" />
                </div>
                <div>
                    <img u="image" src2="image/Main_Slider/home/002.jpg" />
                </div>
                <div>
                    <img u="image" src2="image/Main_Slider/home/003.jpg" />
                </div>
                <div>
                    <img u="image" src2="image/Main_Slider/home/004.jpg" />
                </div>
				<div>
                    <img u="image" src2="image/Main_Slider/home/005.jpg" />
                </div>
				<div>
                    <img u="image" src2="image/Main_Slider/home/006.jpg" />
                </div>
				<div>
                    <img u="image" src2="image/Main_Slider/home/007.jpg" />
                </div>
            </div>
            
           
            <style>
                /* jssor slider bullet navigator skin 05 css */
                /*
                .jssorb05 div           (normal)
                .jssorb05 div:hover     (normal mouseover)
                .jssorb05 .av           (active)
                .jssorb05 .av:hover     (active mouseover)
                .jssorb05 .dn           (mousedown)
                */
                .jssorb05 {
                    position: absolute;
                }
                .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 16px;
                    height: 16px;
                    background: url(image/Main_Slider/b05.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb05 div { background-position: -7px -7px; }
                .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
                .jssorb05 .av { background-position: -67px -7px; }
                .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
           
            <style>
                /* jssor slider arrow navigator skin 11 css */
                /*
                .jssora11l                  (normal)
                .jssora11r                  (normal)
                .jssora11l:hover            (normal mouseover)
                .jssora11r:hover            (normal mouseover)
                .jssora11l.jssora11ldn      (mousedown)
                .jssora11r.jssora11rdn      (mousedown)
                */
                .jssora11l, .jssora11r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 37px;
                    height: 37px;
                    cursor: pointer;
                    background: url(image/Main_Slider/a11.png) no-repeat;
                    overflow: hidden;
                }
                .jssora11l { background-position: -11px -41px; }
                .jssora11r { background-position: -71px -41px; }
                .jssora11l:hover { background-position: -131px -41px; }
                .jssora11r:hover { background-position: -191px -41px; }
                .jssora11l.jssora11ldn { background-position: -251px -41px; }
                .jssora11r.jssora11rdn { background-position: -311px -41px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
        </div>
        <!-- Jssor Slider End -->
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <hr class="featurette-divider">



        <!-- /END THE FEATURETTES -->
      
      

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="JS/Slider/jquery-1.9.1.min.js"></script>
    <script src="JS/Slider/bootstrap.min.js"></script>
    <script src="JS/Slider/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="JS/Slider/ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.js + jssor.slider.js instead for development -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="JS/Slider/jssor.slider.mini.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    </div>
	<div class="container">     
    <div class="row-fluid">
        <!-- Left Sidebar(Content Part) -->        
        <div class="span9">
            <div class="row-fluid">
                <div class="headline"><h3>Welcome</h3></div>
				<?php
				$c=mysqli_connect("localhost","root","","test");
				$str="select welcome_message from home where sr_no=1";
				$rs=mysqli_query($c, $str) or die("Query Problem");
					echo "<p>";
					while($row=mysqli_fetch_array($rs))
						echo $row["welcome_message"];
					echo "</p>";
				?>
				
            </div><!--/row-fluid--> 
            <div class="row-fluid">
                <div class="headline"><h3>About Us</h3></div>
				<?php
				$c=mysqli_connect("localhost","root","","test");
				$str="select about_us from home where sr_no=1";
				$rs=mysqli_query($c, $str) or die("Query Problem");
					echo "<p>";
					while($row=mysqli_fetch_array($rs))
						echo $row["about_us"];
					echo "</p>";
				?>
				
                <p>The T&P Cell not only acts as a facilitator for training and placements, but also works towards overall development of students, profession wise so that they are well equipped to meet the challeges demanded by the profession. The T&P cell is student-driven which consists of students from each discipline who work as a team under the guidance of its Faculty-Incharge(Training and Placements). It primarily works as a liasion between the industry and the institute. The companies visiting the campus have spoken highly about the hospitality and assistance offered by the team.</p>

                <p>The Training and Placement Office is run and managed by an efficient team of office staff &amp; students and handles all aspects of placements at Nit Silchar. Right from contacting companies to managing all logistics of arranging for tests, pre-placement talks and conducting final interviews the Training and Placement team provides it's best possible assistance to the recruiters. The hospitality and the functioning of Training and Placement Office is applauded and well received by the visiting recruiters every year.</p>
				
            </div><!--/row-fluid-->        
            
            <div class="row-fluid">
            <div class="headline"><h3>From the Director's Desk</h3></div>
            
                <img style="margin-left:30px"class="pull-right lft-img-margin img-width-200" src="image/director.jpg" alt="">
				<?php
				$c=mysqli_connect("localhost","root","","test");
				$str="select director_message from home where sr_no=1";
				$rs=mysqli_query($c, $str) or die("Query Problem");
					echo "<p>";
					while($row=mysqli_fetch_array($rs))
						echo $row["director_message"];
					echo "</p>";
				?>
			
            </div>
        </div><!--/span9-->

        <!-- Right Sidebar -->        
        <div class="span3">
		
		<div class="who margin-bottom-30">
        <div class="headline"><h3>Latest Updates</h3></div>
        <?php
		$c=mysqli_connect("localhost","root","","test");
		$str1="SELECT * FROM latest_updates";
		$rs1=mysqli_query($c, $str1) or die("Query Problem");
		echo "<p>";
		while($row=mysqli_fetch_array($rs1))
		{
			echo "<div class=\"row-fluid\">";
			$temp_var1=$row["file_path"];
			echo "<a href=\"$temp_var1\" target=\"_blank\">";
			echo "<font color=\"#0033CC\">";
			echo "<b>";
			echo $row["info"];
			echo "</b>";
			echo "</font>";
			echo "</a>";
			echo "</div>";
			echo "<br>";
		}
			
			
		echo "</p>";
		?>
        
    </div>
		<div class="who margin-bottom-30">
        <div class="headline"><h3>Quick Links</h3></div>
		 <div class="row-fluid"><a href="downloads/Placement-Brochure-16.pdf" target="_blank"><font color="#0033CC"><b>Company Registration</b></font></a></div><br>
         <div class="row-fluid"><a href="MeetOurTeam.php" target="_blank"><font color="#0033CC"><b>Meet Our Team</b></font></a></div><br>
		<div class="row-fluid"><a href="downloads/Placement-Brochure-16.pdf" target="_blank"><font color="#0033CC"><b>Reaching NIT Silchar</b></font></a></div>
		
        
    </div>
    <div class="who margin-bottom-30">
        <div class="headline"><h3>Placement Statistics</h3></div>
		<p align="justify"><img src="image/statistics/stat.jpg" width="200" height="99"></p>
		<?php
		$c=mysqli_connect("localhost","root","","test");
		$str3="SELECT * FROM placement_statistics";
		$rs3=mysqli_query($c, $str3) or die("Query Problem");
		echo "<table>";
		echo "<tbody>";
		while($row=mysqli_fetch_array($rs3))
		{
		echo "<tr>";
		echo "<td>";
		echo "<img src=\"image/statistics/FORWARD312k2.GIF\" height=\"30\" width=\"30\"></td><td><a href=\"downloads/Placement Stats 2011.xlsx\" target=\"_blank\">";
		echo "</td>";
	    echo "<td>";
		$temp_var=$row["file_path"];
	    echo "<a href=\"$temp_var\" target=\"_blank\">";
		echo "<font color=\"#0033CC\">";
		echo "<b>";
		echo "Placement Statistics ". $row["year"];
		echo "</b>";
		echo "</font>";
		echo "</a>";
		echo "</td>";
		echo "</tr>";
		
		}
		echo "</tbody>";
		echo "</table>";
		?>
		
		
<table>
<tbody><tr><td><img src="image/statistics/new.gif" height="30" width="30"></td><td><a href="downloads/Placement Stats 2011.xlsx" target="_blank"><font color="#0033CC"><b>Placement Statistics 2014 - 15  </b></font></a></td></tr>
<tr><td><img src="image/statistics/FORWARD312k2.GIF" height="30" width="30"></td><td><a href="downloads/Placement Stats 2011.xlsx" target="_blank"><font color="#0033CC"><b>Placement Statistics 2013 - 14 </b></font></a></td></tr>
<tr><td><img src="image/statistics/FORWARD312k2.GIF" height="30" width="30"></td><td><a href="downloads/Placement Stats 2011.xlsx" target="_blank"><font color="#0033CC"><b>Placement Statistics 2012 - 13</b></font></a></td></tr>
<tr><td><img src="image/statistics/FORWARD312k2.GIF" height="30" width="30"></td><td><a href="downloads/Placement Stats 2011.xlsx" target="_blank"><font color="#0033CC"><b>Placement Statistics 2011 - 12</b></font></a></td></tr>
<tr><td><img src="image/statistics/FORWARD312k2.GIF" height="30" width="30"></td><td><a href="downloads/Placement Stats 2011.xlsx" target="_blank"><font color="#0033CC"><b>Placement Statistics 2010 - 11</b></font></a></td></tr>
</tbody></table>
        
    </div>

    <div class="who margin-bottom-30">
        <div class="headline"><h3>Placement Brochure</h3></div>
        <img src="image/statistics/new.gif" height="30" width="30"><a href="upload/broucher/Brochure.pdf" target="_blank"><font color="#0033CC"><b>Download Placement Brouchure</b></font></a>
    </div>
</div><!--/span3-->

    </div><!--/row-fluid-->
    <!-- //End Container -->

   
</div>
    
    <!-- Our Clients -->
    <div id="clients-flexslider" class="flexslider home clients" style="margin-left:98px;margin-right:100px">
        <div class="headline"><h3>Past Recruiters</h3></div>    
            <ul class="slides slide-logo">
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Amazon.png" alt="" class="color-img" style="height:123px; width:123px" /><img src="image/BottomSlider_Img/Black-White Images/Amazon_black.png" alt="" style="height:123px; width:123px" /></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/BrahMos.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/BrahMos_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Godrej.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Godrej_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Honda.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Honda_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Hp.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Hp_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/IBM.png" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/IBM_black.png" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/IndianArmy.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/IndianArmy_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/itc.png" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/itc_black.png" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/L& T.png" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/L& T_black.png" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Marutiuzuki.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Marutiuzuki_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/MuSigma.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/MuSigma_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/NationalInstruments.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/NationalInstruments_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Nokia.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Nokia_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Ongc.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Ongc_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Oracle.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Oracle_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Philips.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Philips_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/SnapDeal.png" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/SnapDeal_black.png" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Sony.png" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Sony_black.png"alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/TataMotors.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/TataMotors_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/TCS.png" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/TCS_black.png" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Unisys.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Unisys_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Yodlee.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Yodlee_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Mahindra.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Mahindra_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Samsung.png" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Samsung_black.png" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/BHEL.png" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/BHEL_black.png" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/GoldmanSachs.png" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/GoldmanSachs_black.png" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Gammon.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Gammon_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/HindustanPetroleum.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/HindustanPetroleum_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/IndianOil.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/IndianOil_black.jpg" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Zs.png" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Zs_black.png" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/JohnDeere.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/JohnDeere_black.jpg"alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Ntpc.gif" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/ntpc_logo_3865.gif" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Polaris.png" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Polaris-Logo-EPS-vector-image.png" alt="" style="height:123px; width:123px"/></a></li>
 <li> <a href="" target="_blank"> <img src="image/BottomSlider_Img/Color_Images/Resonance.jpg" alt="" class="color-img" style="height:123px; width:123px"/><img src="image/BottomSlider_Img/Black-White Images/Resonance-Kota-India.jpg" alt="" style="height:123px; width:123px"/></a></li>
	</ul>
    </div><!--/flexslider-->
    <hr>
    
    <div style="margin-left:100px;"><p>
     <a href="company_list.html">See More</a>
    </p></div>
    <!-- //End Our Clients -->
</div><!--/container-->     

<!-- JS Global Compulsory -->			
<script type="text/javascript" src="js/Bottom_Slider/jquery-1.8.2.min.js"></script>		
<script type="text/javascript" src="js/Bottom_Slider/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="js/Bottom_Slider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/Bottom_Slider/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="js/Bottom_Slider/app.js"></script>
<!--<script type="text/javascript" src="js/index.js"></script>-->
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
    });
</script>
<?php include 'footer.php';?>
</body>
</html>