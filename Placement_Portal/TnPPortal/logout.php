<?php
session_start();
session_destroy() ;// Destroying All Sessions
setcookie("scholar_no", $scholar_no, time()-1);
setcookie("pass", $pass, time()-1);
header("Location: login.php"); // Redirecting To Home Page

?>