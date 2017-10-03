<?php
if(isset($_POST['Submit']))
		{
                   
			$username=htmlentities($_POST['username'],ENT_QUOTES);
			$password=htmlentities($_POST['password'],ENT_QUOTES);
			if($username=="" or $password=="")
			{
			$text="<font color=red>Please Enter Username/Password</font>";
			$_SESSION['type']=0;
			}
			else
			{
				require_once('conn.php');
                    $password = $password; 
					$sql="Select username,password from webassign where username='$username' and password='$password'";
					$result=mysqli_query($conn,$sql);
                    if($result and mysqli_num_rows($result)>0)
					{
						$row=mysqli_fetch_array($result);
						$_SESSION['login']=true;
						$_SESSION['user']=$row['username'];
						
						die("<script>top.location='home.php'</script>");
					
					}
				}
				die("<script>top.location='faliure.php'</script>");

			}
		

?>

<head>
<script>
function validate()
{
	var f=document.form1;
	if(f.username.value == "")
	{	error(document.getElementById("usernametext"));
		f.username.focus();
		return false;
	}
	if(f.password.value=="")
	{	error(document.getElementById("passwordtext"));
		f.password.focus();
		return false;
	}
	return true;
}
function error(id)
{
	id.style.color='red'
}

</script>
<title>Login</title >
</head>
<body>
<form name="form1" method="post" action="login.php" onsubmit="return validate()"autocomplete="off">
<div id="content">
<div id="right">
<div align="center" class="box"><!--<?php echo $text ?>--></div>
<table align="center" border="0" cellpadding="5" cellspacing="5">
<tr >
<td ><span id="usernametext">Username</span> : </td>
<td ><input type="text" name="username" size="18"   placeholder="usernamme"/></td>
</tr>
<tr >
<td ><span id="passwordtext">Password</span> : </td>
<td ><input type="password" name="password" size="18" placeholder="password" /></td>
</tr>
<tr >
<td>&nbsp;</td>
<td style=" margin-left=15px" ><input type="submit" name="Submit" value="Login" />&nbsp &nbsp&nbsp <button>
<a href="sign_up.php" style=" text-decoration: none;color: black">Sign up</button></td>

    
           
</tr><tr><td>&nbsp;</td></tr>
</table>
    


</div>
</div>
</form>
</body>
</html>
