<?php
session_start();
?>
<html>
<head>
<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="<css sheet>">
<body>
      <div class="loginbox">
		<br>
			<h1>Login here</h1>
			<form action = " " method="post">
			<br>
				<p>Phone Number</p>
				<input type="email" name="email" placeholder="Enter Email">
				<p>Password</p>
				<input type="password" name="Password" placeholder="Password">
				<br>
				<input type="submit" name="login" value="Login"/>
				<br>
				<br>
				<input type="submit" name="register" value="Not Yet A memeber"/>
				<br>
			</form>
	  </div>
<?php
if(isset($_POST['login']))
{
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,'<database name>');	
	$email=$_POST['email'];
	$password = $_POST['Password'];
	$query = mysqli_query($connection,"select * from <database> where email='$email' and password='$passwod'");
	if(mysqli_num_rows($query)==0)
	{
			echo "<tr><td colspan='4'> No rows returned</td></tr>";
	}
	else
	{
			$_SESSION['phone'] = $email;
			echo '<script langauge="javascript">';
			echo 'alert("login success")';
			echo '</script>';
			echo "<script> window.location.assign('<next progressive page>');</script>";
		
	}
			
	
}
?>
</body>
</head>
</html>

