<!doctype html>
<!--Se abre el documento con un DOCTYPE -->

<html lang="es">
<!-- Inicio pagina y defino lenguaje -->

    <head>
    <!--Inicio Cabecera de pagina-->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Requerido los Siguientes meta tags -->
        <link href="<?= base_url('css/bootstrap.css') ?>"            rel="stylesheet" type="text/css">
        <link href="<?= base_url('css/bootstrap.min.css') ?>"        rel="stylesheet" media="screen">
        <link href="<?= base_url('css/Article-List.css') ?>"         rel="stylesheet" >
        <link href="<?= base_url('css/bootstrap-grid.min.css') ?>"   rel="stylesheet" >

        <!--Se inserta la relacion del documento, tipo de dato y su ubicacion (puede ser una ubicacion logica local o un link de una pagina)  -->

        <title>SANMEA</title>
        <!--Se inserta el titulo de la pagina-->

    </head>
    <!--Finalizo Cabecera de Pagina-->

    <body>  
    <!--***********************Inicio contenido***********************-->
    <div class="article-list">

        <div class="container">

            <div class="intro">

                <h1 class="text-center">JUSEA</h1>

            </div>

            <div class="row articles">
                <div class="col-sm-6 col-md-3 item">

                    <button type="button" class="btn btn-light shadow-lg p-3 mb-1 bg-white rounded " data-toggle="modal" data-target="#var5" onclick=" location.href='<?= base_url('SanmeaControlador/sancionCuad')?>' ">
                        <img src="<?= base_url('img/sancion.png') ?>" class="img-fluid" />
                    </button>
                    
                    
                    <h3 class="name">Sanción Disciplinaria</h3>
                    <p class="description"> </p>
                </div>

                <div class="col-sm-9 col-md-3 item">
                    <button type="button" class="btn btn-light shadow-lg p-3 mb-1 bg-white rounded" data-toggle="modal" data-target="#var2" onclick=" location.href='<?= base_url('SanmeaControlador/NotaObjeto')?>' ">
                        <img src="<?= base_url('img/nota.png') ?>" class="img-fluid"><br>
                    </button>

                    <h3 class="name">Actuación Bienes del Estado</h3>

                    <p class="description"></p>


                </div>

                <div class="col-sm-9 col-md-3 offset-lg-0 item">

                    <button type="button" class="btn btn-light shadow-lg p-3 mb-1 bg-white rounded" data-toggle="modal" data-target="#var3" onclick=" location.href='<?= base_url('SanmeaControlador/ActaEnf')?>' ">
                        <img src="<?= base_url('img/informe.png') ?>" class="img-fluid"><br>
                    </button>

                    <h3 class="name">Informe por Accidente/Enfermedad</h3>

                    <p class="description"> </p>

                </div>

                 <div class="col-sm-9 col-md-3 item">
                    <button type="button" class="btn btn-light shadow-lg p-3 mb-1 bg-white rounded" data-toggle="modal" data-target="#var2" onclick=" location.href='<?= base_url('SanmeaControlador/NotaObjeto')?>' ">
                        <img src="<?= base_url('img/nota.png') ?>" class="img-fluid"><br>
                    </button>

                    <h3 class="name">Nota Objeto</h3>

                    <p class="description"></p>


                </div>



            </div>

        </div>

    </div>

        <script src="<?= base_url('js/jquery-3.3.1.slim.min.js') ?>" ></script>
        <script src="<?= base_url('js/popper.min.js') ?>" ""></script>
        <script src="<?= base_url('js/bootstrap.min.js') ?>" ""></script>
    <!--Sripts Necesarios para el estilo de la pagina-->
</body>

</html>