
<?php

include_once("../estructura/cabecera.php");
?>



<main class="px-3">

<h1>NUEVO AUTO</h1>
<p class="lead">
<form  method="post" action="../accion/accionNuevoAuto.php">
    <div class="row">
    <div class="col py-3 px-lg-5  ">
    DNI</div>
    <div class="col py-3 px-lg-5  ">
    <input id="dni" name ="dni" type="text">
    </div></div>
    <div class="row">
    <div class="col py-3 px-lg-5  ">
    Patente
    </div>
    <div class="col py-3 px-lg-5  ">
    <input id="patente" name ="patente" type="text">
    
    </div> </div>
    <div class="row">
    <div class="col py-3 px-lg-5  ">
    Marca
    </div>
    <div class="col py-3 px-lg-5  ">
    <input id="marca" name ="marca" type="text">
    </div></div>
    <div class="row">
    <div class="col py-3 px-lg-5  ">
    Modelo   </div>
    <div class="col py-3 px-lg-5  ">
    <input id="modelo" name ="modelo" type="text">
  
    </div></div>
  
        <div class="col py-3 px-lg-5  ">
   <button class="btn btn-primary" type="submit">Agregar Auto</button>
</div>

</form>
</p>
</main>
<?php


include_once("../estructura/pie.php");
?>

