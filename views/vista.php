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
                <h3>Listado de fondas</h3>
                <table class="table">
                    <tr>
                        <td><strong>NOMBRE</strong></td>
                        <td><strong>CALLE</strong></td>
                        <td><strong>NUM EXTERIOR</strong></td>
                        <td><strong>NUM INTERIOR</strong></td>
                        <td><strong>CODIGO POSTAL</strong></td>
                        <td><strong>COLONIA</strong></td>
                        <td><strong>MUNICIPIO</strong></td>
                        <td><strong>CIUDAD</strong></td>
                        <td><strong>ESTADO</strong></td>
                        <td><strong>PAIS</strong></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                        //nombre, calle, ne, ni, cp, colonia, municipio, ciudad, edo, pais
                        ?>
                        <tr>
                            <td><?php echo $datos[$i]["nombre"]; ?></td>
                            <td><?php echo $datos[$i]["calle"]; ?></td>
                            <td><?php echo $datos[$i]["ne"]; ?></td>
                            <td><?php echo $datos[$i]["ni"]; ?></td>
                            <td><?php echo $datos[$i]["cp"]; ?></td>
                            <td><?php echo $datos[$i]["colonia"]; ?></td>
                            <td><?php echo $datos[$i]["municipio"]; ?></td>
                            <td><?php echo $datos[$i]["ciudad"]; ?></td>
                            <td><?php echo $datos[$i]["edo"]; ?></td>
                            <td><?php echo $datos[$i]["pais"]; ?></td>
                            <td><a href="../views/vistaAltaMenu.php?id=<?php echo $datos[$i]["id"];?>&nameF=<?php echo $datos[$i]["nombre"];?>" class="btn btn-success">Agregar Menu</a></td>
                            <td><a href="../controllers/controladorMenu.php?idF=<?php echo $datos[$i]["id"];?>" class="btn btn-warning">Ver Menu</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
                <hr/>
            </div> 
            <footer class="col-lg-12 text-center">
                GodiFondas - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>