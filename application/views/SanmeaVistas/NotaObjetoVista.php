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
<form action="FuncionNotaObjeto" class="needs-validation" method="get" novalidate>
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
                    <h5><strong>NOTA OBJETO</strong></h5></a>
                </label>
            </div>

        </nav>
    </div>  

    <div class="row">

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" align="center">

            <div class="position-fixed" class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action" id="lis-s1" href="#s1">
                    Informacion Cabecera
                </a>
                <a class="list-group-item list-group-item-action" id="list-s2" href="#s2">
                    Dirijida a 
                </a>
                <a class="list-group-item list-group-item-action" id="list-s3" href="#s3">
                    Informacion Causante
                </a>
                <a class="list-group-item list-group-item-action" id="list-s4" href="#s4">
                    Fecha Nota
                </a>
            </div>

        </div>
  
        <div class="col">

            <div class="tab-content" id="nav-tabContent">

<!-             INFORMACION NOTA CABECERA                                                                       ->
                <div class="tab-pane fade show active" id="s1" role="tabpanel" aria-labelledby="list-home-list">

                    <h4 align="center"><br>INFORMACION DEL NOTA CABECERA</h4><br>
                    <!-1ER VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var11">Expte Letra</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control opacity" name="ExpLetraNota" id="ExpLetraNota" placeholder="Ingrese Letra Expte" required>
                            <div class="invalid-feedback">
                                <li>Inserte Letra Expte</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Datos Insertado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-2DA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var12">Nro</label>
                        </div>

                        <div class="col-9">
                            <input type="number" class="form-control" name="expNumNota" id="expNumNota" placeholder="Nro Ex" required>
                            <div class="invalid-feedback">
                                <li>Inserte el Nro del Expte</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Datos Insertado VALIDO.</li>
                            </div>
                        </div>
                    </div><br>
                </div>

<!-             DIRIJIDA A                                                                                      ->
                <div class="tab-pane fade show active" id="s2" role="tabpanel" aria-labelledby="list-profile-list">

                    <h4 align="center"><br>ELEVO A USTED</h4><br>

    <!--  ------------------------------------------- Elevo a usted------------------------------------------------------------>                 <div class="row" >
                                <div class="col-3">
                                    <label for="var20">ELEVO / REMITO</label>
                                </div>

                           <div class="col-9">
                                <select class="form-control" name="ELEVO2Nota" id="ELEVO2Nota">
                                    <option value="Elevo">Elevo</option>
                                    <option value="Remito">Remito</option>
                                    
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato Seleccionado VALIDO</li>
                                </div>
                            </div>
                        </div><br> 

                    <!-1RA VARIABLE-APELLIDO->
                    <div class="row">
                        <div class="col-3">
                            <label for="var21">Apellido</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" name="apeNota" id="apeNota" placeholder="Inserte el Apellido" required>
                            <div class="invalid-feedback">
                                <li>Inserte el Apellido del quien sera dirijido.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-2DA VARIABLE-NOMBRE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var22">Nombre</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" name="nomNota" id="nomNota" placeholder="Inserte el Nombre"  required>
                            <div class="invalid-feedback">
                                <li>Inserte el Nombre del quien sera dirijido.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-3RA VARIABLE-GRADO->
                    <div class="row">
                        <div class="col-3">
                            <label for="var23">Grado</label>
                        </div>

                        <div class="col-9">
                            <select  class="form-control" name="gradoNota" id="gradoNota" required>
                                <option value="Cap">Cap             </option>
                                <option value="Tte 1ro">Tte 1ro         </option>
                                <option value="Subt">Subt            </option>
                                <option value="Subof My">Subof My        </option>
                                <option value="Subof Pr">Subof Pr        </option>
                                <option value="Sarg Ay">Sarg Ay         </option>
                                <option value="Sarg 1ro">Sarg 1ro        </option>
                                <option value="Sarg">Sarg            </option>
                                <option value="Cbo 1ro">Cbo 1ro         </option>
                                <option value="Cbo Art. 11">Cbo Art. 11     </option>
                                <option value="Cbo">Cbo             </option>
                                <option value="Sol Vol 1ra">Sol Vol 1ra     </option>
                                <option value="Sol Vol 2da">Sol Vol 2da     </option>
                                <option value="Sol Vol 2da EC">Sol Vol 2da "EC"</option>   

                            </select>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-4TA VARIABLE-ARMA/SERVICIO/ESPECIALIDAD>
                    <div class="row">
                        <div class="col-3">
                            <label for="var24">Arma/Servicio/<br>Especialidad</label>
                        </div>

                        <div class="col-9">
                            <select class="form-control" name="ArmaNota" id="ArmaNota">

                                <option value="I">I              </option>
                                <option value="C">C              </option>
                                <option value="Ing">Ing            </option>
                                <option value="Com">Com            </option>
                                <option value="Ars">Ars            </option>
                                <option value="Int">Int            </option>
                                <option value="A">A              </option>
                                <option value="SCD">SCD            </option>
                                <option value="Aud">Aud            </option>
                                <option value="Pil Ej">Pil Ej         </option>
                                <option value="Educ Fis">Educ Fis       </option>
                                <option value="Mus">Mus            </option>
                                <option value="Dir Bda">Dir Bda        </option> 
                                <option value="Med">Med            </option>
                                <option value="Vet">Vet            </option>
                                <option value="Cond Mot">Con Mot        </option>
                                <option value="Tal">Tal            </option>
                                <option value="Baq">Baq            </option>
                                <option value="Zap">Zap            </option>
                                <option value="Sas">Sas            </option>
                                <option value="Ofic">Ofic           </option>
                                <option value="Coc">Coc            </option>
                                <option value="Enf">Enf            </option>
                                <option value="Enf Vet">Enf Vet        </option>
                                <option value="Enf Prof">Enf Prof       </option>
                                <option value="Mec Inf">Mec Inf        </option>
                                <option value="Mec Mot Rda">Mec Mot Rda    </option>
                                <option value="Mec Mot Elec">Mec Mot Elec   </option>
                                <option value="Mec Mot Oruga">Mec Mot Oruga  </option>
                                <option value="Mec Arm">Mec Arm        </option>
                                <option value="Mec Mun Expl">Mec Mun Expl   </option>
                                <option value="Mec A">Mec A          </option>
                                <option value="Mec Inst">Mec Inst       </option>
                                <option value="Mec Ing">Mec Ing        </option>
                                <option value="Mec Av">Mec Av         </option>
                                <option value="Mec Op Apar Pr">Mec Op Apar Pr </option>
                                <option value="Mec Eq Camp">Mec Eq Camp    </option>
                                <option value="Mec Eq Fij">Mec Eq Fij     </option>
                                <option value="Mec de Radar">Mec de Radar   </option>
                                <option value="Cam">Cam            </option>
                                <option value="Carp">Carp           </option>
                                <option value="Herr">Herr           </option>
                                <option value="Aux Enf">Aux Enf        </option>


                            </select>
                            <div class="valid-feedback">
                                <li>Dato Seleccionado VALIDO</li>
                            </div>
                        </div>
                    </div><br>
                </div>


<!-             INFORMACION DEL CAUSANTE                                                                        ->
                <div class="tab-pane fade show active" id="s3" role="tabpanel" aria-labelledby="list-messages-list">
                    <h4 align="center"><br>INFORMACION DEL CAUSANTE</h4><br>
                    <!-1RA VARIABLE-DNI->
                    <div class="row">
                        <div class="col-3">
                            <label for="var31">DNI</label>
                        </div>

                        <div class="col-9">
                            <input type="number" class="form-control opacity" name="dni2NOTA" id="dni2NOTA" placeholder="Inserte el DNI" required>
                            <div class="invalid-feedback">
                                <li>Inserte el DNI del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-2DA VARIABLE-APELLIDO->
                    <div class="row">
                        <div class="col-3">
                            <label for="var32">Apellido</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" id="ape2Nota" name="ape2Nota" placeholder="Inserte el Apellido" required>
                            <div class="invalid-feedback">
                                <li>Inserte el Apellido del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-3RA VARIABLE-NOMBRE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var33">Nombre</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" id="nom2Nota" name="nom2Nota" placeholder="Inserte el Nombre"  required>
                            <div class="invalid-feedback">
                                <li>Inserte el Nombre del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-4TA VARIABLE-GRADO->
                    <div class="row">
                        <div class="col-3">
                            <label for="var34">Grado</label>
                        </div>

                        <div class="col-9">
                            <select  class="form-control" id="grado2Nota" name="grado2Nota" required>
                                <option value="Cap">Cap             </option>
                                <option value="Tte 1ro">Tte 1ro         </option>
                                <option value="Subt">Subt            </option>
                                <option value="Subof My">Subof My        </option>
                                <option value="Subof Pr">Subof Pr        </option>
                                <option value="Sarg Ay">Sarg Ay         </option>
                                <option value="Sarg 1ro">Sarg 1ro        </option>
                                <option value="Sarg">Sarg            </option>
                                <option value="Cbo 1ro">Cbo 1ro         </option>
                                <option value="Cbo Art. 11">Cbo Art. 11     </option>
                                <option value="Cbo">Cbo             </option>
                                <option value="Sol Vol 1ra">Sol Vol 1ra     </option>
                                <option value="Sol Vol 2da">Sol Vol 2da     </option>
                                <option value="Sol Vol 2da EC">Sol Vol 2da "EC"</option>   

                            </select>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-5TA VARIABLE-ARMA/SERVICIO/ESPECIALIDAD>
                    <div class="row">
                        <div class="col-3">
                            <label for="var35">Arma/Servicio/<br>Especialidad</label>
                        </div>

                        <div class="col-9">
                            <select class="form-control" id="Arma2Nota" name="Arma2Nota">

                                <option value="I">I              </option>
                                <option value="C">C              </option>
                                <option value="Ing">Ing            </option>
                                <option value="Com">Com            </option>
                                <option value="Ars">Ars            </option>
                                <option value="Int">Int            </option>
                                <option value="A">A              </option>
                                <option value="SCD">SCD            </option>
                                <option value="Aud">Aud            </option>
                                <option value="Pil Ej">Pil Ej         </option>
                                <option value="Educ Fis">Educ Fis       </option>
                                <option value="Mus">Mus            </option>
                                <option value="Dir Bda">Dir Bda        </option> 
                                <option value="Med">Med            </option>
                                <option value="Vet">Vet            </option>
                                <option value="Cond Mot ">Con Mot        </option>
                                <option value="Tal">Tal </option>
                                <option value="Baq">Baq </option>
                                <option value="Zap">Zap </option>
                                <option value="Sas">Sas </option>
                                <option value="Ofic">Ofic</option>
                                <option value="Coc">Coc     </option>
                                <option value="Enf">Enf     </option>
                                <option value="Enf Vet ">Enf Vet        </option>
                                <option value="Enf Prof">Enf Prof       </option>
                                <option value="Mec Inf ">Mec Inf        </option>
                                <option value="Mec Mot Rda  ">Mec Mot Rda    </option>
                                <option value="Mec Mot Elec ">Mec Mot Elec   </option>
                                <option value="Mec Mot Oruga">Mec Mot Oruga  </option>
                                <option value="Mec Arm">Mec Mun Expl   </option>
                                <option value="Mec A   ">Mec A          </option>
                                <option value="Mec Inst">Mec Inst       </option>
                                <option value="Mec Ing ">Mec Ing        </option>
                                <option value="Mec Av">Mec Av         </option>
                                <option value="Mec Op Apar Pr ">Mec Op Apar Pr </option>
                                <option value="Mec Eq Camp  ">Mec Eq Camp    </option>
                                <option value="Mec Eq Fij   ">Mec Eq Fij     </option>
                                <option value="Mec de Radar ">Mec de Radar   </option>
                                <option value="Cam">Cam            </option>
                                <option value="Carp">Carp           </option>
                                <option value="Herr">Herr           </option>
                                <option value="Aux Enf">Aux Enf        </option>


                            </select>
                            <div class="valid-feedback">
                                <li>Dato Seleccionado VALIDO</li>
                            </div>
                        </div>
                    </div><br>
                </div>
<!-             FECHA DE LA NOTA                                                                                ->
                <div class="tab-pane fade show active" id="s4" role="tabpanel" aria-labelledby="list-settings-list">
                    <h4 align="center"><br>FECHA DE LA NOTA</h4><br>
                    <!-1RA VARIABLE-DIA->
                    <div class="row">
                        <div class="col-3">
                            <label for="var41">Dia</label>
                        </div>
                        <div class="col-9">
                            <select  class="form-control" id="var41" name="var41" required>
                                <option value="1">1 </option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                <option value="5">5 </option>
                                <option value="6">6 </option>
                                <option value="7">7 </option>
                                <option value="8">8 </option>
                                <option value="9">9 </option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>    
                                <option value="16">16</option>
                                <option value="17">17</option>  
                                <option value="18">18</option> 
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>  


                            </select>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-2DA VARIABLE-MES->
                    <div class="row">
                        <div class="col-3">
                            <label for="var42">Mes</label>
                        </div>
                        <div class="col-9">
                            <select  class="form-control" id="var42" name="var42" required>
                                <option value="Enero">Enero         </option>
                                <option value="Febrero">Febrero       </option>
                                <option value="Marzo">Marzo         </option>
                                <option value="Abril">Abril         </option>
                                <option value="Mayo">Mayo          </option>
                                <option value="Junio">Junio         </option>
                                <option value="Julio">Julio         </option>
                                <option value="Agosto">Agosto        </option>
                                <option value="Septiembre">Septiembre    </option>
                                <option value="Obtubre">Obtubre       </option>
                                <option value="Noviembre">Noviembre     </option>
                                <option value="Diciembre">Diciembre     </option>
                            </select>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-3RA VARIABLE-AÑO->
                    <div class="row">
                        <div class="col-3">
                            <label for="var43">Año</label>
                        </div>
                        <div class="col-9">
                            <select  class="form-control" id="var43" name="var43" required>
                                <option value="2018">2018 </option>
                                <option value="2019">2019 </option>
                                <option value="2020">2020</option>
                            </select>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-BOTONES SIGUIENTE Y CANCELAR->
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
                        IMPRIMIR
                    </button><br><br>
                </div>
            </div>
        </div>
        
    </div>
</div>
</form>


<!-SCRIPTS DE VALIDACION->


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
        
</script>

    <!--------------------------------FIN contenido**************************-->

          
    <script src="<?= base_url('js/jquery-3.3.1.slim.min.js') ?>" ></script>
    <script src="<?= base_url('js/popper.min.js') ?>" ""></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>" ""></script>
    </body>
</html>