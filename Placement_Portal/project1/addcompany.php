 <?php 
 if(isset($_POST["add"]))
 {
 $a=$_POST["company"];
 $c=mysqli_connect("localhost","root","","test") or die("connection problem");
 $str="insert into company(company_name) values('$a')";
 mysqli_query($c,$str) or die("error");
 echo "insertion successfull";
 }
 ?>