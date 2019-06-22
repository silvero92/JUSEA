<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Requerido los Siguientes meta tags -->

        <link href="<?= base_url('css/bootstrap.min.css') ?>"   rel="stylesheet" media="screen">
        <link href="<?= base_url('css/bootstrap.css') ?>"       rel="stylesheet" type="text/css">
        <link href="<?= base_url('css/Article-List.css') ?>"    rel="stylesheet" >
        <link href="<?= base_url('css/bootstrap-responsive.css') ?>"   rel="stylesheet" media="screen">
        <link href="<?= base_url('css/bootstrap-responsive.min.css') ?>"   rel="stylesheet" media="screen">
        <link href="<?= base_url('css/bootstrap-grid.min.css') ?>"    rel="stylesheet" >
  <link href="<?= base_url('css/estilos.css') ?>"   rel="stylesheet" >
  
  <title>Antecedentes</title>
</head>
<body>
  <div class="contenedor-formulario">
    <div class="wrap">
      <form class="formulario" name="formulario_busqueda" method="post" action='<?= base_url('ControladorJusea/obtenerInfracciones')?>'>  
        <div>
          <div class="input-group radio">
            <center>  <h1 class="propio">Ingrese el tipo de búsqueda</h1></center><br>
            <center>  
            <input type="radio" name="radio" id="hombre" value="dni" checked="checked">
            <label for="hombre">Por DNI</label>
            <input type="radio" name="radio" id="mujer" value="apellido">
            <label for="mujer">Por Apellido</label>
            </center>
          </div>
          <div class="input-group">
            <input type="text" id="nombre" name="nombre">
            <label class="label" for="nombre">Ingrese DNI/Apellido</label>
          </div>            
          <input type="submit" id="btn-submit" value="Buscar">
        </div>
      </form>
    </div>
  </div>

  <div class="alert alert-danger"> <center>No hay resultados para la búsqueda ingresada</center> </div>
  


<script type="text/javascript" src="<?php echo base_url(); ?>js/formulario.js"></script>



