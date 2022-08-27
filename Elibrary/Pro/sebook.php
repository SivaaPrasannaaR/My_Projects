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
				<h3 id="heading">Search Books</h3>
					<div id="center">
									
						<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
							
							<label>Enter the Book Name or Keywords here</label>
							<input type="text" required name="name">
							<button type="submit" name="submit">Search Now</button>
						</form>
					</div>
					<?php
						if(isset($_POST["submit"]))
						{						
							
					
						$sql="select * from book where BTITLE like '%{$_POST["name"]}%' or KEYWORDS like '%{$_POST["name"]}%'";
						$res=$db->query($sql);
						if($res->num_rows>0)
						{
							echo "<table>
							<tr>
								<th>SNO</th>
								<th>Book</th>
								<th>KEYWORD</th>
								<th>VIEW</th>
								<th>COMMENT</th>
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
									echo "<td><a href='comment.php?id={$row["BID"]}'>Go</a></td>";
									echo "</tr>";
									
							}
							echo "</table>";
						}
						else
						{
							echo "<p class='error'> No Books Found</p>";
						}
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
 