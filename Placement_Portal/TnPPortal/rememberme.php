<?php
	
if (isset($_POST['scholar_no']) && isset($_POST['pass'])) {
echo $_POST['scholar_no']."are set";
  $scholar_no = test_input($_POST['scholar_no']);
  $pass = test_input($_POST['pass']);
  $hashpass=md5($pass);
		
		$c=mysqli_connect("localhost","root","","test") or die("not conected"); //connect to database
		
			$str1="select * from sign_up_table where scholar_no='$scholar_no' and hashpass='$hashpass'  ";
			$str2="select * from sign_up_table where scholar_no='$scholar_no'";
			$rs1=mysqli_query($c,$str1);
			$rs2=mysqli_query($c,$str2);
			$count1=mysqli_num_rows($rs1);
			$count2=mysqli_num_rows($rs2);
			
			if($count2==0)
				$Err="Scholar Number "."<b><i>\"".$scholar_no."\"</b></i>". " is not registered";
			else if($count2!=0 && $count1==0)
				$Err= "Incorrect Password";
			else if($count1==1)
				
				{
					header('Location:index.php');
				}

  if (isset($_POST['remember']) && $_POST['remember'] == 'on') {
    /*
     * Set Cookie from here for one hour
     * */ echo "Inside Remember";
    setcookie("scholar_no", $scholar_no, time()+3600);
    setcookie("pass", $pass, time()+3600);  /* expire in 1 hour */
  } else {
    /**
     * Following code will unset the cookie
     * it set cookie 1 sec back to current Unix time
     * so that it will invalid
     * */
	 echo"cookie unset";
    setcookie("scholar_no", $scholar_no, time()-1);
    setcookie("pass", $pass, time()-1);
  }

} else {
  $scholar_no = '';
  $pass = '';
echo "else";
  if (isset($_COOKIE['scholar_no'])) {
  echo "cookie is set";
    $scholar_no = $_COOKIE['scholar_no'];
  }

  if (isset($_COOKIE['pass'])) {
  echo "cookie is set";
    $pass = $_COOKIE['pass'];
  }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
	}
?>
<h3 style="text-align: center;">Basic Login Script with cookie functionality</h3>
<form name="cookietest" action="" method="post">
  <table border="1" align="center">
    <thead>
      <tr>
        <th colspan="2">Login Here</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>scholar_no :</td>
        <td><input type="text" name="scholar_no" value="<?=$scholar_no?>"></td>
      </tr>
      <tr>
        <td>pass :</td>
        <td><input type="pass" name="pass" value="<?=$pass?>"></td>
      </tr>
      <tr>
        <td colspan="2">
          <label><input type="checkbox" name="remember">
            Remember Me on this PC for 1 Hour
          </label>
        </td>
      </tr>
      <tr>
        <td align="center" colspan="2"><input type="submit" name="submit" value="Login Here"></td>
      </tr>
    </tbody>
  </table>
</form>