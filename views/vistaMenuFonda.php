<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Arguilera Challenge</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1></h1>
                <hr/>
                <p class="lead">Ejercicio para Arguilera</p>
            </header>
            <div class="col-lg-6 text-center">
                <hr/>
                <h3>Listado de menu</h3>
                <table class="table">
                    <tr>
                        <td><strong>NOMBRE PLATILLO</strong></td>
                        <td><strong>DESCRIPCION</strong></td>
                        <td><strong>INGREDIENTES</strong></td>
                        <td><strong>COSTO</strong></td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                        //nombre, calle, ne, ni, cp, colonia, municipio, ciudad, edo, pais
                        ?>
                        <tr>
                            <td><?php echo $datos[$i]["nomPlatillo"]; ?></td>
                            <td><?php echo $datos[$i]["descripcion"]; ?></td>
                            <td><?php echo $datos[$i]["ingredientes"]; ?></td>
                            <td><?php echo $datos[$i]["costo"]; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <a href="../controllers/controlador.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
                <hr/>
            </div> 
            <footer class="col-lg-12 text-center">
                GodiFondas - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>