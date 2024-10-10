<?php  

$servername= "localhost";
$username= "root";
$password="";
$dbname ="almacen_rent_car"; 

$conn = new mysqli($servername, $username, $password, $dbname); 

if($conn->connect_error){
    die("Conexion fallida: " . $conn->connect_error);
}

$sql = "UPDATE scan_count SET count = count + 1 WHERE id = 1";

if ($conn->query($sql) === TRUE) {
   
} else {
    error_log( "Error al actualizar el conteo: " . $conn->error);
}

$conn->close();

$numero="8296752293";
header("Location: https://wa.me/$numero");
exit();
?>