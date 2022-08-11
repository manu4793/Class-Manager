<?php
#Crear la conexión a la base de datos.
$user = "root";
$pass = "";
$host = "localhost";
$dbname = "colegio_comunitario";

$conn = new mysqli($host, $user, $pass, $dbname);

#check connection
if ($conn -> connect_error)
{
    die("Conection failed." . $conn-> connect_error);
}
#echo "Connection successful";
?>