<?php
	session_start();
	include "database.php";

	if(!isset($_SESSION["AID"]))
	{
		header("location:alogin.php");
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
				<h3 id="heading">Upload Books</h3>
					<div id="center">
					<?php
						if(isset($_POST["submit"]))
						{
							$target_dir="upload/";
							$target_file=$target_dir.basename($_FILES["efile"]["name"]);//$target_file=$target_dir.basename($_FILES["efile"]["name"]);
							
							if(move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file))//if(move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file))
							{
								$sql="insert into book(BTITLE,KEYWORDS,FILE) values ('{$_POST["bname"]}','{$_POST["keys"]}','{$target_file}')";
								$db->query($sql);
								echo "<p class='success'>Uploaded Successfully</p>";
							}
							else
							{
								echo "<p class='error'>Error In Upload</p>";
							}
						}
						
									
					?>
					
						<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
							<label>Book Title</label>
							<input type="text" name="bname" required>
							<label>Keyword</label>
							<textarea name="keys" required></textarea>
							<label>Upload File</label>
							<input type="file" name="efile" size="90" required>
							<button type="submit" name="submit">Upload</button>
						</form>
					</div>
					
				</div>
				<div id="navi">
					<?php 
						include "adminsb.php"
					?>
				</div>
				<div id="footer">
					<p>Copyright &copy; Siva Prasanna 2017</p>
				</div>
		</div>


	</body>
</html>
 