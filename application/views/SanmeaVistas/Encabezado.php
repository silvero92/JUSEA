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
<form action='<?= base_url('ControladorJusea/modificarEncabezado')?>' class="needs-validation" method="post" novalidate>
<div class="container-fluid">

    <div class="row-fluid">
    
        <nav class="navbar navbar-expand navbar-dark bg-dark">
                

            <div class="col-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary bg-dark" data-toggle="modal" data-target="#exampleModal">
                INICIO
            </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Ir a INICIO?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        No se guardaran los datos ingresados
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Cerrar
                            </button>
                            <button type="button" class="btn btn-primary" onclick=" location.href='<?= base_url('SanmeaControlador/index')?>' ">
                                Aceptar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-9" align="right">
                <label class="text-light">
                    <h5><strong>Modificar encabezado<br></strong></h5></a>
                </label>
            </div>

        </nav>
    </div>  
    <div>
    <div class="row">
        <div class="col">

            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active"  id="s1" role="tabpanel" aria-labelledby="list-home-list">

                     <h4 align="center"><br>Modificar Encabezado</h4>
                    <div class="row">
                        <div class="col-3" id="ss1">
                            <label for="var11">Año</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="año" name="año" value="<?php
                            foreach ($encabezado->result() as $enc) {
                                $enca=$enc->año;
                                echo $enca;
                            };?>" required>

                            </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="var12">Membrete</label>
                        </div>
                        <div class="col-9">
                             <input type="text" class="form-control" id="membrete" name="membrete" 
                             value="<?php
                            foreach ($encabezado->result() as $enc) {
                                $membrete=$enc->membrete;
                                echo $membrete;
                            };?>" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <label for="var13">Unidad</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" id="unidad" name="unidad" value="<?php
                            foreach ($encabezado->result() as $enc) {
                                $enca=$enc->unidad;
                                echo $enca;
                            };?>" required>
                            
                        </div>
                    </div>

                    <div align="right"><br>
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#var4">    Cancelar
                        </button>
                        <div class="modal fade" id="var4" tabindex="-1" role="dialog" aria-labelledby="bar4" aria-hidden="true">
                            <div class="modal-dialog" role="document">

                                <div class="modal-content">

                                    <div class="modal-header">

                                        <h5 class="modal-title" id="bar4">CANCELAR</h5>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                <div class="modal-body" align="left">
                                
                                    No se guardaran los Datos ingresados

                                </div>

                                <div class="modal-footer">

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Cerrar
                                    </button>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='<?= base_url('SanmeaControlador/index')?>' ">
                                        Si, Cancelar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Modificar
                    </button><br><br>
                </div>

            </div>
            </div>
</form>



<script>

    (function() {
      'use strict';
      window.addEventListener('load', function() {

        var forms = document.getElementsByClassName('needs-validation');

        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
              
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    }


    function siguiente1()
    {
                    if($('#s1').hasClass("invalid-feedback")){

                    $('#s1').removeClass().addClass('tab-pane fade');                
                    $('#lis-s1').removeClass().addClass('list-group-item list-group-item-action');
                    $('#s2').addClass('tab-pane fade active show');
                    $('#list-s2').removeClass().addClass('list-group-item list-group-item-action active');
                    $('#list-s3').removeClass().addClass('list-group-item disabled');
                 }

                alert ("SALIO");
    }         
    function siguiente2()
    {
        $('#s2').removeClass().addClass('tab-pane fade');
        $('#list-s2').removeClass().addClass('list-group-item list-group-item-action');
        $('#s3').addClass('tab-pane fade active show');
        $('#list-s3').removeClass().addClass('list-group-item list-group-item-action active');

    }

    function siguiente3()
    {
        $('#s3').removeClass().addClass('tab-pane fade');
        $('#list-s3').removeClass().addClass('list-group-item list-group-item-action');
        $('#s4').addClass('tab-pane fade active show');
        $('#list-s4').removeClass().addClass('list-group-item list-group-item-action active');

    }

    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if ( (charCode > 31 && charCode < 48) || charCode > 57) {
            return false;
        }
        return true;
    }

    function myFunction(){
    $("#form").submit(function() {
        $(this).validator(function(e) {
            if (e.isDefaultPrevented()) {
                $('#s1').removeClass().addClass('tab-pane fade');
                $('#lis-s1').removeClass().addClass('list-group-item list-group-item-action');
                $('#s2').addClass('tab-pane fade active show');
                $('#list-s2').removeClass().addClass('list-group-item list-group-item-action active');
                $('#list-s3').removeClass().addClass('list-group-item disabled');
            } else {
                
            }
        });
    });
}

function texto(e){
    key=e.keyCode || e.which;
    teclado=String.fromCharCode(key).toLowerCase();
    letras="abcdefghijklmnñopkrstuvwxyz ";
    especiales="8-37-38-46-146";
    teclado_especial=false;
    for(var i in especiales){
        if(key==especiales[i]){
            teclado_especial=true;break;

}
}
if(letras.indexOf(teclado)==-1 && !teclado_especial){
    return false;
}
    
}function texto(e){
    key=e.keyCode || e.which;
    teclado=String.fromCharCode(key).toLowerCase();
    letras="abcdefghijklmnñopkrstuvwxyz ";
    especiales="8-37-38-46-146";
    teclado_especial=false;
    for(var i in especiales){
        if(key==especiales[i]){
            teclado_especial=true;break;

}
}
if(letras.indexOf(teclado)==-1 && !teclado_especial){
    return false;
}
    
}

</script>



</script>

    <!--------------------------------FIN contenido**************************-->
    <script src="<?= base_url('js/jquery-3.3.1.slim.min.js') ?>" ></script>
    <script src="<?= base_url('js/popper.min.js') ?>" ""></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>" ""></script>
        <!--Sripts Necesarios para el estilo de la pagina-->
    </body>
</html>