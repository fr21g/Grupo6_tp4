
    <?php

include_once("../estructura/cabecera.php");
?>
    
    <h1>Buscar auto</h1>

    <form name="buscar" id="buscar" method="post" action="../accion/accionBuscarAuto.php">
        ingrese la patende del auto que desea buscar <input type="text" name="patente">
        <input type="submit" value="enviar">
    </form>
    <?php


include_once("../estructura/pie.php");
?>

