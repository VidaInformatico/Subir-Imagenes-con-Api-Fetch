<?php
    require "conexion.php";
    $sentencia = $pdo->prepare("SELECT * FROM url ORDER BY id DESC");
    $sentencia->execute();
    $result = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        echo '<div class="col-md-4">
            <div class="card">
                <div class="card-header text-white bg-danger">
                    Publicado: <strong>'.time_ago(strtotime($row['fecha'])). '</strong>
                </div>
                <div class="card-body">
                    <img class="img-thumbnail" src="img/'.$row['url'].'" alt="">
                    <p>'.$row['comentario'].'</p>
                </div>
            </div>
        </div>';
    }
    function time_ago ($fecha){
        $diferencia = time() - $fecha;
        if ($diferencia < 1) {
            return 'Justo ahora';
        }
        $condicion = array(
            12 * 30 * 24 * 60 * 60  => 'año',
            30 * 24 * 60 * 60 => 'mes',
            24 * 60 * 60 => 'dia',
            60 * 60 => 'hora',
            60 => 'minuto',
            1 => 'segundo'
        );
        foreach ($condicion as $secs => $str) {
            $d = $diferencia / $secs;
            if ($d >= 1) {
                //redondear
                $t = round($d);
                return 'hace ' . $t. ' ' .$str. ($t > 1 ? 's' : '');
            }
        }
    }

?>
