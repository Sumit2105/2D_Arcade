<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8" />
<title>jQuery Bootstrap News Box Plugin Demos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
<link href="css/site.css" rel="stylesheet" type="text/css" />
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="JS/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
</head>

<body>

<?php ?>
<div class="container">
<div class="row">
<div class="col-md-2" style="border-right:solid 1px #e5e5e5; height: 196px;width: 231px;">

<form action="upload.php" method="post" enctype="multipart/form-data">
<div><img style="width:100px;height:100px"/></div>
    Select image to upload:
    <div style="position:relative;">
        <a class='btn btn-default btn-xs' href='javascript:;'>
            Choose File...
            <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info"></span>
</div>
<p></p>
    <button type="submit" value="Upload Image" name="submit" class="btn btn-info btn-xs" style="width:110px" >Submit</button>
    <p></p>
</form>

</div>
<div class="col-md-4">
    <h4>Details</h4>
    <hr>
<p>sumit</p>
</div>
<div class="col-md-2"></div>

<div class="col-md-4 " style="margin-left:13%">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo1">
<li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
<li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
<li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
<li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
<li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
<li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
</ul>
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
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		$(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
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