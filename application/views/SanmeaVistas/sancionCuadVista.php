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
<form action="downloadSancionCuad" class="needs-validation" method="get" novalidate>
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
                    <h5><strong>Sancion Disciplinaria<br></strong></h5></a>
                </label>
            </div>

        </nav>
    </div>  

    <div class="row">

        <div  class="col-sm-3 col-md-3 col-lg-3 col-xl-3" align="center">

            <div class="position-fixed" class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action" id="lis-s1"  href="#s1">
                    Datos Infractor
                </a>
                <a class="list-group-item list-group-item-action" id="list-s2" href="#s2">
                    Sancion Disciplinaria
                </a>
                <a class="list-group-item list-group-item-action" id="list-s3" href="#s3">
                    Impuesto por
                </a>
                <a class="list-group-item list-group-item-action" id="list-s4" href="#s4">
                    Enterado Infractor
                </a>
            </div>

        </div>
  
        <div class="col">

            <div class="tab-content" id="nav-tabContent">

<!-             DATOS DEL INFRACTOR                                                                             ->
                <div class="tab-pane fade show active"  id="s1" role="tabpanel" aria-labelledby="list-home-list">

                     <h4 align="center"><br>DATOS DEL INFRACTOR</h4>
                    <!-1RA VARIABLE->
                    <div class="row">
                        <div class="col-3" id="ss1">
                            <label for="var11">DNI</label>
                        </div>
                        <div class="col-9">
                                <input type="text" class="form-control" id="valdniCuad" name="valdniCuad" placeholder="Inserte el DNI" onkeypress=" return isNumber(event)" onpaste="return false" minlength="8" maxlength="8" required>

                                <div class="invalid-feedback" >
                                    <li>Seleccione el dni</li>
                                </div>
                                <div class="valid-feedback">
                                </div>
                            </div>
                    </div>

                    <!-2DA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var12">Apellido</label>
                        </div>
                        <div class="col-9">
                             <input type="text" class="form-control" id="valapCuad" name="valapCuad" onkeypress="return texto(event)" onpaste="return false" size="20" maxlength="20"placeholder="Inserte el Apellido" required>
                            <div class="invalid-feedback">
                                <li>Inserte el Apellido del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>

                    <!-3RA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var13">Nombre</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" id="valnomCuad" name="valnomCuad" onkeypress="return texto(event)" onpaste="return false" size="20" maxlength="20" placeholder="Inserte el Nombre"  required>
                            <div class="invalid-feedback">
                                <li>Inserte el Nombre del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>

                    <!-4TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var14">Grado</label>
                        </div>

                        <div class="col-9">
                            <select  class="form-control" name="valgrad1Cuad" id="valgrad1Cuad" required>
                                <option value=""        ></option>
                                <option value="TG"        >Teniente General</option>
                                <option value="GD"        >General de División</option>
                                <option value="GB"        >General de Brigada </option>
                                <option value="CR"        >Coronel</option>
                                <option value="TC"        >Teniente Coronel</option>
                                <option value="My"        >Mayor</option>
                                <option value="CT"        >Capitán</option>
                                <option value="TP"        >Teniente Primero</option>
                                <option value="TT"        >Teniente</option>      
                                <option value="ST"        >Subteniente</option>
                                <option value="SM"        >Suboficial Mayor</option>
                                <option value="SP"        >Suboficial Principal</option>
                                <option value="SA"        >Sargento Ayudante</option>
                                <option value="SI"        >Sargento Primero</option>
                                <option value="SG"        >Sargento</option>
                                <option value="CI"        >Cabo Primero</option>   
                                <option value="CB"        >Cabo</option>
                                <option value="CBArt11"   >Cabo Articulo 11</option>
                                <option value="VP"        >Soldado Voluntario Primera</option>
                                <option value="VS"        >Soldado Voluntario Segunda</option>
                                <option value="VSEC"      >Soldado Voluntario Segunda "EC"</option>
                                <option value="SM Cd"      >Suboficial Mayor Cadete</option>
                                <option value="SP Cd"      >Suboficial Principal Cadete</option>
                                <option value="SA Cd"      >Sargento Ayudante Cadete</option>
                                <option value="SI Cd"      >Sargento 1ro Cadete</option>
                                <option value="SG Cd"      >Sargento Cadete</option>
                                <option value="CI Cd"      >Cabo 1ro Cadete</option>
                                <option value="CB Cd<"     >Cabo Cadete</option>
                                <option value="Cd Prof"    >Cadete Profesional</option>
                                <option value="Cd IVto Año" >Cadete IVto Año</option>
                                <option value="Cd IIIer Año" >Cadete IIIer Año</option>
                                <option value="Cd IIdo Año" >Cadete IIdo Año</option>
                                <option value="Cd Ier Año"  >Cadete Ier Año</option> 
                                <option value="Ap IIdo Año" >Aspirante IIdo Año</option>
                                <option value="Ap Ier Año"  >Aspirante Ier Año</option>
                                <option value="DG"        >Dragoneante</option>     
                            </select>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>
                    <!-5TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var15">Arma/Servicio/<br>Especialidad</label>
                        </div>

                        <div class="col-9">
                            <select class="form-control" name="valase1Cuad" id="valase1Cuad">

                                <option value=""               ></option>
                                <option value="I              ">Infanteria</option>
                                <option value="C             ">Caballeria</option>
                                <option value="A              ">Artilleria</option>
                                <option value="Ing           ">Ingeniero</option>
                                <option value="Com            ">Comunicaciones</option> 
                                <option value="Ars            ">Arsenales</option>
                                <option value="Int            ">Intendencia</option>
                                <option value="Pil            ">Piloto</option>
                                <option value="Médico         ">Médico</option>
                                <option value="Odontologo      ">Odonólogo</option>
                                <option value="Bioquimico     ">Bioquímico</option>
                                <option value="Farmaceútico   ">Farmacéutico</option>
                                <option value="Vet            ">Veterinario</option>
                                <option value="Enf Vet        ">Enfermero Veterinario</option>
                                <option value="Auditor        ">Auditor</option>
                                <option value="SCD            ">Sistema de Computación de Datos</option>
                                <option value="Educ Fis        ">Educación Física</option>
                                <option value="Dir Ban         ">Director de Banda</option>
                                <option value="Mus            ">Músico</option>
                                <option value="Enf            ">Enfermero</option>
                                <option value="Enf Gral        ">Enfermero General</option>
                                <option value="Ofi            ">Oficinista</option>
                                <option value="Baq            ">Baqueano</option>
                                <option value="Cam            ">Camarero</option>
                                <option value="Sas            ">Sastre</option>
                                <option value="Coc            ">Cocinero </option>
                                <option value="Mec Arm         ">Mecánico Armero</option>
                                <option value="Cond Mot        ">Conductor Motorista</option>
                                <option value="Mec Ing         ">Mecánico Ingeniero</option>   
                                <option value="Mec Mot Rue      ">Mecánico Motorista a Rueda</option>
                                <option value="Mec Rad         ">Mecánico Radar</option>
                                <option value="Mec Eq Fij       ">Mecánico en Equipo Fijo </option>
                                <option value="Mec A           ">Mecánico Artillero</option>
                                <option value="Mec Mot Or       ">Mecánico Motorista a Oruga</option>
                                <option value="Mec Info         ">Mecánico de Informática</option>
                                <option value="Mec Mun Exp      ">Mecánico en Munición y Explosivo </option> 
                                <option value="Mec Op Ap     ">Mecánico Óptico y Aparatos de Precisió</option>
                                <option value="Mec Eq Cam       ">Mecánico en Equipo de Campaña</option>
                                <option value="Mec Inst Fij      ">Mecánico en Instalaciones Fíjas </option>
                                <option value="Mec Mot Elect    ">Mecánico Motorista Electricista </option>
                                <option value="Mec Av          ">Mecánico de Aviación</option>
                            </select>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>
                    <!-6TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="valdest">Destino Interno</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" id="valdestCuad" name="valdestCuad" placeholder="Inserte el Destino Interno" name="valdest" required>
                            <div class="invalid-feedback">
                                <li>Inserte el Destino Interno del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                            </div>

                        </div>
                    </div>

<!-             SANCION DISCPLINARIA                                                                            ->
                <div class="tab-pane fade active show" id="s2" class="position-fixed" >

                    <h4 id="ss2" align="center">SANCION DISCIPLINARIA</h4>
                    <!-1RA VARIABLE->
                    <div class="row" class=""  role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="col-3">
                            <label for="var21">Fecha Sancion</label>
                        </div>
                        <div class="col-9" >
                            <input type="date" class="form-control" id="fch" name="fch" placeholder="Seleccione la Fecha de la Sancion." required>
                            <div class="invalid-feedback">
                                <li>Seleccione la Fecha de la Sancion.</li>
                            </div>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>
                    <!-2DA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var22">Reg Actuacion Disciplinaria</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control" name="RegDisCuad" id="RegDisCuad">

                                <option>Art. 9 (Falta Leve)</option>
                                <option>Art. 10 (Falta Grave)</option>
                                <option>Art. 11 (Falta Grave CE)</option>

                            </select>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>
                    <!-3RA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var23">Inciso</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control" name="IncDicCuad" id="IncDicCuad">

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
                            </div>
                        </div>
                    </div>
                    <!-4TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var24">Motivo</label>
                        </div>
                        <div class="col-9">
                            <textarea class="form-control" rows="3" id="motivoCuad" name="motivoCuad" placeholder="Inserte el Motivo" required></textarea>    
                
                            <div class="invalid-feedback">
                                <li>Inserte el Motivo de la Sancion</li>
                            </div>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>
                    <!-5TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var25">Tipo de Sancion</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control" name="tipoSancionSelectCuad" id="tipoSancionSelectCuad">

                                <option>Apercibimiento</option>
                                <option>Arresto Simple</option>
                                <option>Arresto Riguroso</option>

                            </select>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>
                    <!-6TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var26">Duracion</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control" name="duracionSelectCuad" id="duracionSelectCuad">

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
                            <div class="validfeedback-">
                            </div>
                        </div>
                    </div>
                    <!-7MA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var27">lugar de Cumplimiento</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="valdestCuad2" name="valdestCuad2" placeholder="Inserte el Lugar de Cumplimiento" required>
                            <div class="invalid-feedback">
                                <li>Inserte el Lugar de Cumplimiento</li>
                            </div>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>


<!-             AUTORIDAD QUE IMPONE LA SANCION                                                                 ->
                <div class="tab-pane fade active show" id="s3">
                    <h4 id="ss4" align="center">AUTORIDAD QUE IMPONE LA SANCION</h4>
                    <!-1RA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var31">DNI</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="valdniAutoCuad" name="valdniAutoCuad" placeholder="Inserte el DNI" onkeypress=" return isNumber(event)" onpaste="return false" minlength="8" maxlength="8" required>
                            <div class="invalid-feedback">
                                <div class="minlength"> verifique longitud </div>
                                <li>Inserte el DNI del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>
                    <!-2DA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var32">Apellido</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" id="apeAutoCuad" name="apeAutoCuad" onkeypress="return texto(event)" onpaste="return false" size="20" maxlength="20"
                            placeholder="Inserte el Nombre" required>

                            <div class="invalid-feedback">
                                <li>Inserte el Apellido del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>
                    <!-3RA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var33">Nombre</label>
                        </div>

                        <div class="col-9">
                            <input type="text" class="form-control" id="nomAutoCuad" name="nomAutoCuad" onkeypress="return texto(event)" onpaste="return false" size="20" maxlength="20"
                            placeholder="Inserte el Nombre"  required>
                            <div class="invalid-feedback">
                                <li>Inserte el Nombre del Infractor.</li>
                            </div>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>
                    <!-4TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var34">Grado</label>
                        </div>

                        <div class="col-9">
                            <select  class="form-control" name="valgradAutoCuad" id="valgradAutoCuad" required>
                                <option value=""        ></option>
                                <option value="TG"        >Teniente General</option>
                                <option value="GD"        >General de División</option>
                                <option value="GB"        >General de Brigada </option>
                                <option value="CR"        >Coronel</option>
                                <option value="TC"        >Teniente Coronel</option>
                                <option value="My"        >Mayor</option>
                                <option value="CT"        >Capitán</option>
                                <option value="TP"        >Teniente Primero</option>
                                <option value="TT"        >Teniente</option>      
                                <option value="ST"        >Subteniente</option>
                                <option value="SM"        >Suboficial Mayor</option>
                                <option value="SP"        >Suboficial Principal</option>
                                <option value="SA"        >Sargento Ayudante</option>
                                <option value="SI"        >Sargento Primero</option>
                                <option value="SG"        >Sargento</option>
                                <option value="CI"        >Cabo Primero</option>   
                                <option value="CB"        >Cabo</option>
                                <option value="CBArt11"   >Cabo Articulo 11</option>

                            </select>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>
                    <!-4TA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var35">Cargo</label>
                        </div>
                        <div class="col-9">
                            <input  type="text" class="form-control" name="valCargoAutoCuad"  id="valCargoAutoCuad" placeholder="Inserte el cargo" required>
                            
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>


<!-             ENTERADO DEL INFRACTOR                                                                          ->
                <div class="tab-pane fade active show" id="s4" aria-labelledby="list-settings-list">
                    <h4 align="center">ENTERADO DEL INFRACTOR</h4>
                    <!-1RA VARIABLE->
                    <div class="row" id="ss4">
                        <div class="col-3">
                            <label for="var41">Lugar y Fecha</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="vallyfCuad" name="vallyfCuad" placeholder="Inserte Lugar y Fecha" required>
                            <div class="invalid-feedback">
                                <li>Inserte el lugar y la Fecha del enterado.</li>
                            </div>
                            <div class="valid-feedback">
                            </div>
                        </div>
                    </div>
                    <!-2DA VARIABLE->
                    <div class="row">
                        <div class="col-3">
                            <label for="var42">Fecha de Cumplimiento</label>
                        </div>
                        <div class="col-9">
                            <input type="date" class="form-control" id="valFchCumplCuad" name="valFchCumplCuad" placeholder="Inserte Lugar y Fecha" required>
                            <div class="invalid-feedback">
                                <li>Inserte la Fecha de Cumplimiento</li>
                            </div>
                            <div class="valid-feedback">
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