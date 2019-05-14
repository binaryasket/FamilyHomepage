<html>
<head>
<link rel="icon" href="cinema.png">
<link rel="stylesheet" href="styleshit.css">
<title>Family Movies</title>
</head>

	<body>

	<div id="mainblock">

			<div id="title"> 
				<img src="filmliste2.png" height="100%" width="100%" alt=""/>
			</div>

		<div id="secblock">

			<div id="backblock">
				<form action="index.php">
				<input type="submit" name="backbutton" value="Zurück" class="button button3"/>
				</form>
			</div>

		<div id="resultblock">

				<table align=center id="results_table">
					<tr align=center id="tr">
						<th>Film Nummer</th>
						<th>Film Name</th>
						<th>Film Genre</th>
						<th>Film Info</th>
					</tr>

			<?php
			$link = new mysqli("127.0.0.1","?","?",""); 
			$link->select_db('movies');
			$query = "SELECT * FROM movielist ORDER BY MovieNumber ASC";
			$result = mysqli_query($link,$query);

			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				echo "<tr>";
				echo "<td>" . $row['MovieNumber'] . "</td>";
				echo "<td>" . $row['MovieName'] . "</td>";
				echo "<td>" . $row['MovieGenre'] . "</td>";
				echo "<td>" . $row['MovieInfo'] . "</td>";
				echo "</tr>";
			}
				mysqli_close($link);
			?>

				</table>

			</div>

			<div id="ausleihen">
				<form action="ausgeliehen.php">
				<input type="submit" name="Ausgeliehen" value="Ausgeliehene Filme" class="button"/>
				</form>
			</div>

			<div id="deleteblock">
			<form action="movielist.php" method="post">
			<input type="text" name="MovieNumber"/><br>
			<input type="submit" name="deletebutton" value="Film Löschen"/>

			<?php

				if (isset($_POST['deletebutton']))

				{
					$link = new mysqli('127.0.0.1', '?', '?', '');
					$link->select_db('movies');
					$MovieNumber= $_POST['MovieNumber'];
					$sql = "delete from movielist where movielist.MovieNumber = $MovieNumber;";
					mysqli_query($link,$sql);
				}
			?>
			</form>
			</div>
		</div>

	</div>

	</body>
</html>
