<?php
include('../TnPPortal/session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>

</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="../TnPPortal/logout.php">Log Out</a></b>
</div>
</body>
</html>