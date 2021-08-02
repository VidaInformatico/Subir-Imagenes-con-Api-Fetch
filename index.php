<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes con Fetch</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/vanillatoasts.css">
</head>

<body>
    <div class="content">
        <label for="img" class="button"></label>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="card d-none" id="vistaPrevia">
                    <div class="card-body">
                        <form method="post" action="" id="frmImg">
                            <input type="file" name="imagen" id="img" class="d-none">
                            <img src="" alt="" id="imgprevia" class="img-thumbnail">
                            <div class="form-group">
                                <label for="comentario">Comentario</label>
                                <textarea id="comentario" class="form-control" name="comentario" rows="3"></textarea>
                            </div>
                            <button class="btn btn-primary" type="button" id="btn-publicar">Publicar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h4 class="text-center text-white">Publicaciones</h4>
        <div class="row" id="resultado">

        </div>
    </div>
    <script src="js/vanillatoasts.js"></script>
    <script src="js/script.js"></script>
</body>

</html>