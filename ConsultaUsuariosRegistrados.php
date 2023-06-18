<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laboratorio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM altas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Usuarios Registrados:</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Primer apellido</th><th>Segundo apellido</th><th>Email</th><th>Login</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['ID']. "</td><td>" . $row['NOMBRE']. "</td><td>" . $row['PRIMER APELLIDO']. "</td><td>" . $row['SEGUNDO APELLIDO']. "</td><td>" . $row['EMAIL']. "</td><td>" . $row['LOGIN']. "</td></tr>";
    }
    echo "</table>";
    echo '<br><a href="index.html">Volver al formulario</a>';
} else {
    echo "0 resultados";
}
?>