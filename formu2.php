<?php	
	$usuari = "root";
	$password = "";
	$server = "127.0.0.1";
	$basedades = "llibres";
    	
	$connex = mysqli_connect( $server, $usuari, "" ) or die ("No ha estat possible connectar al servidor de la base de dades");
	
	$db = mysqli_select_db( $connex, $basedades )  or die ( "Oops! No es pot connectar a la base de dades" );
   
   	echo "La base de dades ha estat connectada amb èxit";

	mysqli_close( $connex );
?>
