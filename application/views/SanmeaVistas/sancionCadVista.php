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
<form action="downloadSancionCad" class="needs-validation" method="get" novalidate>
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
                    <h5><strong>Sancion Disciplinaria<br>CADETES</strong></h5></a>
                </label>
            </div>

        </nav>
    </div>  

    <div class="row">

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" align="center">

            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="lis-s1" data-toggle="list" href="#s1" role="tab" aria-controls="home">
                    Datos Infractor
                </a>
                <a class="list-group-item list-group-item-action" id="list-s2" data-toggle="list" href="#s2" role="tab" aria-controls="profile">
                    Sancion Disciplinaria
                </a>
                <a class="list-group-item list-group-item-action" id="list-s3" data-toggle="list" href="#s3" role="tab" aria-controls="messages">
                    Impuesto por
                </a>
                <a class="list-group-item list-group-item-action" id="list-s4" data-toggle="list" href="#s4" role="tab" aria-controls="settings">
                    Enterado Infractor
                </a>
            </div>

        </div>
  
        <div class="col">

            <div class="tab-content" id="nav-tabContent">

<!-             DATOS DEL INFRACTOR                                                                             ->
                <div class="tab-pane fade show active" id="s1" role="tabpanel" aria-labelledby="list-home-list">

                    <h4 align="center"><br>DATOS DEL INFRACTOR</h4><br>
                    <!-1ER VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var11">DNI</label>
                        </div>

                        <div class="col-9">
                            <input type="number" class="form-control opacity" id="valdni" name="valdni" placeholder="Inserte el DNI" required>
                            <div class="invalid-feedback">
                                <li>Inserte el DNI del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-2DA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var12">Apellido</label>
                        </div>

                        <div class="col-9">

                            <input type="text" class="form-control" id="valap" name="valap" placeholder="Inserte el Apellido" required>
                            <div class="invalid-feedback">
                                <li>Inserte el Apellido del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-3ER VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var13">Nombre</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" id="valnom" placeholder="Inserte el Nombre" name="valnom" required>
                            <div class="invalid-feedback">
                                <li>Inserte el Nombre del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-4TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var14">Grado</label>
                        </div>

                        <div class="col-9">
                            <select  class="form-control" name="valgrad1" id="grad1" required>
                                <option value="Subof My Cad">Subof My Cad</option>
                                <option value="Subof Pr Cad">Subof Pr Cad</option>
                                <option value="Sarg Ay cad">Sarg Ay Cad</option>
                                <option value="Sarg 1ro cad">Sarg 1ro Cad</option>
                                <option value="Sarg Cad">Sarg Cad</option>
                                <option value="Cbo 1ro Cad">Cbo 1ro Cad</option>
                                <option value="Cbo Cad<">Cbo Cad</option>
                                <option value="Cad Prof">Cad Prof</option>
                                <option value="Cad Vto año">Cad Vto año</option>
                                <option value="Cad IVto año">Cad IVto año</option>
                                <option value="Cad IIIe año">Cad IIIer año</option>
                                <option value="Cad IIdo año">Cad IIdo año</option>
                                <option value="Cad Ier año">Cad Ier año</option>   

                            </select>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-5TO VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var15">Arma/Servicio/<br>Especialidad</label>
                        </div>

                        <div class="col-9">
                            <select class="form-control" name="valase1" id="valase1">

                                <option value="Infanteria">Infanteria</option>
                                <option value="Caballeria/">Caballeria</option>
                                <option value="Ingenieros/">Ingenieros</option>
                                <option value="Comunicaciones">Comunicaciones</option>
                                <option value="Arsenales">Arsenales</option>
                                <option value="Intendencia">Intendencia</option>
                                <option value="Artilleria">Artilleria</option>
                                <option value="SCD">SCD</option>
                                <option value="Auditor">Auditor</option>
                                <option value="Piloto">Piloto</option>
                                <option value="Educ Fis">Educ Fis</option>
                                <option value="Musico">Musico</option>
                                <option value="Medico">Medico</option>
                                <option value="Veterinario">Veterinario</option>
                                <option value="Enfermero Prof">Enfermero Profesional</option>

                            </select>
                            <div class="valid-feedback">
                                <li>Dato Seleccionado VALIDO</li>
                            </div>
                        </div>
                    </div>
                    <!-6TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="valdest">Destino Interno</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" id="valdest" name="valdest" placeholder="Inserte el Destino Interno" name="valdest" required>
                            <div class="invalid-feedback">
                                <li>Inserte el Destino Interno del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div><br>
                </div>

<!-             SANCION DISCPLINARIA                                                                            ->
                <div class="tab-pane fade" id="s2" role="tabpanel" aria-labelledby="list-profile-list">

                    <h4 align="center"><br>SANCION DISCIPLINARIA</h4><br>
                    <!-1RA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var21">Fecha Comisión Falta</label>
                        </div>
                        <div class="col-9">
                             <input type="date" class="form-control" id="valfs" name="valfs" placeholder="Fecha" required>
                            <div class="invalid-feedback">
                                <li>Seleccione la Fecha de la Sancion.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-2DA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var22">Reg Actuacion Disciplinaria</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control" name="RegDis" id="RegDis">

                                <option>Art. 4027 (Falta Leve)</option>
                                <option>Art. 4027 (Falta Grave)</option>

                            </select>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-3RA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var23">Inciso</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control" name="IncDic" id="IncDic">

                                <option>Inc. 1</option>
                                <option>Inc. 2</option>
                                <option>Inc. 3</option>
                                <option>Inc. 4</option>
                                <option>Inc. 5</option>
                                <option>Inc. 6</option>
                                <option>Inc. 7</option>
                                <option>Inc. 8</option>
                                <option>Inc. 9</option>
                                
                                <option>Inc. 10</option>
                                <option>Inc. 11</option>
                                <option>Inc. 12</option>
                                <option>Inc. 13</option>
                                <option>Inc. 14</option>
                                <option>Inc. 15</option>
                                <option>Inc. 16</option>
                                <option>Inc. 17</option>
                                <option>Inc. 18</option>
                                <option>Inc. 19</option>
                                 
                                <option>Inc. 20</option>
                                <option>Inc. 21</option>
                                <option>Inc. 22</option>
                                <option>Inc. 23</option>
                                <option>Inc. 24</option>
                                <option>Inc. 25</option>
                                <option>Inc. 26</option>
                                <option>Inc. 27</option>
                                <option>Inc. 28</option>
                                <option>Inc. 29</option>
                                 
                                <option>Inc. 30</option>
                                <option>Inc. 31</option>
                                <option>Inc. 32</option>
                                <option>Inc. 33</option>
                                <option>Inc. 34</option>
                                <option>Inc. 35</option>
                                <option>Inc. 36</option>
                                <option>Inc. 37</option>
                                <option>Inc. 38</option>
                                <option>Inc. 39</option>
                                
                                <option>Inc. 40</option>
                                <option>Inc. 41</option>
                                <option>Inc. 42</option>
                                <option>Inc. 43</option>
                                <option>Inc. 44</option>
                                <option>Inc. 45</option>
                                <option>Inc. 46</option>
                                <option>Inc. 47</option>
                                <option>Inc. 48</option>
                                <option>Inc. 49</option>
                                
                                <option>Inc. 50</option>
                                <option>Inc. 51</option>
                                <option>Inc. 52</option>
                                <option>Inc. 53</option>
                                <option>Inc. 54</option>
                                <option>Inc. 55</option>
                                <option>Inc. 56</option>
                                <option>Inc. 57</option>
                                <option>Inc. 58</option>
                                <option>Inc. 59</option>
                                
                                <option>Inc. 60</option>
                                <option>Inc. 61</option>
                                <option>Inc. 62</option>
                                <option>Inc. 63</option>
                                <option>Inc. 64</option>
                                <option>Inc. 65</option>
                                <option>Inc. 66</option>
                                <option>Inc. 67</option>
                                <option>Inc. 68</option>
                                <option>Inc. 69</option>      

                                <option>Inc. 70</option>
                                <option>Inc. 71</option>    

                            </select>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-4TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var24">Motivo</label>
                        </div>
                        <div class="col-9">
                            <textarea class="form-control" rows="5" id="motivo" name="motivo" placeholder="Inserte el Motivo" required></textarea>    
                
                            <div class="invalid-feedback">
                                <li>Inserte el Motivo de la Sancion</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-5TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var25">Tipo de Sancion</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control"  name="tipoSancionSelect" id="tipoSancionSelect" >

                                <option>Apercibimiento</option>
                                <option>Arresto</option>

                            </select>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-6TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var26">Duracion</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control" name="duracionSelect" id="duracionSelect">

                                <option>1 (UN) DIA</option>
                                <option>2 (DOS) DIAS</option>
                                <option>3 (TRES) DIAS</option>
                                <option>4 (CUATRO) DIAS</option>
                                <option>5 (CINCO) DIAS</option>
                                <option>6 (SEIS) DIAS</option>
                                <option>7 (SIETE) DIAS</option>
                                <option>8 (OCHO) DIAS</option>
                                <option>9 (NUEVE) DIAS</option>
                                <option>10 (DIEZ) DIAS</option>
                                <option>11 (ONCE) DIAS</option>
                                <option>12 (DOCE) DIAS</option>
                                <option>13 (TRECE) DIAS</option>
                                <option>14 (CATORCE) DIAS</option>
                                <option>15 (QUINCE) DIAS</option>
                                <option>16 (DIECISEIS) DIAS</option>
                                <option>17 (DIESIETE) DIAS</option>
                                <option>18 (DIECIOCHO) DIAS</option>
                                <option>19 (DIECINUEVE) DIAS</option>
                                <option>20 (VEINTE) DIAS</option>
                                <option>21 (VEINTIUNO) DIAS</option>
                                <option>22 (VEINTIDOS) DIAS</option>
                                <option>23 (VEINTITRES) DIAS</option>
                                <option>24 (VEINTICUATRO) DIAS</option>
                                <option>25 (VIENTICINCO) DIAS</option>
                                <option>26 (VEINTISEIS) DIAS</option>
                                <option>27 (VEINTISIETE) DIAS</option>
                                <option>28 (VEINTIOCHO) DIAS</option>
                                <option>29 (VEINTINUEVE) DIAS</option>
                                 
                            </select>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-7MA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var27">lugar de Cumplimiento</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="valdest" name="valdest" placeholder="Inserte el Lugar de Cumplimiento" required>
                            <div class="invalid-feedback">
                                <li>Inserte el Lugar de Cumplimiento</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div><br>
                </div>


<!-             AUTORIDAD QUE IMPONE LA SANCION                                                                 ->
                <div class="tab-pane fade" id="s3" role="tabpanel" aria-labelledby="list-messages-list">
                    <h4 align="center"><br>AUTORIDAD QUE IMPONE LA SANCION</h4><br>
                    <div class="row">
                        <div class="col-3">
                            <label for="var31">DNI</label>
                        </div>
                        <div class="col-9">
                            <input type="number" class="form-control" id="valdniAuto" name="valdniAuto" placeholder="Inserte el DNI" required>
                            <div class="invalid-feedback">
                                <li>Inserte el DNI del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-1RA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var32">Apellido</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" id="apeAuto" name="apeAuto" placeholder="Inserte el Apellido" required>
                            <div class="invalid-feedback">
                                <li>Inserte el Apellido del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-2DA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var33">Nombre</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" id="nomAuto" name="nomAuto" placeholder="Inserte el Nombre"  required>
                            <div class="invalid-feedback">
                                <li>Inserte el Nombre del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="var34">Grado</label>
                        </div>
                        <!-3RA VARIABLE->
                        <div class="col-9">
                            <select  class="form-control" name="valgradAuto" id="valgradAuto" required>
                                <option value="Tte Gral "> Tte Gral</option>
                                <option value="Gral Div "> Gral Div</option>
                                <option value="Gral Br  "> Gral Br </option>
                                <option value="Cnel     "> Cnel    </option>
                                <option value="Tcnl     "> Tcnl    </option>
                                <option value="My       "> My      </option>
                                <option value="Cap      "> Cap     </option>
                                <option value="Tte 1ro  "> Tte 1ro </option>
                                <option value="Tte      "> Tte     </option>
                                <option value="Subt     "> Subt    </option>      

                            </select>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-4TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var35">Cargo</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control" name="valCargoAuto"  id="valCargoAuto" required>
                                <option>Dir CMN                     </option>
                                <option>Subdir y JEM CMN            </option>
                                <option>J Agr Bas CMN               </option>
                                <option>J Agr Cso(s) y Serv(s) CMN  </option>
                                <option>J Agr Mont CMN              </option>
                                <option>J Agr Esp(s) CMN            </option>
                                <option>J Agr Apy CMN               </option>
                                <option>J BA CMN                    </option>
                                <option>J BI CMN                    </option>
                                <option>J Ca 1er Año A, B y C       </option>
                                <option>J Ca Cpo Prof               </option>
                                <option>J Ca Int CMN                </option>
                                <option>J Ca Ars CMN                </option>
                                <option>J Ca Ing CMN                </option>
                                <option>J Esc C CMN                 </option>
                                <option>J 1ra Ca I                  </option>
                                <option>J 2da Ca I                  </option>   

                            </select>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-5TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            
                        </div>
                        <div class="col-9">
                            
                        </div>
                    </div><br>
                </div>
<!-             ENTERADO DEL INFRACTOR                                                                          ->
                <div class="tab-pane fade" id="s4" role="tabpanel" aria-labelledby="list-settings-list">
                    <h4 align="center"><br>ENTERADO DEL INFRACTOR</h4><br>
                    <!-1RA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var41">Lugar y Fecha</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="vallyf" name="vallyf" placeholder="Inserte Lugar y Fecha" required>
                            <div class="invalid-feedback">
                                <li>Inserte el lugar y la Fecha del enterado.</li>
                            </div>
                            <div class="valid-feedback">
                                <li>Dato seleccionado VALIDO.</li>
                            </div>
                        </div>
                    </div>
                    <!-2DA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var42">Fecha de Cumplimiento</label>
                        </div>
                        <div class="col-9">
                            <input type="date" class="form-control" id="valFchCumpl" name="valFchCumpl" placeholder="Inserte Lugar y Fecha" required>
                            <div class="invalid-feedback">
                                <li>Inserte la Fecha de Cumplimiento</li>
                            </div>
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
        <!--Sripts Necesarios para el estilo de la pagina-->
    </body>
</html>