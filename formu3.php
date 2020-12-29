<?php
	
	$usuari = "root";
	$password = "";
	$server = "127.0.0.1";
	$basedades = "llibres";
    	
	$connex = mysqli_connect( $server, $usuari, "" ) or die ("No ha estat possible connectar al servidor de la base de dades");
	
	$db = mysqli_select_db( $connex, $basedades )  or die ( "Oops! No es pot connectar a la base de dades" );
   
   	echo "La base de dades ha estat connectada amb èxit";
       
$consulta = "SELECT * FROM llibres";
$resultat = mysqli_query( $connex, $consulta ) or die ( "Quelcom ha anat malament al connectar la base de dades");


echo "<table borde='2'>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>Cognom1</th>";
echo "<th>Cognom2</th>";
echo "<th>Titol</th>";
echo "<th>AnyPubli</th>";
echo "<th>ISBN</th>";
echo "</tr>";

while ($columna = mysqli_fetch_array( $resultat ))
{
	echo "<tr>";
	echo "<td>" . $columna[$Titol] . "</td>";"<td>" . $columna[$Nom] . "</td>";"<td>" . $columna[$Cognom1] . "</td>";"<td>" . $columna[$Cognom2] . "</td>";"<td>" . $columna[$AnyPubli] . "</td>";"<td>" . $columna[$ISBN] . "</td>";
	echo "</tr>";
}

echo "</table>"; 

	mysqli_close( $connex );
    ?>
	