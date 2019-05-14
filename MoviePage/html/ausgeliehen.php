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
                                <form action="movielist.php">
                                <input type="submit" name="backbutton" value="Zurück" class="button button3"/>
                                </form>
                        </div>

			<table align=center id="results_table">
                                        <tr>
                                                <th>Film Nummer</th>
                                                <th align=center>Film Name</th>
                                                <th align=center>Datum</th>
                                                <th align=center>Besitzer</th>
                                        </tr>


			<?php
                        $link = new mysqli("127.0.0.1","root","dhrc4ga39S9s",""); 
                        $link->select_db('movies');
                        $query = "SELECT * FROM ausgeliehen ORDER BY MovieNumber ASC";
                        $result = mysqli_query($link,$query);

                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                        {
                                echo "<tr>";
                                echo "<td>" . $row['MovieNumber'] . "</td>";
                                echo "<td align=center>" . $row['MovieName'] . "</td>";
                                echo "<td align=center>" . $row['Date'] . "</td>";
                                echo "<td align=center>" . $row['MovieOwner'] . "</td>";
                                echo "</tr>";
                        }
                                mysqli_close($link);
                        ?>

			</table>

			<div id="deleteblock">
                        <form action="ausgeliehen.php" method="post">
                        <input type="text" name="MovieNumber"/>
                        <input type="submit" name="deletebutton" value="Film Löschen"/>

                        <?php

                                if (isset($_POST['deletebutton']))

                                {
                                        $link = new mysqli('127.0.0.1', '?', '?', '');
                                        $link->select_db('movies');
                                        $MovieNumber= $_POST['MovieNumber'];
                                        $sql = "delete from ausgeliehen where ausgeliehen.MovieNumber = $MovieNumber;";
                                        mysqli_query($link,$sql);
                                }
                        ?>
                        </form>
                        </div>

		</div>

	</div>

</html>
