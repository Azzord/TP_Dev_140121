<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
 <h1>My Pokedex</h1>
    <table>
    <?php
           $link = mysqli_connect("localhost", "root", "", "pokedex");
        if(!$link) {
            echo "Erreur : Impossible de se connecter à MySQL" . PHP_EOL;
            echo "Errno de débogage: " . mysqli_connect_errno() . PHP_EOL;
            echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        echo "There are 151 pokemons from the database . <br>";

        $req = "SELECT * FROM  pokemon";
        $result = mysqli_query($link,$req);
		
        if($result){
           // echo "SELECT a retourné". mysqli_num_rows($result)." lignes.<br>";
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<th>Sprite</th>";
        echo "<th> ID </th>";
        echo "<th> Name </th>";
        echo "<th> Height </th>";
        echo "<th>Weight </th>";
        echo "<th>Base exp </th>";
        echo "</tr>";

        echo "<td>";
        echo "<img src= sprites/" . $row ["identifier"] . ">";
        echo "</td>";

        echo "<td>";
        echo "" . $row["id"] . "";
        echo "</td>";

        echo "<td>";
        echo "" . $row["identifier"] . "";
        echo "</td>";

        echo "<td>";
        echo "" . $row["height"] . "";	
        echo "</td>";

        echo "<td>";
        echo "". $row["weight"] . "";
        echo "</td>";

        echo "<td>";
        echo "" . $row["base_experience"] . "";
        echo "</td>";

        }

          
			mysqli_free_result($result);
			
        }
        mysqli_close($link);
        
	?> 	
  </table>
    
  </body>
</html>