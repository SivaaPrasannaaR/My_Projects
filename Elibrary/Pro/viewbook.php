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
				<h3 id="heading">View Book Details</h3>
					
					<?php
						$sql="select * from book";
						$res=$db->query($sql);
						if($res->num_rows>0)
						{
							echo "<table>
							<tr>
								<th>SNO</th>
								<th>Book</th>
								<th>KEYWORD</th>
								<th>VIEW</th>
							</tr>
							";
							$i=0;
							while($row=$res->fetch_assoc())
							{
									$i++;
									echo "<tr>";
									echo "<td>{$i}</td>";
									echo "<td>{$row["BTITLE"]}</td>";
									echo "<td>{$row["KEYWORDS"]}</td>";
									echo "<td><a href='{$row["FILE"]}' traget='_blank'>View</a></td>";
									echo "</tr>";
									
							}
							echo "</table>";
						}
						else
						{
							echo "<p class='error'> No Books Found</p>";
						}
					?>
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
 