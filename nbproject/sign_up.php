<?php
include("conn.php");    

		if(isset($_POST['Submit']))
		{
		$name=$_POST['u_name'];
		$pass=$_POST['u_pass'];
		if($name=='')
		{
		echo"<script>alert('Enter your name')</script>";
		//exit();
		}
		else if($pass=='')
		{
		echo"<script>alert('Enter your Password')</script>";
		//exit();
		}
		else
		{
		$que="Insert into webassign VALUES ('$name','$pass')";
				
$result=mysqli_query($conn,$que);
		if($result > 0)
		{
		echo"<script>alert('Registration Sucessful')</script>";
		echo"<script> window.open('signed.php','_self')</script>";
		}}
		}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sign Up Page</title>
<style type="text/css">
<!--
.style3 {
	color: #0033CC;
	font-weight: bold;
}
.style4 {
	color: #990000;
	font-weight: bold;
}

-->
</style>
</head>

<body><center>
  <p class="style4">SIGN UP HERE     </p>
</center>

<form  method="post" action="sign_up.php">
<table width="297" border="1" align="center">
  <tr>
    <td width="113" bordercolor="#0000FF" bgcolor="#99FFCC"><span class="style3">User Name </span></td>
    <td width="168"><input name="u_name" type="text" id="u_name" /></td>
  </tr>
  <tr>
    <td bordercolor="#0000FF" bgcolor="#99FFCC"><span class="style3">Password</span></td>
    <td><input name="u_pass" type="password" id="u_pass" /></td>
  </tr>
  <tr bordercolor="#0000FF" bgcolor="#99FFCC">
    <td colspan="2"><div align="center"><strong>
      <input type="submit" name="Submit" value="Sign Up" />
    </strong></div></td>
    </tr>
</table>


</form>
</body>
</html>

