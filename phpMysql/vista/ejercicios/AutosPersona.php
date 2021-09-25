<?php

include_once("../estructura/cabecera.php");
?>

<h1>Buscar Autos de Persona</h1>

<form name="buscar" id="buscar" method="post" action="../accion/accionAutosPersona.php">
    ingrese DNI de la persona que busca <input type="number" name="dni">
    <input type="submit" value="enviar">
</form>
<?php


include_once("../estructura/pie.php");
?>
