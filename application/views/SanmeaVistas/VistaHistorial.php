<!doctype html>
<!--Se abre el documento con un DOCTYPE -->

<html lang="es">
<!-- Inicio pagina y defino lenguaje -->

    <head>
    <!--Inicio Cabecera de pagina-->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Requerido los Siguientes meta tags -->

        <link href="<?= base_url('css/bootstrap.min.css') ?>"   rel="stylesheet" media="screen">
        <link href="<?= base_url('css/bootstrap.css') ?>"       rel="stylesheet" type="text/css">
        <link href="<?= base_url('css/Article-List.css') ?>"    rel="stylesheet" >
        <link href="<?= base_url('css/bootstrap-responsive.css') ?>"   rel="stylesheet" media="screen">
        <link href="<?= base_url('css/bootstrap-responsive.min.css') ?>"   rel="stylesheet" media="screen">
        <link href="<?= base_url('css/bootstrap-grid.min.css') ?>"    rel="stylesheet" >
        <link href="<?= base_url('css/estilos.css') ?>"    rel="stylesheet" >

        <!--Se inserta la relacion del documento, tipo de dato y su ubicacion (puede ser una ubicacion logica local o un link de una pagina)  -->

        <title>SANMEA</title>
        <!--Se inserta el titulo de la pagina-->

    </head>
    <!--Finalizo Cabecera de Pagina-->

    <body>  
    <!--------------------------------Inicio contenido***********************-->
<div class="container-fluid">

    <div class="row-fluid">
    
        <nav class="navbar navbar-expand navbar-dark bg-dark">
                

            <div class="col-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary bg-dark" data-toggle="modal" data-target="#exampleModal"onclick=" location.href='<?= base_url('SanmeaControlador/index')?>' ">
                INICIO
            </button>
            </div>
            
            <div class="col-9" align="right">
                <label class="text-light">
                    <h5><strong>HISTORIAL</strong></h5></a>
                </label>
            </div>

        </nav>
    </div>  

    <div class="row">

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" align="center">

            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="lis-s1" data-toggle="list" href="#s1" role="tab" aria-controls="home">
                    Sanciones Disciplinarias
                </a>
                <a class="list-group-item list-group-item-action" id="list-s2" data-toggle="list" href="#s2" role="tab" aria-controls="profile">
                    Notas Objeto
                </a>
                <a class="list-group-item list-group-item-action" id="list-s3" data-toggle="list" href="#s3" role="tab" aria-controls="messages">
                    Informes por Accidente/Enfermedad
                </a>
            </div>

        </div>
  
        <div class="col">

            <div class="tab-content" id="nav-tabContent">

<!-----------------SANCIONES DISCIPLINARIAS------------------>
                <div class="tab-pane fade show active" id="s1" role="tabpanel" aria-labelledby="list-home-list">

                    <h4 align="center"  class="col-8" align="right"><br>SANCIONES</h4>
                       
                           <!-----------------------------BUSCADOR---------------------------------->
                         <div class="col-12" align="right"> 
                             <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
                                 <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
                                 <input type="submit" name="buscador" class="btn btn-secondary bg-dark" data-toggle="modal" data-target="#exampleModal" value="BUSCAR" >
                             </form>
                         </div>
                </div>



<!-------------------NOTAS OBJETO---------------------------->
                <div class="tab-pane fade" id="s2" role="tabpanel" aria-labelledby="list-profile-list">

                    <h4 align="center"  class="col-8" align="right"><br>NOTAS</h4>
                          <!-----------------------------BUSCADOR---------------------------------->
                         <div class="col-12" align="right">
                             <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
                                 <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
                                 <input type="submit" name="buscador" class="btn btn-secondary bg-dark" data-toggle="modal" data-target="#exampleModal" value="BUSCAR" >
                             </form>
                         </div>

                </div>                  

<!------------------INFORMES POR ACCIDENTE/ENFERMEDADES------->
                <div class="tab-pane fade" id="s3" role="tabpanel" aria-labelledby="list-messages-list">

                     <h4 align="center"  class="col-8" align="right"><br>INFORMES</h4>
                          <!-----------------------------BUSCADOR---------------------------------->
                         <div class="col-12" align="right">
                             <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
                                 <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
                                 <input type="submit" name="buscador" class="btn btn-secondary bg-dark" data-toggle="modal" data-target="#exampleModal" value="BUSCAR" >
                             </form>
                         </div>


                </div>          

    <!--------------------------------FIN contenido**************************-->

          
    <script src="<?= base_url('js/jquery-3.3.1.slim.min.js') ?>" ></script>
    <script src="<?= base_url('js/popper.min.js') ?>" ></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>" ></script>
        <!--Sripts Necesarios para el estilo de la pagina-->
    </body>
</html>