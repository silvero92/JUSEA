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
<form action="InfoAccEnf" class="needs-validation" method="get" novalidate>
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
                            <button type="button" class="btn btn-primary" onclick=" location.href='<?= base_url('SanmeaControlador/index')?>'  ">
                                Aceptar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-9" align="right">
                <label class="text-light">
                    <strong><h4>INFORMACION<br></h4><h6>ACCIDENTE/ENFERMEDAD</strong></h6></a>
                </label>
            </div>

        </nav>
    </div>  

    <div class="row">

        <div  class="col-sm-3 col-md-3 col-lg-3 col-xl-3" align="center">

            <div  class="position-fixed" class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action" id="lis-s1" href="#s1">
                    Caratula
                </a>
                <a class="list-group-item list-group-item-action" id="list-s2" href="#s2">
                    Iniciando Tramite
                </a>
                <a class="list-group-item list-group-item-action" id="list-s3" href="#s3">
                    Acta Declaracion Causante
                </a>
                <a class="list-group-item list-group-item-action" id="list-s4" href="#s4">
                    Acta Declaracion Testigo 1
                </a>
                <a class="list-group-item list-group-item-action" id="list-s5" href="#s5">
                    Acta Declaracion Testigo 2
                </a>
                <a class="list-group-item list-group-item-action" id="list-s6" href="#s6">
                    Conclusiones
                </a>
            </div>

        </div>
  
        <div class="col">

            <div class="tab-content" id="nav-tabContent">

<!-             CARATULA                                                                                        ->
                <div class="tab-pane fade show active" id="s1" role="tabpanel" aria-labelledby="list-home-list">
                    <h5 align="center"><strong>CARÁTULA</strong></h5>
                    <!-INFORMACION DEL ACTA->
                    <div class="container-fluid">
                        <p align="center"><strong>Informacion del Acta</strong></p>
                        <!-var1a1 - Expte>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1a1">Expte</label>
                            </div>

                            <div class="col-9">
                                <input type="text" class="form-control opacity" id="letraExpH1" name="letraExpH1" placeholder="Ingrese Expte" required>
                                <div class="invalid-feedback">
                                    <li>Inserte Letra Expte</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var1a2 - NRO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1a2">Nro</label>
                            </div>

                            <div class="col-9">
                                <input type="number" class="form-control" id="NroExpH1" name="NroExpH1" placeholder="Inserte el Nro del Expte" required>
                                <div class="invalid-feedback">
                                    <li>Inserte el Nro del Expte</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <!-INFORMACION DEL CAUSANTE->
                    <div class="container-fluid">
                        <p align="center"><strong>Informacion del Causante</strong></p>
                        <!-var1b1 - GRADO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1b1">Grado</label>
                            </div>

                            <div class="col-9">
                                <select  class="form-control" id="GradCausanteH1" name="GradCausanteH1" required>
                                    <option value="Cap">Capitan                    </option>
                                    <option value="Tte 1ro">Teniente 1ro               </option>
                                    <option value="Subt">Subteniente                </option>
                                    <option value="Subof My">Suboficial Mayor           </option>
                                    <option value="Subof Pr">Suboficial Principal       </option>
                                    <option value="Sarg Ay">Sargento Ayudante          </option>
                                    <option value="Sarg 1ro">Sargento 1ro               </option>
                                    <option value="Sarg">Sargento                   </option>
                                    <option value="Cbo 1ro">Cabo 1ro                   </option>
                                    <option value="Cbo Art. 11">Cabo Art. 11               </option>
                                    <option value="Cbo">Cabo                       </option>
                                    <option value="Sol Vol 1ra">Soldado Voluntario 1ra     </option>
                                    <option value="Sol Vol 2da">Soldado Voluntario 2da     </option>
                                    <option value="Sol Vol 2da EC">Soldado Voluntario 2da "EC"</option>
                                    <option value="Subof My Cad">Suboficial Mayor Cadete    </option>
                                    <option value="Subof Pr Cad">Suboficial Principal Cadete</option>
                                    <option value="Sarg Ay cad">Sargento Ayudate Cadete    </option>
                                    <option value="Sarg 1ro cad">Sargento 1ro Cadete        </option>
                                    <option value="Sarg Cad">Sargento Cadete            </option>
                                    <option value="Cbo 1ro Cad">Cabo 1ro Cadete            </option>
                                    <option value="Cbo cad">Cabo Cadete                </option>
                                    <option value="Cad Prof">Cad Profesional            </option>
                                    <option value="Cad Vto Año">Cadete Vto Año             </option>
                                    <option value="Cad IVto Año">Cadete IVto Año            </option>
                                    <option value="Cad IIIe Año">Cadete IIIer Año           </option>
                                    <option value="Cad IIdo Año">Cadete IIdo Año            </option>
                                    <option value="Cad Ier Año">Cadete Ier Año             </option>   
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var1b2 - ARMA/SERVICIO/ESPECIALIDAD>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1b2">Arma/Servicio/<br>Especialidad</label>
                            </div>
                            <div class="col-9">
                                <select class="form-control" id="ArmaCausanteH1" name="ArmaCausanteH1">
                                    <option value="I">Infanteria           </option>
                                    <option value="C">Caballeria           </option>
                                    <option value="Ing">Ingenieros           </option>
                                    <option value="Com">Comunicaciones       </option>
                                    <option value="Ars">Arsenales            </option>
                                    <option value="Int">Intendencia          </option>
                                    <option value="A  ">Aartilleria          </option>
                                    <option value="SCD">SCD                  </option>
                                    <option value="Aud">Auditor              </option>
                                    <option value="Pil Ej">Piloto Ejercito      </option>
                                    <option value="Educ Fis">Educacion Fisica     </option>
                                    <option value="Mus">Musico               </option>
                                    <option value="Dir Bda ">Director de Banda    </option> 
                                    <option value="Med">Medico               </option>
                                    <option value="Vet">Veterinario          </option>
                                    <option value="Cond Mot">Conductor Motorista  </option>
                                    <option value="Tal">Talabartero          </option>
                                    <option value="Baq">Baqueano             </option>
                                    <option value="Zap">Zapatero             </option>
                                    <option value="Sas">Sastre               </option>
                                    <option value="Ofic">Oficinista           </option>
                                    <option value="Coc">Cocinero             </option>
                                    <option value="Enf">Enfermero            </option>
                                    <option value="Enf Vet">Enfermero Veterinario</option>
                                    <option value="Enf Prof">Enfermero Profesional</option>
                                    <option value="Mec Inf">Mecanico Informatico </option>
                                    <option value="Mec Mot Rda">Mecanico Mot Rda     </option>
                                    <option value="Mec Mot Elec">Mecanico Mot Elec    </option>
                                    <option value="Mec Mot Oruga">Mecanico Mot Oruga   </option>
                                    <option value="Mec Arm">Mecanico Arm         </option>
                                    <option value="Mec Mun Expl">Mecanico Mun Expl    </option>
                                    <option value="Mec A">Mecanico A           </option>
                                    <option value="Mec Inst">Mecanico Inst        </option>
                                    <option value="Mec Ing ">Mecanico Ing         </option>
                                    <option value="Mec Av  ">Mecanico Av          </option>
                                    <option value="Mec Op Apar Pr">Mecanico Op Apar Pr  </option>
                                    <option value="Mec Eq Camp">Mecanico Eq Camp     </option>
                                    <option value="Mec Eq Fij">Mecanico Eq Fij      </option>
                                    <option value="Mec de Radar">Mecanico de Radar    </option>
                                    <option value="Cam ">Camarero             </option>
                                    <option value="Carp">Carpintero           </option>
                                    <option value="Herr">Herrero              </option>
                                    <option value="Aux Enf">Auxiliar Enfermeria  </option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato Seleccionado VALIDO</li>
                                </div>
                            </div>
                        </div>
                        <!-var1b3 - NOMBRE>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1b3">Nombre</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="NomCausanteH1" name="NomCausanteH1" placeholder="Inserte el Nombre del Causante"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte el Nombre del Causante</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var1b4 - APELLIDO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1b4">Apellido</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="ApeCausanteH1" name="ApeCausanteH1" placeholder="Inserte el Apellido del Causante"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte el Apellido del Causante</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var1b5 - EDAD>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1b5">Edad</label>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control opacity" id="var1b5" name="var1b5" placeholder="Inserte la Edad del Causante" required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Edad del Causante</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var1b6 - ESTADO CIVIL>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1b6">Estado Civil</label>
                            </div>
                           <div class="col-9">
                                <select class="form-control" id="var1b6" name="var1b6">

                                    <option value="Soltero/a">Soltero/a   </option>
                                    <option value="Casado/a">Casado/a    </option>
                                    <option value="Divorciado/a">Divorciado/a</option>
                                    <option value="Viudo/a">Viudo/a     </option>

                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                           </div>
                        </div>
                        <!-var1b7 - DNI>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1b7">DNI</label>
                            </div>
                            <div class="col-9">
                                <input type="number" class="form-control opacity" id="var1b7" name="var1b7" placeholder="Inserte el DNI del Causante" required>
                                <div class="invalid-feedback">
                                    <li>Inserte el DNI del Causante</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <!- DATO DE FECHA>
                    <div class="container-fluid">
                        <p align="center"><strong>Dato de Fecha</strong></p>
                        <!-var1c1 - DIA>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1c1">Dia</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var1c1" name="var1c1" required>
                                    <option value="1 ">1 </option>
                                    <option value="2 ">2 </option>
                                    <option value="3 ">3 </option>
                                    <option value="4 ">4 </option>
                                    <option value="5 ">5 </option>
                                    <option value="6 ">6 </option>
                                    <option value="7 ">7 </option>
                                    <option value="8 ">8 </option>
                                    <option value="9 ">9 </option>
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
                        <!-var1c2 - MES>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1c2">Mes</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var1c2" name="var1c2" required>
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
                        <!-var1c3 - AÑO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1c3">Año</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var1c3" name="var1c3"  required>
                                    <option value="2018">2018 </option>
                                    <option value="2019">2019 </option>
                                    <option value="2020">2020</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <!CAUSAS Y OBSERVACIONES->
                    <div class="container-fluid">
                        <p align="center"><strong>Causas y Observaciones</strong></p>
                        <!-var1d1 - CAUSAS>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1d1">Causas</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="var1d1" name="var1d1" placeholder="Inserte la Causa"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Causa</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var1d2 - OBSERVACIONES>
                        <div class="row">
                            <div class="col-3">
                                <label for="var1d2">Observacion</label>
                            </div>
                            <div class="col-9">
                                <textarea class="form-control" rows="5" id="var1d2" name="var1d2" placeholder="Inserte las Observaciones" required></textarea>  
                                <div class="invalid-feedback">
                                    <li>Inserte las Observaciones</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                    </div>
                </div>
<!-             DILIGENCIA INICIANDO TRAMITE                                                                    ->
                <div class="tab-pane fade show active" id="s2" role="tabpanel" aria-labelledby="list-profile-list">
                    <h5 align="center"><strong>DILIGENCIA INICIANDO TRAMITE</strong></h5>
                    <!DATO DE FECHA->
                    <div class="container-fluid">
                        <p align="center"><strong>Datos de Fecha</strong></p>
                        <!-var2a1 - DIA>
                        <div class="row">
                            <div class="col-3">
                                <label for="var2a1">Dia</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var2a1" name="var2a1" required>
                                    <option value="1 ">1 </option>
                                    <option value="2 ">2 </option>
                                    <option value="3 ">3 </option>
                                    <option value="4 ">4 </option>
                                    <option value="5 ">5 </option>
                                    <option value="6 ">6 </option>
                                    <option value="7 ">7 </option>
                                    <option value="8 ">8 </option>
                                    <option value="9 ">9 </option>
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
                        <!-var2a2 - MES>
                        <div class="row">
                            <div class="col-3">
                                <label for="var2a2">Mes</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var2a2" name="var2a2" required>
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
                        <!-var2a3 - AÑO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var2a3">Año</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var2a3" name="var2a3" required>
                                    <option value="2018">2018 </option>
                                    <option value="2019">2019 </option>
                                    <option value="2020">2020</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var2a4 - HORA>
                        <div class="row">
                            <div class="col-3">
                                <label for="var2a4">Hora</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var2a4" name="var2a4"  required>
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
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
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var2a5 - MINUTOS>
                        <div class="row">
                            <div class="col-3">
                                <label for="var2a5">Minutos</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var2a5" name="var2a5" required>
                                    <option value="00">00</option>
                                    <option value="05">05</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                    <option value="35">35</option>
                                    <option value="40">40</option>
                                    <option value="45">45</option>
                                    <option value="50">50</option>
                                    <option value="55">55</option>
                                    
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <!-INFORMACION DEL OFICIAL INFORMANTE>
                    <div class="container-fluid">
                        <p align="center"><strong>Informacion del Oficial Informante</strong></p>
                        <!-var2b1 - GRADO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var2b1">Grado</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var2b1" name="var2b1" required>
                                    <option value="Cap">Capitan                    </option>
                                    <option value="Tte 1ro">Teniente 1ro               </option>
                                    <option value="Subt">Subteniente                </option>
                                    <option value="Subof My">Suboficial Mayor           </option>
                                    <option value="Subof Pr">Suboficial Principal       </option>
                                    <option value="Sarg Ay">Sargento Ayudante          </option>
                                    <option value="Sarg 1ro">Sargento 1ro               </option>
                                    <option value="Sarg">Sargento                   </option>
                                    <option value="Cbo 1ro">Cabo 1ro                   </option>
                                    <option value="Cbo Art. 11">Cabo Art. 11               </option>
                                    <option value="Cbo">Cabo                       </option>
                                    <option value="Sol Vol 1ra">Soldado Voluntario 1ra     </option>
                                    <option value="Sol Vol 2da">Soldado Voluntario 2da     </option>
                                    <option value="Sol Vol 2da EC">Soldado Voluntario 2da "EC"</option>
                                    <option value="Subof My Cad">Suboficial Mayor Cadete    </option>
                                    <option value="Subof Pr Cad">Suboficial Principal Cadete</option>
                                    <option value="Sarg Ay cad">Sargento Ayudate Cadete    </option>
                                    <option value="Sarg 1ro cad">Sargento 1ro Cadete        </option>
                                    <option value="Sarg Cad">Sargento Cadete            </option>
                                    <option value="Cbo 1ro Cad">Cabo 1ro Cadete            </option>
                                    <option value="Cbo cad">Cabo Cadete                </option>
                                    <option value="Cad Prof">Cad Profesional            </option>
                                    <option value="Cad Vto Año">Cadete Vto Año             </option>
                                    <option value="Cad IVto Año">Cadete IVto Año            </option>
                                    <option value="Cad IIIe Año">Cadete IIIer Año           </option>
                                    <option value="Cad IIdo Año">Cadete IIdo Año            </option>
                                    <option value="Cad Ier Año">Cadete Ier Año             </option>  
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var2b2 - ARMA/SERVICIO/ESPECIALIDAD>
                        <div class="row">
                            <div class="col-3">
                                <label for="var2b2">Arma/Servicio/<br>Especialidad</label>
                            </div>
                            <div class="col-9">
                                <select class="form-control" id="var2b2" name="var2b2">
                                      <option value="I">Infanteria           </option>
                                    <option value="C">Caballeria           </option>
                                    <option value="Ing">Ingenieros           </option>
                                    <option value="Com">Comunicaciones       </option>
                                    <option value="Ars">Arsenales            </option>
                                    <option value="Int">Intendencia          </option>
                                    <option value="A  ">Aartilleria          </option>
                                    <option value="SCD">SCD                  </option>
                                    <option value="Aud">Auditor              </option>
                                    <option value="Pil Ej">Piloto Ejercito      </option>
                                    <option value="Educ Fis">Educacion Fisica     </option>
                                    <option value="Mus">Musico               </option>
                                    <option value="Dir Bda ">Director de Banda    </option> 
                                    <option value="Med">Medico               </option>
                                    <option value="Vet">Veterinario          </option>
                                    <option value="Cond Mot">Conductor Motorista  </option>
                                    <option value="Tal">Talabartero          </option>
                                    <option value="Baq">Baqueano             </option>
                                    <option value="Zap">Zapatero             </option>
                                    <option value="Sas">Sastre               </option>
                                    <option value="Ofic">Oficinista           </option>
                                    <option value="Coc">Cocinero             </option>
                                    <option value="Enf">Enfermero            </option>
                                    <option value="Enf Vet">Enfermero Veterinario</option>
                                    <option value="Enf Prof">Enfermero Profesional</option>
                                    <option value="Mec Inf">Mecanico Informatico </option>
                                    <option value="Mec Mot Rda">Mecanico Mot Rda     </option>
                                    <option value="Mec Mot Elec">Mecanico Mot Elec    </option>
                                    <option value="Mec Mot Oruga">Mecanico Mot Oruga   </option>
                                    <option value="Mec Arm">Mecanico Arm         </option>
                                    <option value="Mec Mun Expl">Mecanico Mun Expl    </option>
                                    <option value="Mec A">Mecanico A           </option>
                                    <option value="Mec Inst">Mecanico Inst        </option>
                                    <option value="Mec Ing ">Mecanico Ing         </option>
                                    <option value="Mec Av  ">Mecanico Av          </option>
                                    <option value="Mec Op Apar Pr">Mecanico Op Apar Pr  </option>
                                    <option value="Mec Eq Camp">Mecanico Eq Camp     </option>
                                    <option value="Mec Eq Fij">Mecanico Eq Fij      </option>
                                    <option value="Mec de Radar">Mecanico de Radar    </option>
                                    <option value="Cam ">Camarero             </option>
                                    <option value="Carp">Carpintero           </option>
                                    <option value="Herr">Herrero              </option>
                                    <option value="Aux Enf">Auxiliar Enfermeria  </option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato Seleccionado VALIDO</li>
                                </div>
                            </div>
                        </div>
                        <!-var2b3 - NOMBRE>
                        <div class="row">
                            <div class="col-3">
                                <label for="var2b3">Nombre</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="var2b3" name="var2b3" placeholder="Inserte el Nombre del Oficial Informante"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte el Nombre del Oficial Informante</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var2b4 - APELLIDO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var2b4">Apellido</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="var2b4" name="var2b4" placeholder="Inserte el Apellido del Oficial Informante"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte el Apellido del Oficial Informante</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                    </div><br>
                </div>
<!-             ACTA DECLARACION CAUSANTE                                                                       ->
                <div class="tab-pane fade show active" id="s3" role="tabpanel" aria-labelledby="list-messages-list">
                    <h5 align="center"><strong>ACTA DECLARACION DEL CAUSANTE</strong></h5>
                    <!DATO DE FECHA->
                    <div class="container-fluid">
                        <p align="center"><strong>Datos de Fecha</strong></p>
                        <!-var3a1 - DIA>
                        <div class="row">
                            <div class="col-3">
                                <label for="var3a1">Dia</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var3a1" name="var3a1" required>
                                    <option value="1 ">1 </option>
                                    <option value="2 ">2 </option>
                                    <option value="3 ">3 </option>
                                    <option value="4 ">4 </option>
                                    <option value="5 ">5 </option>
                                    <option value="6 ">6 </option>
                                    <option value="7 ">7 </option>
                                    <option value="8 ">8 </option>
                                    <option value="9 ">9 </option>
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
                        <!-var3a2 - MES>
                        <div class="row">
                            <div class="col-3">
                                <label for="var3a2">Mes</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var3a2" name="var3a2" required>
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
                        <!-var3a3 - AÑO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var3a3">Año</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var3a3" name="var3a3" required>
                                    <option value="2018">2018 </option>
                                    <option value="2019">2019 </option>
                                    <option value="2020">2020</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var3a4 - HORA>
                        <div class="row">
                            <div class="col-3">
                                <label for="var3a4">Hora</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var3a4"  name="var3a4" required>
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
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
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var3a5 - MINUTOS>
                        <div class="row">
                            <div class="col-3">
                                <label for="var3a5">Minutos</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var3a5" name="var3a5" required>
                                    <option value="00">00</option>
                                    <option value="05">05</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                    <option value="35">35</option>
                                    <option value="40">40</option>
                                    <option value="45">45</option>
                                    <option value="50">50</option>
                                    <option value="55">55</option>
                                    
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <!-PREGUNTAS AL CAUSANTE>
                    <div class="container-fluid">
                        <p align="center"><strong>Preguntas al Causante</strong></p>
                        <!-var3b1 - PREG 1>
                        <div class="row">
                            <div class="col-1">
                                <label for="var3b1">
                                    <strong>1.</strong>
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Cual afeccion/Lesion que lo aqueja y como se produjo la misma?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var3b1" name="var3b1" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var3b2 - PREG 2>
                        <div class="row">
                            <div class="col-1">
                                <label for="var3b2">
                                    <strong>2.</strong>
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Tiene antecedentes Medicos Anteriores?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var3b2" name="var3b2" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var3b3 - PREG 3>
                        <div class="row">
                            <div class="col-1">
                                <label for="var3b3">
                                    <strong>3.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                Si tiene antecedentes Medicos ¿Se lo realizaron con anterioridad AJM?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var3b3" name="var3b3" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var3b4 - PREG 4>
                        <div class="row">
                            <div class="col-1">
                                <label for="var3b4">
                                    <strong>4.</strong> 
                                </label>
                            </div>
                            <div class="col-11">
                                 ¿Se le brindo Asistencia Medica necesario en su momento?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var3b4" name="var3b4" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var3b5 - PREG 5>
                        <div class="row">
                            <div class="col-1">
                                <label for="var3b5">
                                    <strong>5.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Quien fue el Medico que lo atendio en la Actualidad?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var3b5" name="var3b5" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var3b6 - PREG 6>
                        <div class="row">
                            <div class="col-1">
                                <label for="var3b6">
                                    <strong>6.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Como es su estado actual de Salud?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var3b6" name="var3b6" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var3b7 - PREG 7>
                        <div class="row">
                            <div class="col-1">
                                <label for="var3b7">
                                    <strong>7.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Quien puede atestiguar a su afeccion?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var3b7" name="var3b7" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var3b8 - PREG 8>
                        <div class="row">
                            <div class="col-1">
                                <label for="var3b8">
                                    <strong>8.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                Si tiene algo mas que agregar.
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var3b8" name="var3b8" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var3b9 - PREG 9>
                        <div class="row">
                            <div class="col-1">
                                <strong>9.</strong>
                                
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var3b9"  name="var3b9" placeholder="Inserte la Pregunta">
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var3b10" name="var3b10" placeholder="Inserte la Rpta">
                            </div>
                        </div><br>
                    </div>
                </div>
<!-             ACTA DECLARACION TESTIGO 1                                                                     ->
                <div class="tab-pane fade active show" id="s4" role="tabpanel" aria-labelledby="list-messages-list">
                    <h5 align="center"><strong>ACTA DECLARACIóN TESTIGO 1</strong></h5>


                    <!DATO DE FECHA->
                    <div class="container-fluid">
                        <p align="center"><strong>Datos de Fecha</strong></p>
                        <!-var4a1 - DIA>
                        <div class="row">
                            <div class="col-3">
                                <label for="var4a1">Dia</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var4a1" name="var4a1" required>
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
                        <!-var4a2 - MES>
                        <div class="row">
                            <div class="col-3">
                                <label for="var4a2">Mes</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var4a2" name="var4a2" required>
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
                        <!-var4a3 - AÑO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var4a3">Año</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var4a3" name="var4a3" required>
                                    <option value="2018">2018 </option>
                                    <option value="2019">2019 </option>
                                    <option value="2020">2020</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var4a4 - HORA>
                        <div class="row">
                            <div class="col-3">
                                <label for="var4a4">Hora</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var4a4" name="var4a4" required>
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
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
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var4a5 - MINUTOS>
                        <div class="row">
                            <div class="col-3">
                                <label for="var4a5">Minutos</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var4a5" name="var4a5" required>
                                    <option value="00">00</option>
                                    <option value="05">05</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                    <option value="35">35</option>
                                    <option value="40">40</option>
                                    <option value="45">45</option>
                                    <option value="50">50</option>
                                    <option value="55">55</option>
                                    
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <!-INFORMACION DEL TESTIGO 1>
                    <div class="container-fluid">
                        <p align="center"><strong>Informacion del Testigo 1</strong></p>
                        <!-var4b1 - GRADO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var4b1">Grado</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var4b1" name="var4b1" required>
                            <option value="Cap">Capitan                    </option>
                                    <option value="Tte 1ro">Teniente 1ro</option>
                                    <option value="Subt">Subteniente</option>
                                    <option value="Subof My">Suboficial Mayor</option>
                                    <option value="Subof Pr">Suboficial Principal</option>
                                    <option value="Sarg Ay">Sargento Ayudante          </option>
                                    <option value="Sarg 1ro">Sargento 1ro               </option>
                                    <option value="Sarg">Sargento                   </option>
                                    <option value="Cbo 1ro">Cabo 1ro                   </option>
                                    <option value="Cbo Art. 11">Cabo Art. 11               </option>
                                    <option value="Cbo">Cabo                       </option>
                                    <option value="Sol Vol 1ra">Soldado Voluntario 1ra     </option>
                                    <option value="Sol Vol 2da">Soldado Voluntario 2da     </option>
                                    <option value="Sol Vol 2da EC">Soldado Voluntario 2da "EC"</option>
                                    <option value="Subof My Cad">Suboficial Mayor Cadete    </option>
                                    <option value="Subof Pr Cad">Suboficial Principal Cadete</option>
                                    <option value="Sarg Ay cad">Sargento Ayudate Cadete    </option>
                                    <option value="Sarg 1ro cad">Sargento 1ro Cadete        </option>
                                    <option value="Sarg Cad">Sargento Cadete            </option>
                                    <option value="Cbo 1ro Cad">Cabo 1ro Cadete            </option>
                                    <option value="Cbo cad">Cabo Cadete                </option>
                                    <option value="Cad Prof">Cad Profesional            </option>
                                    <option value="Cad Vto Año">Cadete Vto Año             </option>
                                    <option value="Cad IVto Año">Cadete IVto Año            </option>
                                    <option value="Cad IIIe Año">Cadete IIIer Año           </option>
                                    <option value="Cad IIdo Año">Cadete IIdo Año            </option>
                                    <option value="Cad Ier Año">Cadete Ier Año             </option> 
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var4b2 - ARMA/SERVICIO/ESPECIALIDAD>
                        <div class="row">
                            <div class="col-3">
                                <label for="var4b2">Arma/Servicio/<br>Especialidad</label>
                            </div>
                            <div class="col-9">
                                <select class="form-control" id="var4b2" name="var4b2">
                                           <option value="I">Infanteria           </option>
                                    <option value="C">Caballeria           </option>
                                    <option value="Ing">Ingenieros           </option>
                                    <option value="Com">Comunicaciones       </option>
                                    <option value="Ars">Arsenales            </option>
                                    <option value="Int">Intendencia          </option>
                                    <option value="A  ">Aartilleria          </option>
                                    <option value="SCD">SCD                  </option>
                                    <option value="Aud">Auditor              </option>
                                    <option value="Pil Ej">Piloto Ejercito      </option>
                                    <option value="Educ Fis">Educacion Fisica     </option>
                                    <option value="Mus">Musico               </option>
                                    <option value="Dir Bda ">Director de Banda    </option> 
                                    <option value="Med">Medico               </option>
                                    <option value="Vet">Veterinario          </option>
                                    <option value="Cond Mot">Conductor Motorista  </option>
                                    <option value="Tal">Talabartero          </option>
                                    <option value="Baq">Baqueano             </option>
                                    <option value="Zap">Zapatero             </option>
                                    <option value="Sas">Sastre               </option>
                                    <option value="Ofic">Oficinista           </option>
                                    <option value="Coc">Cocinero             </option>
                                    <option value="Enf">Enfermero            </option>
                                    <option value="Enf Vet">Enfermero Veterinario</option>
                                    <option value="Enf Prof">Enfermero Profesional</option>
                                    <option value="Mec Inf">Mecanico Informatico </option>
                                    <option value="Mec Mot Rda">Mecanico Mot Rda     </option>
                                    <option value="Mec Mot Elec">Mecanico Mot Elec    </option>
                                    <option value="Mec Mot Oruga">Mecanico Mot Oruga   </option>
                                    <option value="Mec Arm">Mecanico Arm         </option>
                                    <option value="Mec Mun Expl">Mecanico Mun Expl    </option>
                                    <option value="Mec A">Mecanico A           </option>
                                    <option value="Mec Inst">Mecanico Inst        </option>
                                    <option value="Mec Ing ">Mecanico Ing         </option>
                                    <option value="Mec Av  ">Mecanico Av          </option>
                                    <option value="Mec Op Apar Pr">Mecanico Op Apar Pr  </option>
                                    <option value="Mec Eq Camp">Mecanico Eq Camp     </option>
                                    <option value="Mec Eq Fij">Mecanico Eq Fij      </option>
                                    <option value="Mec de Radar">Mecanico de Radar    </option>
                                    <option value="Cam ">Camarero             </option>
                                    <option value="Carp">Carpintero           </option>
                                    <option value="Herr">Herrero              </option>
                                    <option value="Aux Enf">Auxiliar Enfermeria  </option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato Seleccionado VALIDO</li>
                                </div>
                            </div>
                        </div>
                        <!-var4b3 - NOMBRE>
                        <div class="row">
                            <div class="col-3">
                                <label for="var4b3">Nombre</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="var4b3" name="var4b3" placeholder="Inserte el Nombre del Testigo 1"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte el Nombre del Testigo 1</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var4b4 - APELLIDO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var4b4">Apellido</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="var4b4" name="var4b4" placeholder="Inserte el Apellido del Testigo 1"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte el Apellido del Testigo 1</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var4b5 - EDAD>
                        <div class="row">
                            <div class="col-3">
                                <label for="var4b5">Edad</label>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control opacity" id="var4b5" name="var4b5" placeholder="Inserte la Edad del Testigo 1" required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Edad Testigo 1</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var4b6 - DNI>
                        <div class="row">
                            <div class="col-3">
                                <label for="var4b6">DNI</label>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control opacity" id="var4b6" name="var4b6" placeholder="Inserte el DNI del Testigo 1" required>
                                <div class="invalid-feedback">
                                    <li>Inserte el DNI del Testigo 1</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <!-PREGUNTAS AL TESTIGO 1>
                    <div class="container-fluid">
                        <p align="center"><strong> Preguntas al Testigo 1 </strong></p>
                        <!-var4c1 - PREG 1>
                        <div class="row">
                            <div class="col-1">
                                <label for="var4c1">
                                    <strong>1.</strong>
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Tiene conocimiento de la afeccion/lesion que padece el causante y desde cuando por la cual se ha iniciado la presente Informacion?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var4c1" name="var4c1" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var4c2 - PREG 2>
                        <div class="row">
                            <div class="col-1">
                                <label for="var4c2">
                                    <strong>2.</strong>
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Que sintomas observa u observo de la afeccion/lesion que padece?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var4c2" name="var4c2" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var4c3 - PREG 3>
                        <div class="row">
                            <div class="col-1">
                                <label for="var4c3">
                                    <strong>3.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                Al conocer su afeccion/lesion ¿Se hizo atender por el servicio Medico de su unidad?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-3">
                                <select  class="form-control" id="var4c3" name="var4c3" required>
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                            <div class="col-8">
                                <select  class="form-control" id="var4c3a" name="var4c3a" required>
                                    <option value=""></option>
                                    <option value="Seccion Sanidad               ">Seccion Sanidad               </option>
                                    <option value="Hospital Militar Central      ">Hospital Militar Central      </option>
                                    <option value="Hospital Militar Campo de Mayo">Hospital Militar Campo de Mayo</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var4c4 - PREG 4>
                        <div class="row">
                            <div class="col-1">
                                <label for="var4c4">
                                    <strong>4.</strong> 
                                </label>
                            </div>
                            <div class="col-11">
                                 ¿Se le brindo la correspondiente asistencia Medica?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-3">
                                <select  class="form-control" id="var4c4" name="var4c4"  required>
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var4c5 - PREG 5>
                        <div class="row">
                            <div class="col-1">
                                <label for="var4c5">
                                    <strong>5.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Considera que la afeccion/lesion del causante se produjo en ACTOS DEL SERVICIO?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-3">
                                <select  class="form-control" id="var4c5" name="var4c5" required>
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var4c6 - PREG 6>
                        <div class="row">
                            <div class="col-1">
                                <label for="var4c6">
                                    <strong>6.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Tiene algo que agregar, quitar o enmendar a esta Declaracion?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var4c6" name="var4c6" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var4c7 - PREG 7>
                        <div class="row">
                            <div class="col-1">
                                <label for="var4c7">
                                    <strong>7.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var3b8" name="var3b8" placeholder="Inserte la Pregunta">
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var4c7"  name="var3b7" placeholder="Inserte la Rpta" >
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                    </div>


                </div>
<!-             ACTA DECLARACION TESTIGO 2                                                                     ->
                <div class="tab-pane fade active show" id="s5" role="tabpanel" aria-labelledby="list-messages-list">
                    <h5 align="center"><strong>ACTA DECLARACION TESTIGO 2</strong></h5>


                    <!DATO DE FECHA->
                    <div class="container-fluid">
                        <p align="center"><strong>Datos de Fecha</strong></p>
                        <!-var5a1 - DIA>
                        <div class="row">
                            <div class="col-3">
                                <label for="var5a1">Dia</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var5a1" name="var5a1" required>
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
                        <!-var5a2 - MES>
                        <div class="row">
                            <div class="col-3">
                                <label for="var5a2">Mes</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var5a2" name="var5a2" required>
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
                        <!-var5a3 - AÑO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var5a3">Año</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var5a3" name="var5a3" required>
                                    <option value="2018">2018 </option>
                                    <option value="2019">2019 </option>
                                    <option value="2020">2020</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var5a4 - HORA>
                        <div class="row">
                            <div class="col-3">
                                <label for="var5a4">Hora</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var5a4" name="var5a4" required>
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
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
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var5a5 - MINUTOS>
                        <div class="row">
                            <div class="col-3">
                                <label for="var5a5">Minutos</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var5a5" name="var5a5" required>
                                    <option value="00">00</option>
                                    <option value="05">05</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                    <option value="35">35</option>
                                    <option value="40">40</option>
                                    <option value="45">45</option>
                                    <option value="50">50</option>
                                    <option value="55">55</option>
                                    
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <!-INFORMACION DEL TESTIGO 2>
                    <div class="container-fluid">
                        <p align="center"><strong>Informacion del Testigo 2</strong></p>
                        <!-var5b1 - GRADO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var5b1">Grado</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var5b1" name="var5b1" required>
                                     <option value="Cap">Capitan                    </option>
                                    <option value="Tte 1ro">Teniente 1ro               </option>
                                    <option value="Subt">Subteniente                </option>
                                    <option value="Subof My">Suboficial Mayor           </option>
                                    <option value="Subof Pr">Suboficial Principal       </option>
                                    <option value="Sarg Ay">Sargento Ayudante          </option>
                                    <option value="Sarg 1ro">Sargento 1ro               </option>
                                    <option value="Sarg">Sargento                   </option>
                                    <option value="Cbo 1ro">Cabo 1ro                   </option>
                                    <option value="Cbo Art. 11">Cabo Art. 11               </option>
                                    <option value="Cbo">Cabo                       </option>
                                    <option value="Sol Vol 1ra">Soldado Voluntario 1ra     </option>
                                    <option value="Sol Vol 2da">Soldado Voluntario 2da     </option>
                                    <option value="Sol Vol 2da EC">Soldado Voluntario 2da "EC"</option>
                                    <option value="Subof My Cad">Suboficial Mayor Cadete    </option>
                                    <option value="Subof Pr Cad">Suboficial Principal Cadete</option>
                                    <option value="Sarg Ay cad">Sargento Ayudate Cadete    </option>
                                    <option value="Sarg 1ro cad">Sargento 1ro Cadete        </option>
                                    <option value="Sarg Cad">Sargento Cadete            </option>
                                    <option value="Cbo 1ro Cad">Cabo 1ro Cadete            </option>
                                    <option value="Cbo cad">Cabo Cadete                </option>
                                    <option value="Cad Prof">Cad Profesional            </option>
                                    <option value="Cad Vto Año">Cadete Vto Año             </option>
                                    <option value="Cad IVto Año">Cadete IVto Año            </option>
                                    <option value="Cad IIIe Año">Cadete IIIer Año           </option>
                                    <option value="Cad IIdo Año">Cadete IIdo Año            </option>
                                    <option value="Cad Ier Año">Cadete Ier Año             </option>  
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var5b2 - ARMA/SERVICIO/ESPECIALIDAD>
                        <div class="row">
                            <div class="col-3">
                                <label for="var5b2">Arma/Servicio/<br>Especialidad</label>
                            </div>
                            <div class="col-9">
                                <select class="form-control" id="var5b2" name="var5b2">
                                          <option value="I">Infanteria           </option>
                                    <option value="C">Caballeria           </option>
                                    <option value="Ing">Ingenieros           </option>
                                    <option value="Com">Comunicaciones       </option>
                                    <option value="Ars">Arsenales            </option>
                                    <option value="Int">Intendencia          </option>
                                    <option value="A  ">Aartilleria          </option>
                                    <option value="SCD">SCD                  </option>
                                    <option value="Aud">Auditor              </option>
                                    <option value="Pil Ej">Piloto Ejercito      </option>
                                    <option value="Educ Fis">Educacion Fisica     </option>
                                    <option value="Mus">Musico               </option>
                                    <option value="Dir Bda ">Director de Banda    </option> 
                                    <option value="Med">Medico               </option>
                                    <option value="Vet">Veterinario          </option>
                                    <option value="Cond Mot">Conductor Motorista  </option>
                                    <option value="Tal">Talabartero          </option>
                                    <option value="Baq">Baqueano             </option>
                                    <option value="Zap">Zapatero             </option>
                                    <option value="Sas">Sastre               </option>
                                    <option value="Ofic">Oficinista           </option>
                                    <option value="Coc">Cocinero             </option>
                                    <option value="Enf">Enfermero            </option>
                                    <option value="Enf Vet">Enfermero Veterinario</option>
                                    <option value="Enf Prof">Enfermero Profesional</option>
                                    <option value="Mec Inf">Mecanico Informatico </option>
                                    <option value="Mec Mot Rda">Mecanico Mot Rda     </option>
                                    <option value="Mec Mot Elec">Mecanico Mot Elec    </option>
                                    <option value="Mec Mot Oruga">Mecanico Mot Oruga   </option>
                                    <option value="Mec Arm">Mecanico Arm         </option>
                                    <option value="Mec Mun Expl">Mecanico Mun Expl    </option>
                                    <option value="Mec A">Mecanico A           </option>
                                    <option value="Mec Inst">Mecanico Inst        </option>
                                    <option value="Mec Ing ">Mecanico Ing         </option>
                                    <option value="Mec Av  ">Mecanico Av          </option>
                                    <option value="Mec Op Apar Pr">Mecanico Op Apar Pr  </option>
                                    <option value="Mec Eq Camp">Mecanico Eq Camp     </option>
                                    <option value="Mec Eq Fij">Mecanico Eq Fij      </option>
                                    <option value="Mec de Radar">Mecanico de Radar    </option>
                                    <option value="Cam ">Camarero             </option>
                                    <option value="Carp">Carpintero           </option>
                                    <option value="Herr">Herrero              </option>
                                    <option value="Aux Enf">Auxiliar Enfermeria  </option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato Seleccionado VALIDO</li>
                                </div>
                            </div>
                        </div>
                        <!-var5b3 - NOMBRE>
                        <div class="row">
                            <div class="col-3">
                                <label for="var5b3">Nombre</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="var5b3" name="var5b3" placeholder="Inserte el Nombre del Testigo 2"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte el Nombre del Testigo 2</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var5b4 - APELLIDO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var5b4">Apellido</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="var5b4" name="var5b4" placeholder="Inserte el Apellido del Testigo 2"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte el Apellido del Testigo 2</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var5b5 - EDAD>
                        <div class="row">
                            <div class="col-3">
                                <label for="var5b5">Edad</label>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control opacity" id="var5b5" name="var5b5" placeholder="Inserte la Edad del Testigo 2" required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Edad Testigo 2</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var5b6 - DNI>
                        <div class="row">
                            <div class="col-3">
                                <label for="var5b6">DNI</label>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control opacity" id="var5b6" name="var5b6" placeholder="Inserte el DNI del Testigo 2" required>
                                <div class="invalid-feedback">
                                    <li>Inserte el DNI del Testigo 2</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <!-PREGUNTAS AL TESTIGO 2>
                    <div class="container-fluid">
                        <p align="center"><strong>Preguntas al Causante</strong></p>
                        <!-var5c1 - PREG 1>
                        <div class="row">
                            <div class="col-1">
                                <label for="var5c1">
                                    <strong>1.</strong>
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Tiene conocimiento de la afeccion/lesion que padece el causante y desde cuando por la cual se ha iniciado la presente Informacion?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var5c1" name="var5c1" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var5c2 - PREG 2>
                        <div class="row">
                            <div class="col-1">
                                <label for="var5c2">
                                    <strong>2.</strong>
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Que sintomas observa u observo de la afeccion/lesion que padece?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var5c2" name="var5c2" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var5c3 - PREG 3>
                        <div class="row">
                            <div class="col-1">
                                <label for="var5c3">
                                    <strong>3.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                Al conocer su afeccion/lesion ¿Se hiso atender por el servicio Medico de su unidad?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-3">
                                <select  class="form-control" id="var5c3" name="var5c3" required>
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                            <div class="col-8">
                                <select  class="form-control" id="var5c3a" name="var5c3a" required>
                                    <option value=""></option>
                                    <option value="Seccion Sanidad">Seccion Sanidad               </option>
                                    <option value="Hospital Militar Central">Hospital Militar Central      </option>
                                    <option value="Hospital Militar Campo de Mayo">Hospital Militar Campo de Mayo</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var5c4 - PREG 4>
                        <div class="row">
                            <div class="col-1">
                                <label for="var5c4">
                                    <strong>4.</strong> 
                                </label>
                            </div>
                            <div class="col-11">
                                 ¿Se le brindo la correspondiente asistencia Medica?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-3">
                                <select  class="form-control" id="var5c4" name="var5c4" required>
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var5c5 - PREG 5>
                        <div class="row">
                            <div class="col-1">
                                <label for="var5c5">
                                    <strong>5.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Considera que la afeccion/lesion del causante se produjo en ACTOS DEL SERVICIO?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-3">
                                <select  class="form-control" id="var5c5" name="var5c5" required>
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var5c6 - PREG 6>
                        <div class="row">
                            <div class="col-1">
                                <label for="var5c6">
                                    <strong>6.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                ¿Tiene algo que agregar, quitar o enmendar a esta Declaracion?
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var5c6" name="var5c6" placeholder="Inserte la Rpta"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                        <!-var5c7 - PREG 7>
                        <div class="row">
                            <div class="col-1">
                                <label for="var5c7">
                                    <strong>7.</strong>  
                                </label>
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var5c8" name="var5c8" placeholder="Inserte la Pregunta">
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <input type="text" class="form-control" id="var5c7" name="var5c7" placeholder="Inserte la Rpta">
                                <div class="invalid-feedback">
                                    <li>Inserte la Rpta</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                    </div>
                </div>  
<!-             CONCLUSIONES                                                                                   ->
                <div class="tab-pane fade active show" id="s6" role="tabpanel" aria-labelledby="list-settings-list">
                    <h5 align="center"><strong>CONCLUSIONES</strong></h5>

                    <!-AFECCION/LESION DEL CAUSANTE>
                    <div class="container-fluid">
                        <p align="center"><strong>Afeccion/Lesion Causante</strong></p>
                        <!-var6a1 - AFECCION/LESION>
                        <div class="row">
                            <div class="col-3">
                                <label for="var6a1">Afeccion/Lesion</label>
                            </div>
                            <div class="col-9">
                               <input type="text" class="form-control" id="var6a1" name="var6a1" placeholder="Inserte la Afeccion/Lesion"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Afeccion/Lesion</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var6a2 - CAUSA DE AFECCION/LESION>
                        <div class="row">
                            <div class="col-3">
                                <label for="var6a2">Causa de Afeccion/Lesion</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="var6a2" name="var6a2" placeholder="Inserte la Causa"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte la Causa</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var6a3 - OBRAN ANTECEDENTES>
                        <div class="row">
                            <div class="col-3">
                                <label for="var6a3">Obran Antecedentes</label>
                            </div>
                            <div class="col-9">
                               <select  class="form-control" id="var6a3" name="var6a3" required>
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var6a4 - ACTOS DEL SERVICIO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var6a4">Actos del Servicio</label>
                            </div>
                            <div class="col-9">
                               <select  class="form-control" id="var6a4" name="var6a4" required>
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var6a5 - ASISTENCIA MEDICA EN EL MOMENTO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var6a5">Asistencia Medica en el Momento</label>
                            </div>
                            <div class="col-9">
                               <select  class="form-control" id="var6a5" name="var6a5" required>
                                    <option value="NO">NO</option>
                                    <option value="SI">SI</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <!ASISTIO AL CAUSANTE>
                    <div class="container-fluid">
                        <p align="center"><strong>Asistio al Causante</strong></p>
                        <!-var6b1 - GRADO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var6b1">Grado</label>
                            </div>
                            <div class="col-9">
                               <select  class="form-control" id="var6b1" name="var6b1" required>
                                 <option value="Cap">Capitan                    </option>
                                    <option value="Tte 1ro">Teniente 1ro               </option>
                                    <option value="Subt">Subteniente                </option>
                                    <option value="Subof My">Suboficial Mayor           </option>
                                    <option value="Subof Pr">Suboficial Principal       </option>
                                    <option value="Sarg Ay">Sargento Ayudante          </option>
                                    <option value="Sarg 1ro">Sargento 1ro               </option>
                                    <option value="Sarg">Sargento                   </option>
                                    <option value="Cbo 1ro">Cabo 1ro                   </option>
                                    <option value="Cbo Art. 11">Cabo Art. 11               </option>
                                    <option value="Cbo">Cabo                       </option>
                                    <option value="Sol Vol 1ra">Soldado Voluntario 1ra     </option>
                                    <option value="Sol Vol 2da">Soldado Voluntario 2da     </option>
                                    <option value="Sol Vol 2da EC">Soldado Voluntario 2da "EC"</option>
                                    <option value="Subof My Cad">Suboficial Mayor Cadete    </option>
                                    <option value="Subof Pr Cad">Suboficial Principal Cadete</option>
                                    <option value="Sarg Ay cad">Sargento Ayudate Cadete    </option>
                                    <option value="Sarg 1ro cad">Sargento 1ro Cadete        </option>
                                    <option value="Sarg Cad">Sargento Cadete            </option>
                                    <option value="Cbo 1ro Cad">Cabo 1ro Cadete            </option>
                                    <option value="Cbo cad">Cabo Cadete                </option>
                                    <option value="Cad Prof">Cad Profesional            </option>
                                    <option value="Cad Vto Año">Cadete Vto Año             </option>
                                    <option value="Cad IVto Año">Cadete IVto Año            </option>
                                    <option value="Cad IIIe Año">Cadete IIIer Año           </option>
                                    <option value="Cad IIdo Año">Cadete IIdo Año            </option>
                                    <option value="Cad Ier Año">Cadete Ier Año             </option>    
                               </select>
                               <div class="valid-feedback">
                                   <li>Dato seleccionado VALIDO.</li>
                               </div>
                            </div>
                        </div>
                        <!-var6b2 - ARMA/SERVICIO/ESPECIALIDAD>
                        <div class="row">
                            <div class="col-3">
                                <label for="var6b2">Arma/Servicio/<br>Especialidad</label>
                            </div>
                            <div class="col-9">
                                <select class="form-control" id="var6b2" name="var6b2">
                                          <option value="I">Infanteria           </option>
                                    <option value="C">Caballeria           </option>
                                    <option value="Ing">Ingenieros           </option>
                                    <option value="Com">Comunicaciones       </option>
                                    <option value="Ars">Arsenales            </option>
                                    <option value="Int">Intendencia          </option>
                                    <option value="A  ">Aartilleria          </option>
                                    <option value="SCD">SCD                  </option>
                                    <option value="Aud">Auditor              </option>
                                    <option value="Pil Ej">Piloto Ejercito      </option>
                                    <option value="Educ Fis">Educacion Fisica     </option>
                                    <option value="Mus">Musico               </option>
                                    <option value="Dir Bda ">Director de Banda    </option> 
                                    <option value="Med">Medico               </option>
                                    <option value="Vet">Veterinario          </option>
                                    <option value="Cond Mot">Conductor Motorista  </option>
                                    <option value="Tal">Talabartero          </option>
                                    <option value="Baq">Baqueano             </option>
                                    <option value="Zap">Zapatero             </option>
                                    <option value="Sas">Sastre               </option>
                                    <option value="Ofic">Oficinista           </option>
                                    <option value="Coc">Cocinero             </option>
                                    <option value="Enf">Enfermero            </option>
                                    <option value="Enf Vet">Enfermero Veterinario</option>
                                    <option value="Enf Prof">Enfermero Profesional</option>
                                    <option value="Mec Inf">Mecanico Informatico </option>
                                    <option value="Mec Mot Rda">Mecanico Mot Rda     </option>
                                    <option value="Mec Mot Elec">Mecanico Mot Elec    </option>
                                    <option value="Mec Mot Oruga">Mecanico Mot Oruga   </option>
                                    <option value="Mec Arm">Mecanico Arm         </option>
                                    <option value="Mec Mun Expl">Mecanico Mun Expl    </option>
                                    <option value="Mec A">Mecanico A           </option>
                                    <option value="Mec Inst">Mecanico Inst        </option>
                                    <option value="Mec Ing ">Mecanico Ing         </option>
                                    <option value="Mec Av  ">Mecanico Av          </option>
                                    <option value="Mec Op Apar Pr">Mecanico Op Apar Pr  </option>
                                    <option value="Mec Eq Camp">Mecanico Eq Camp     </option>
                                    <option value="Mec Eq Fij">Mecanico Eq Fij      </option>
                                    <option value="Mec de Radar">Mecanico de Radar    </option>
                                    <option value="Cam ">Camarero             </option>
                                    <option value="Carp">Carpintero           </option>
                                    <option value="Herr">Herrero              </option>
                                    <option value="Aux Enf">Auxiliar Enfermeria  </option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato Seleccionado VALIDO</li>
                                </div>
                            </div>
                        </div>
                        <!-var6b3 - NOMBRE>
                        <div class="row">
                            <div class="col-3">
                                <label for="var6b3"></label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="var6b3" name="var6b3" placeholder="Inserte el Nombre"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte el Nombre quien Asistio al Causante</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div>
                        <!-var6b4 - APELLIDO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var6b4">Apellido</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="var6b4" name="var6b4" placeholder="Inserte el Apellido"  required>
                                <div class="invalid-feedback">
                                    <li>Inserte el Apellido quien Asistio al Causante</li>
                                </div>
                                <div class="valid-feedback">
                                    <li>Datos Insertado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <!- FECHA>
                    <div class="container-fluid">
                        <p align="center"><strong>FECHA</strong></p>
                        <!-var6c1 - MES>
                        <div class="row">
                            <div class="col-3">
                                <label for="var6c1">Mes</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var6c1" name="var6c1" required>
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
                        <!-var6c2 - AÑO>
                        <div class="row">
                            <div class="col-3">
                                <label for="var6c2">Año</label>
                            </div>
                            <div class="col-9">
                                <select  class="form-control" id="var6c2" name="var6c2" required>
                                    <option value="2018">2018 </option>
                                    <option value="2019">2019 </option>
                                    <option value="2020">2020</option>
                                </select>
                                <div class="valid-feedback">
                                    <li>Dato seleccionado VALIDO.</li>
                                </div>
                            </div>
                        </div><br>
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
                                        <button type="button" class="btn btn-primary" onclick=" location.href='index.html' ">
                                            Si, Cancelar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Imprimir
                        </button><br><br>
                    </div>
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