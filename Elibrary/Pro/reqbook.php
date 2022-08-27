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
				<h3 id="heading">Request New Book</h3>
					<div id="center">
					<?php
						if(isset($_POST["submit"]))
						{
							$sql="insert into request (ID,MES,LOGS) values ({$_SESSION["ID"]},'{$_POST["mess"]}',now())";
							$db->query($sql);
							echo "<p class='success'>Request Sent</p>";
						
						}
						
									
					?>
					
						<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
							
							<label>Message</label>
							<textarea required name="mess"></textarea>
							<button type="submit" name="submit">Send Message</button>
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
 