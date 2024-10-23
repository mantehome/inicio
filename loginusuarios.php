if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $nombre = $_POST['nombre_completo'];
    $correo = $_POST['correo_electronico'];
    $usuario = $_POST['usuario'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT); // Hash de la contraseña

    $sql = "INSERT INTO usuarios (nombre_completo, correo_electronico, usuario, contrasena) VALUES ('$nombre', '$correo', '$usuario', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
