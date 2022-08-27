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
				<h3 id="heading">Give Your Comment about the Book</h3>
						<?php
						if(isset($_POST["submit"]))
						{
						$sql="INSERT into comment (BID, SID, COMM, LOGS) VALUES({$_GET["id"]},{$_SESSION["ID"]},'{$_POST["mes"]}' , now() )";
						}
						
							$sql="SELECT * from BOOK where BID=".$_GET["id"];
							$res=$db->query($sql);
						if($res->num_rows>0)
						{
							echo "<table>";
							$row=$res->fetch_assoc();
							echo "<tr>
									<th>BOOK NAME</th>
									<td>{$row["BTITLE"]}</td>
								</tr>
								<tr>
									<th>KEYWORDS</th>
									<td>{$row["KEYWORDS"]}</td>
								</tr>";
								echo "</table>";
						}
						else
						{
							echo "<p class='error'> No Books Found</p>";
						}
						?>
				
					<div id="center">
							<form action="<?php echo $_SERVER["REQUEST_URI"];?>" method="post">
							
							<label>Your CommentS</label>
							<textarea required name="mes"></textarea>
							<button type="submit" name="submit">Post Now</button>
						</form>
							
					</div>
					<?php
					$sql="SELECT student.name, comment.comm, comment.logs from comment inner join student on comment.sid=student.id where comment.bid={$_GET["id"]} order by comment.cid desc";
					$res=$db->query($sql);
						if($res->num_rows>0)
						{
							while($row=$res->fetch_assoc())
							{
								echo "<p>
								<strong{$row["NAME"]} : 
								<strong>{$row["COMM"]}<i>{$row["LOGS"]}</i><p>";
							}
						}
						else
						{
							echo "<p class='error'>No Comment Yet</p>";
						}
					?>
					
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
 
					