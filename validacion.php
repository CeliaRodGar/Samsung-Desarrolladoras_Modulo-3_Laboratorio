<?php
//Validación de los campos 
 function validaciones($nombre, $primerApellido, $segundoApellido, $email, $login, $password) {
    $nombrePattern = '/^[A-Za-záéíóúñÁÉÍÓÚ\s]+$/u';
    $emailPattern = '/^[a-zA-Z0-9!#$%&\'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&\'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z]{2,}$/';
    $passwordPattern = '/^.{4,8}$/';

    //Validación de que los campos no estén vacíos
    if (empty($nombre) || empty($primerApellido) || empty($segundoApellido) || empty($email) || empty($login) || empty($password)) {
        echo "<br>Es necesario rellenar todos los campos.";
        echo '<p><a href="index.html">Haga click aquí para volver al formulario</a></p>';
        return false;
    }

    if (!preg_match($nombrePattern, $nombre)) {
        echo "<br>El nombre solo puede contener letras.";
        echo '<p><a href="index.html">Haga click aquí para volver al formulario</a></p>';
        return false;
    }

    if (!preg_match($nombrePattern, $primerApellido) || !preg_match($nombrePattern, $segundoApellido)) {
        echo "<br>El apellido solo puede contener letras.";
        echo '<p><a href="index.html">Haga click aquí para volver al formulario</a></p>';
        return false;
    }

    //Validación correo electrónico
    if (!preg_match($emailPattern, $email)) {
        echo "<br>Por favor, introduzca una dirección de correo electrónico válida.";
        echo '<p><a href="index.html">Haga click aquí para volver al formulario</a></p>';
        return false;
    }

    //Validación contraseña
    if (!preg_match($passwordPattern, $password)) {
        echo "<p>La contraseña debe tener entre 4 y 8 caracteres.</p>";
        echo '<p><a href="index.html">Volver al formulario</a></p>';
        return false;
    }

    return "";
}

if($_POST){
$nombre = $_POST['nombre'];
$primerApellido = $_POST['primerApellido'];
$segundoApellido = $_POST['segundoApellido'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

//Conexión con PDO

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laboratorio";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Comprobar que el correo electrónico ya se encuentra en la base de datos.
$sql = "SELECT * FROM altas WHERE email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br>Esta dirección de correo electrónico ya se encuentra registrada.";
    $conn->close();
    echo '<p><a href="index.html">Haga click aquí para volver al formulario</a></p>';
    return;
}

$sql = "INSERT INTO altas (`NOMBRE`, `PRIMER APELLIDO`, `SEGUNDO APELLIDO`, `EMAIL`, `LOGIN`, `PASSWORD`) VALUES ('$nombre', '$primerApellido', '$segundoApellido', '$email', '$login', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "El usuario se ha registrado correctamente.";
    echo "<p>Datos del usuario registrado:</p>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Primer Apellido: $primerApellido</p>";
        echo "<p>Segundo Apellido: $segundoApellido</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Login: $login</p>";
        echo "<p>Contraseña: $password</p>";
        echo '<br><a href="ConsultaUsuariosRegistrados.php">Consulta de Usuarios Registrados</a>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}


?>