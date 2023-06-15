<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";
$mysql = new mysqli($servername, $username, $password,$dbname);


// SQL query to select data from database
$sql = " SELECT * FROM form ORDER BY fname DESC ";
$result = $mysql->query($sql);
$mysql->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>SSPI Foundation</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Name</th>
				<th>Mobile no</th>
				<th>donation</th>
				<th>address</th>
                <th>message</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['fname'];?></td>
				<td><?php echo $rows['mobileno'];?></td>
				<td><?php echo $rows['donation'];?></td>
				<td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['message'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
