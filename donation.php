<!DOCTYPE html>
<html>
<head>
	<title>Donators</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body
		{
			
			font-size: 11pt;
			background-image: url(images/bg.jpg);
			background-size: cover;
			background-attachment: fixed;
		}

		
		table , th, td
		{
			/*border:1px solid black;*/
			border-collapse: collapse;
			opacity: 0.95;
		}

		th, td
		{
			padding: 10px;
			text-align: center;
		}

		th
		{
			/*background-color: #a70000;*/
			background-color: black;
			color: white;
		}

		tr:nth-child(even)
		{
			background-color: #e8e8e8;
		}

		tr:nth-child(odd)
		{
			background-color: white;
		}

		#header
		{
			background-color: teal;
			color: white;
			padding: 2px;

		}
	</style>
</head>
<body style="font-family: sans-serif;">
<div></div>
 <table align="center" style="width: 80%; margin-top: 50px; margin-bottom: 50px; border-radius: 10px;">
 	<tr>
 		<td id="header" colspan="4"><a href="login.php"><h3><b>Charitable Trust Donators</b></h3></a></td>
 	</tr>

 	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Donation</th>
	</tr>
	<tr>
			<?php
				include("db.php");
				$result=mysqli_query($conn,"SELECT * FROM donation order by id DESC");
				while ($res=mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>".$res['name']."</td>";
						echo "<td>".$res['email']."</td>";
						echo "<td>".$res['mobile']."</td>";
						echo "<td>".$res['donate']."</td>";
						echo "</tr>";
					}
			?>
	</tr>
</table>
<footer class="r-center">
	<a href="login.php"><button class="r-button r-light-grey r-hover-teal r-padding-large r-margin-bottom">Previous</button></a>
</footer>
</body>
</html>