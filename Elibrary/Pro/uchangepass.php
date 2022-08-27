<?php
	session_start();
	include "database.php";

	if(!isset($_SESSION["ID"]))
	{
		header("location:ulogin.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Siva Prasanna</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body >
		<div id="container">
				<div id="header">
					<h1>E-Library Management System</h1>
				</div>
				<div id="wrapper">
				<h3 id="heading">Change Password</h3>
					<div id="center">
					<?php
						if(isset($_POST["submit"]))
						{
							$sql="SELECT * FROM student where PASS='{$_POST["opass"]}' and ID='{$_SESSION["ID"]}'";
							$res=$db->query($sql);
							
							if($res->num_rows>0)
							{
								$s="update student set PASS='{$_POST["npass"]}' where  ID=".$_SESSION["ID"];
								$db->query($sql);
								echo "<p class='success'>Password Changed Successfully</p>";
							}
							else
							{
								echo "<p class='error'>Invalid Password</p>";
							}
						}
						
									
					?>
					
						<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
							<label>Old Password</label>
							<input type="password" name="opass" required>
							<label>New Password</label>
							<input type="password" name="npass" required>
							<button type="submit" name="submit">Update Password </button>
						</form>
					</div>
					
				</div>
				<div id="navi">
					<?php 
						include "usersb.php"
					?>
				</div>
				<div id="footer">
					<p>Copyright &copy; Siva Prasanna 2017</p>
				</div>
		</div>


	</body>
</html>
 