<?php
if (isset($_POST)) {
    require "conexion.php";
    $img = $_FILES['imagen'];
    $nombre = $img['name'];
    $nombreTemp = $img['tmp_name'];
    $comentario = $_POST['comentario'];
    $destino = "img/".$nombre;
    $query = $pdo->prepare("INSERT INTO url(url, comentario) VALUES (:url, :coment) ");
    $query->bindParam(":url", $nombre);
    $query->bindParam(":coment", $comentario);
    $query->execute();
    if ($query) {
        move_uploaded_file($nombreTemp, $destino);
        echo "ok";
    }
}

?>