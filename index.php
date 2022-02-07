<!DOCTYPE html>
<?php
/*
Nombre: <input type="text" name="nombre" class="form-control"/>    
                        Calle: <input type="text" name="calle" class="form-control"/>    
                        Numero Exterior: <input type="text" name="ne" class="form-control"/>    
                        Numero Interior: <input type="text" name="ni" class="form-control"/>    
                        C.P.: <input type="text" name="cp" class="form-control"/>    
                        Colonia: <input type="text" name="colonia" class="form-control"/>    
                        Municipio: <input type="text" name="municipio" class="form-control"/>    
                        Ciudad: <input type="text" name="ciudad" class="form-control"/>    
                        Estado: <input type="text" name="edo" class="form-control"/>    
                        Pais: <input type="text" name="pais" class="form-control"/>     

*/
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') 
    && (isset($_POST['calle'])) && ($_POST['calle'] != '')
    && (isset($_POST['ne'])) && ($_POST['ne'] != '')
    && (isset($_POST['ni'])) && ($_POST['ni'] != '')
    && (isset($_POST['cp'])) && ($_POST['cp'] != '')
    && (isset($_POST['colonia'])) && ($_POST['colonia'] != '')
    && (isset($_POST['municipio'])) && ($_POST['municipio'] != '')
    && (isset($_POST['ciudad'])) && ($_POST['ciudad'] != '')
    && (isset($_POST['edo'])) && ($_POST['edo'] != '')
    && (isset($_POST['pais'])) && ($_POST['pais'] != '')
   ) {

    include "models/modelo.php";
    $nuevo = new Service();
    $asd = $nuevo->setServicio($_POST['nombre'], $_POST['calle'], $_POST['ne'], $_POST['ni'], $_POST['cp'], $_POST['colonia'], $_POST['municipio'], $_POST['ciudad'], $_POST['edo'], $_POST['pais']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Arguilera Challenge</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="homeworks.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1></h1>
                <hr/>
                <p class="lead">Ejercicio para Arguilera</p>
            </header>
            <div class="row">
                <div class="col-lg-6">

                    <form action="#" method="post" class="col-lg-12">
                        <h3>Nueva Fonda</h3>                
                        Nombre: <input type="text" name="nombre" class="form-control" required/>    
                        Calle: <input type="text" name="calle" class="form-control" required/>    
                        Numero Exterior: <input type="text" name="ne" class="form-control" required/>    
                        Numero Interior: <input type="text" name="ni" class="form-control" required/>    
                        C.P.: <input id="cpS" type="text" name="cp" maxLength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" style="width: 20%;" required/>  
                        <i class="btn btn-info" style="margin-top: 5px;" onclick="generaCP();";> Buscar CP</i> <br> 
                        Colonia: <!--<input type="text" name="colonia" class="form-control" required/> -->
                                 <select id="colonia" name="colonia" class="form-control" required></select>   
                        Municipio: <input type="text" name="municipio" id="municipio" class="form-control" required/>    
                        Ciudad: <input type="text" name="ciudad" id="ciudad" class="form-control" required/>    
                        Estado: <input type="text" name="edo" id="edo" class="form-control" required/>    
                        Pais: <input type="text" name="pais" id="pais" class="form-control" required/>     
                        <br/>
                        <input type="submit" value="Crear Fonda" class="btn btn-success"/>
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <hr/>
                    <h3>Listado de fondas</h3>
                    <a href="controllers/controlador.php"><i class="fa fa-align-justify"></i> Acceder al listado de fondas</a>
                    <hr/>
                </div> 
            </div>
            <footer class="col-lg-12 text-center">
                GodiFondas - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>