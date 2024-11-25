<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $c = $cedula = $_POST['cedula'];
    $n = $nombres = $_POST['nombres'];
    $a = $apellidos = $_POST['apellidos'];
    $u = $usuario = $_POST['usuario'];
    $c = $contrasena = $_POST['contrasena'];
    $co = $correo = $_POST['correo'];

    $sql = "INSERT INTO usuarios (cedula, nombres, apellidos, usuario, contrasena, correo) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssss", $c,$n, $a, $u, $c; $co);
    $stmt->execute();
    $stmt->close();

    header("Location: index.html");
    exit();
}
?>
    </div>

</body>
</html>