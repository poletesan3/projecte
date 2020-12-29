<html>

<?php
$usuari = "root";
$password = "";
$server = "127.0.0.1";
$basedades = "llibres";
?>

<?php
	if ($connex = mysqli_connect( $server, $usuari, "" )){

	echo "<p>MySQL li ha donat permís a PHP per executar consultes amb aquest usuari</p>";

	} 

$consulta = "SELECT*FROM llibres WHERE Nom = '" .  $_POST["Cerca"]."' OR 1rCognom = '" .  $_POST["Cerca"]."' OR 2nCognom = '" .  $_POST["Cerca"]."' OR Títol = '" .  $_POST["Cerca"]."' OR AnyCreació = '" .  $_POST["Cerca"]."' OR ISBN = '" .  $_POST["Cerca"]."'";
$connex = mysqli_connect($server, $usuari, $password, $basedades);
$result = mysqli_query ($connex, $consulta);

mysqli_select_db($connex , $basedades);
$dades= mysqli_query ($connex, $consulta);

while ($fila=mysqli_fetch_array($dades)){
echo "<p>";
echo "-"; 
echo $fila ["Nom"];
echo "-"; 
echo $fila ["1rCognom"];
echo "-"; 
echo $fila ["2nCognom"];
echo "-"; 
echo $fila ["Titol"];
echo "-"; 
echo $fila ["AnyCreació"];
echo "-"; 
echo $fila ["ISBN"];
echo "<p>";



}
?>