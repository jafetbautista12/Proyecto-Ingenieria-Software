<?php
include("conexion.php");
$nombre = $_POST["usuario"];
$pass = $_POST["pass"];
//login
if(isset($_POST["btningresar"]))
{
    $query = mysqli_query($conn,"SELECT *FROM login WHERE usuario = '$nombre' AND  password = '$pass'");
    $nr = mysqli_num_rows($query);
    if($nr==1)
    {
        echo "<script> alert('Bienvenido $nombre'); window.location='pag/prototipo1.2.html'</script>";
    }
    else
    {
        echo  "<script> alert('No  existe el usuario $nombre'); window.location='/index.html'</script>";
    }   
}
//Registrar
if(isset($_POST["btnregistrar"]))
{
    $sqlgrabar="INSERT INTO login(usuario,password) values ('$nombre','$pass')";
    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='/index.html'</script>";
    }
    else
    {
        echo "Error:".$sql."<br>".mysql_error($conn);
    }
}
?>