<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];


    echo "<h2>Gracias, $nombre $apellido!</h2>";
    echo "<p>Recibimos tu mensaje sobre <strong>$asunto</strong>.</p>";
    echo "<p>Te contactaremos pronto al correo: <strong>$email</strong>.</p>";
    echo "<hr>";
    echo "<p><strong>Tu mensaje:</strong></p>";
    echo "<blockquote>$mensaje</blockquote>";

} else {

    echo "<h3>No se enviaron datos del formulario.</h3>";
}
?>
