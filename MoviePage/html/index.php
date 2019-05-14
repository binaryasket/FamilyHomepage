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

			<div id="input">

			<form action="index.php" method="post" id="submit">

				<div id="choices">Nr.<br><input type="text" name="MovieNumber" /> </div><br>
				<div id="choices">Name<br><input type="text" name="MovieName" /> </div><br>
				<div id="choices">Genre<br>

							<table align=center>
									<tr>
											<td><input type="checkbox" name="MovieGenre1" value="Action/Abenteuer" />Action/Abenteuer</td>
											<td><input type="checkbox" name="MovieGenre2" value="Komödie" />Komödie</td>
									</tr>

									<tr>
											<td><input type="checkbox" name="MovieGenre3" value="Drama" />Drama</td>
											<td><input type="checkbox" name="MovieGenre4" value="Romance" />Romance</td>
									</tr>
									<tr>
											<td><input type="checkbox" name="MovieGenre5" value="Dokumentation" />Dokumentation</td>
											<td><input type="checkbox" name="MovieGenre6" value="Kinder" />Kinder</td>
									</tr>
									<tr>
											<td><input type="checkbox" name="MovieGenre7" value="Biografie" />Biografie</td>
											<td><input type="checkbox" name="MovieGenre8" value="Fantasy" />Fantasy</td>
									</tr>
									<tr>
											<td><input type="checkbox" name="MovieGenre9" value="Kurzfilm" />Kurzfilm</td>
											<td><input type="checkbox" name="MovieGenre10" value="Krimi" />Krimi</td>
									</tr>
									<tr>
											<td><input type="checkbox" name="MovieGenre11" value="Science Fiction" />Science Fiction</td>
											<td><input type="checkbox" name="MovieGenre12" value="Western" />Western</td>
									</tr>
									<tr>
											<td><input type="checkbox" name="MovieGenre13" value="Sport" />Sport</td>
											<td><input type="checkbox" name="MovieGenre14" value="Horror" />Horror</td>
									</tr>
									<tr>
											<td><input type="checkbox" name="MovieGenre15" value="Musik-/Tanzfilm" />Musik-/Tanzfilm</td>
											<td><input type="checkbox" name="MovieGenre16" value="Kriegsfilm" />Kriegsfilm</td>
									</tr>
									<tr>
											<td><input type="checkbox" name="MovieGenre17" value="Roadmovie" />Roadmovie</td>
											<td><input type="checkbox" name="MovieGenre18" value="Historisch" />Historisch</td>
									</tr>
									<tr>
											<td><input type="checkbox" name="MovieGenre19" value="Animation/Cartoon" />Animation/Cartoon</td>
											<td><input type="checkbox" name="MovieGenre20" value="Thriller"/>Thriller</td>
									</tr>
								</table>

				</div>
				<br><div id="choices">Infos<br><input type="text" name="MovieInfo" /> </div><br>

			<div align=center>
				<input type="submit" name="submit"  value="Hinzufügen" class="butto button1"/>
			</form>
			</div>
			</div>



			<div id="filmlistebuttonblock">
			<form action="movielist.php">
			<input type="submit" name="buttonfilmliste" value="Film Liste" class="button button2"/>
			</form>
			</div>

		</div>

	</div>
<?php


if (isset($_POST['submit']))

{
$link = new mysqli('127.0.0.1', '?', '?', '');
$link->select_db('movies');
$MovieNumber     = $_POST['MovieNumber'];
$MovieName = $_POST['MovieName'];
$MovieGenres = array($_POST['MovieGenre1'], $_POST['MovieGenre2'], $_POST['MovieGenre3'], $_POST['MovieGenre4'], $_POST['MovieGenre5'], $_POST['MovieGenre6'], $_POST['MovieGenre7'], $_POST['MovieGenre8'], $_POST['MovieGenre9'], $_POST['MovieGenre10'], $_POST['MovieGenre11'], $_POST['MovieGenre12'], $_POST['MovieGenre13'], $_POST['MovieGenre14'], $_POST['MovieGenre15'], $_POST['MovieGenre16'], $_POST['MovieGenre17'], $_POST['MovieGenre18'], $_POST['MovieGenre19'], $_POST['MovieGenre20']);
$MovieGenre = join(" ", $MovieGenres);
$MovieInfo = $_POST['MovieInfo'];
$sql = "insert into movielist (MovieNumber, MovieName, MovieGenre, MovieInfo)
values ('$MovieNumber', '$MovieName', '$MovieGenre', '$MovieInfo')";
mysqli_query($link,$sql);
}
?>

	</body>
</html>
