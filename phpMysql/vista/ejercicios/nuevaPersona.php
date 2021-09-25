<?php

include_once("../estructura/cabecera.php");
?>
<main class="px-3">

    <h1>NUEVA PERSONA</h1>
    <p class="lead">
        <form  method="post" action="../accion/accionNuevaPersona.php">
            <div class="row">
                <div class="col py-3 px-lg-5  ">
                DNI</div>
                <div class="col py-3 px-lg-5  ">
                    <input id="dni" name ="dni" type="text" >
                </div>
            </div>
            <div class="row">
                <div class="col py-3 px-lg-5  ">
                Apellido
            </div>
                <div class="col py-3 px-lg-5  ">
                    <input id="apellido" name ="apellido" type="text" >
                </div>
            </div>
            <div class="row">
                <div class="col py-3 px-lg-5  ">
                    Nombre
            </div>
            <div class="col py-3 px-lg-5  ">
                <input id="nombre" name ="nombre" type="text" >
            </div>
            </div>
            <div class="row">
                <div class="col py-3 px-lg-5  ">
                    Fecha Nac
                </div>
                <div class="col py-3 px-lg-5  ">
                    <input id="fecha" name ="fecha" type="text" >
                </div>
            </div>
            <div class="row">
                <div class="col py-3 px-lg-5  ">
                    Telefono
                </div>
                <div class="col py-3 px-lg-5  ">
                <input id="telefono" name ="telefono" type="text">
                </div>
            </div>
            <div class="row">
                <div class="col py-3 px-lg-5  ">
                    Domicilio
                </div>
                <div class="col py-3 px-lg-5  ">
                <input id="domicilio" name ="domicilio" type="text">
                </div>
            </div>
            <div class="col py-3 px-lg-5  ">
                <input id="accion" name ="accion" value="agregar" type="hidden">
                <button class="btn btn-primary" type="submit">Agregar Persona</button>
            </div>
        </form>
    </p>
</main>
<?php


include_once("../estructura/pie.php");
?>

