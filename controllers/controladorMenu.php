<?php
    require_once("../models/modelo.php");
    $services = new Service();
    $datos = $services->getMenu($_GET["idF"]);
    require_once("../views/vistaMenuFonda.php");
?>