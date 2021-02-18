<html>
	<head>
		<title>Image upload</title>
		<link rel="stylesheet" type="text/css" href="<style sheet>">
	</head>
	<body>
		<div class="simple-form">
		<center><h1 id="h1">upload Here</h1></center>
			<form method="post" enctype="multipart/form-data">
				Upload Image :<br><br>
				<input type="file" name="myfile" id="button"><br><br>
				<input type="submit" name="submit" value="Register" id="butt">
			</form>
		</div>
	</body>
</html>

<?php 
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,'<database>');
	if(isset($_POST['submit']))
	{
		$data = file_get_contents($_FILES['myfile']['tmp_name']);
		$stmt = $dbh->prepare("insert into <table> values(?)");
		$stmt->bindParam(1,$data);
		$stmt->execute();
	}
?>