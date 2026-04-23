<?php

    $nombre = htmlspecialchars($_POST['nombre']);
    $edad = (int) $_POST['edad'];

echo 'hola, ' . $nombre . '!.';
        echo 'Tienes ' . $edad . ' años.';

?>