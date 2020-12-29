<html>
<body>
El llibre 
<?php echo $Titol=$_POST["Titol"]; ?><br> 
Escrit per:
<?php echo $Nom=$_POST["Nom"]; echo " "; echo $Cognom1=$_POST['Cognom1']; echo " "; echo $Cognom2=$_POST['Cognom2'] ?><br> 
Publicat l'any:
<?php echo $AnyPubli=$_POST["AnyPubli"];?><br> Amb codi ISBN:
<?php echo $ISBN=$_POST["ISBN"]; ?><br>, s'ha registrat correctament. <?php echo " "; ?>
</body>

<?php

$usuari = "root";
$password = "";
$server = "127.0.0.1";
$basedades = "llibres";

$conn = mysqli_connect($server, $usuari, $password, $basedades);

if (!$conn) {
      die("La connexió ha fallat: " . mysqli_connect_error());
}
 
echo "Connectat amb èxit. ";
 
$sql = "INSERT INTO llibres (Nom, Cognom1, Cognom2, Titol, AnyPubli, ISBN) VALUES ( '$Titol', '$Nom', '$Cognom1', '$Cognom2', '$AnyPubli', '$ISBN')";
if (mysqli_query($conn, $sql)) {
      echo "El registre nou s'ha creat correctament";
} 

else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
mysqli_close($conn);


?>
