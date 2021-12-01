<?php
$dbhost = "localhost";
$dbuser = "id16375532_stuart";
$dbpass = "Gotoslep1234.";
$dbname = "id16375532_login_registro";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!conn)
{
    die("No hay conexion" .mysqli_connect_error());
}
?>