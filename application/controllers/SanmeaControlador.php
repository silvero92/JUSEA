<?php
/* @property phpword_model $phpword_model */
include_once(APPPATH."third_party/PhpWord/Autoloader.php");
include_once(APPPATH."third_party/PhpWord/PhpWord.php");

 use PhpOffice\PhpWord\Autoloader;
 //use PhpOffice\PhpWord\Settings;
 Autoloader::register();
 //Settings::loadConfig();

class SanmeaControlador extends CI_Controller {

	function __construct(){
	  	parent::__construct();
      $this->load->model('JuseaModelo');
	}

	function index()
	{
		//$data['news'] = $this->phpword_model->get_news();
		//$this->load->view('content/phpwordView');
		 $this->load->view('SanmeaVistas/VistaIndex');
		  
		//  $data['contenido']='content/index';
  // 		$this->load->view('templateView',$data);
	}
  function encabezado(){

    $data['encabezado']=$this->JuseaModelo->leerEncabezado();

    $this->load->view('SanmeaVistas/Encabezado',$data);
  }

 function sancionCad(){
  	$this->load->view('SanmeaVistas/sancionCadVista');
  }

   function sancionCuad(){
  	$this->load->view('SanmeaVistas/sancionCuadVista');
  }

   function NotaObjeto(){
  	$this->load->view('SanmeaVistas/NotaObjetoVista');
  }

   function ActaEnf(){
  	$this->load->view('SanmeaVistas/InfoAccEnfVista');
  }
	
	function BienyEstado(){
  	$this->load->view('SanmeaVistas/BienyEstadoVista');
  }

  function Prueba(){
  	$this->load->view('SanmeaVistas/PruebaVista');
  }



  function sancionCuad2(){
  	$this->load->view('SanmeaVistas/sancionCuadVista2');
  }
  /*function sancionCuad2(){
  	$this->load->view('SanmeaVistas/Encabezado');
  }
*/

  function historialSanciones(){
    $this->load->view('SanmeaVistas/HistorialVista');
  }
  //funciones encabezado
  public function getUnidad()
  {
    $query = $this->db->query("select unidad from encabezado limit 1");

    $row = $query->row();

    if (isset($row))
    {
      return $row->valor;
    }   
  }
  public function getMembrete()
  {
    $query = $this->db->query("select membrete from encabezado limit 1");

    $row = $query->row();

    if (isset($row))
    {
      return $row->valor;
    }   
  }
  public function getAño()
  {
    $query = $this->db->query("select año from encabezado limit 1");

    $row = $query->row();

    if (isset($row))
    {
      return $row->valor;
    }   
  }


//fin funciones encabezado
//funciones para almacenar sanciones en la base de datos//
 function guardarInfractor(){
  $data = array(
  'nombre' => $this->input->get('valnomCuad'),
  'apellido' => $this->input->get('valapCuad'),
  'dni'=> $this->input->get('valdniCuad'),
    'grado'=> $this->input->get('valgrad1Cuad'),
    'armaespecialidad'=> $this->input->get('valase1Cuad'),
    'destinoInterno' => $this->input->get('valdestCuad'), 
    'situacion' => 2
    );
  $this->JuseaModelo->insertarInfractor($data );
}
function guardarInstructor(){
  $data = array(
  'nombre' => $this->input->get('nomAutoCuad'),
  'apellido' => $this->input->get('apeAutoCuad'),
  'dni'=> $this->input->get('valdniAutoCuad'),
    'grado'=> $this->input->get('valgradAutoCuad'),
    'armaespecialidad'=> "",
    'destinoInterno' => $this->input->get('valCargoAutoCuad'), 
    'situacion' => 1
    );
  $this->JuseaModelo->insertarInstructor($data );
}
function guardarInfraccion(){
  $data = array(
  'fechaComision' => $this->input->get('fch'),
  'regActDis' => $this->input->get('RegDisCuad'),
  'inciso'=> $this->input->get('IncDicCuad'),
    'motivo'=> $this->input->get('motivoCuad'),
    'tipoSancion'=>$this->input->get('tipoSancionSelectCuad'),
    'duracion' => $this->input->get('duracionSelectCuad'), 
    'lugarCumplimiento' => $this->input->get('valdestCuad2')
    );
  $this->JuseaModelo->insertarInfraccion($data );
}

	public function downloadSancionCad()  {
		$this->guardarInfractor();
    $this->guardarInstructor();
    $this->guardarInfraccion();
    $this->JuseaModelo->insertarSancion();


		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$filename = 'test.docx';
		//ejemplo de como cambiar las propiedades de las secciones
		$sectionStyle=array(
			'marginTop' =>816,
			'marginBottom'=>509,
			'marginLeft'=>911,
			'marginRight'=>680,
			'spaceBefore' => 0,
			'spaceAfter' => 0
		);

		/*function siguiente()
                        // Oculta s1 y muestra s2
                                {
                                    $('#s1').removeClass().addClass('tab-pane fade');
                                    $('#s2').addClass('tab-pane fade active show');
                                }
                                */
		//SECCION
		$sectionB = $phpWord->addSection($sectionStyle);
		//Estilos de fuentes
		$fuenteStyle1 = array('size' => 16, 'bold' => true, 'italic'=> true);
		$fuenteStyle2 = array('size' => 9, 'bold' => false, 'italic'=> true);
		$fuenteStyle3 = array('size' => 14, 'bold' => false, 'italic'=> true);
		$fuenteStyle4 = array('size' => 12, 'bold' => true);
		//Configuraciones del parrafo
		$configParrafo = array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
		$configParrafoTabla=array('align' => 'right', 'spaceAfter' => 0);
		//Estilo del tabla
		$estiloTabla1 = array('borderSize' => 6, 'borderColor' => '999999');		
//------------------------------------------------------TABLA1-----------------------------------------------------/////
		//se agrega un estilo de la tabla
		$phpWord->addTableStyle('tabla1',$estiloTabla1,$configParrafoTabla);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//-**********************************                     SECCION 2        *****************************************************//

// //linea 1

$estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);

$textrun = $sectionB->addTextRun($estiloParrafoH1);
$textrun->addText('   Ejército Argentino           ',$fuenteStyle1);
$textrun->addText('');
$textrun->addText($this->getMembrete(),$fuenteStyle2,$estiloParrafoH1);

$sectionB->addText($this->getUnidad(),$fuenteStyle3,$estiloParrafoH1);
$sectionB ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 
$sectionB->addText('ANEXO 1 (PLANILLA IMPOSICIÓN DIRECTA DE SANCIÓN DISCIPLINARIA)',$fuenteStyle4,$estiloParrafoH1);
$sectionB ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 

//ESTILO DE LA TABLA 

$bordeTabla = array('borderSize' => 12, 'borderColor' => '000000','cellMargin'  => 50);

$nombreStilo = 'tablaSancionEstilo';

$estiloFondoGris = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '848484');

$estiloCeldas = array('valign' => 'center');

$estiloCeldasBtlr = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::VALIGN_CENTER);

$estiloFuenteTabla1 = array('bold' => true);

$estiloFuenteTabla2 = array('name'=> 'arial','size' => 10,'align' => 'center');

$centrarTexto = array('valign' => 'center','spaceAfter' => 0,'spaceBefore' => 0);

$phpWord->addTableStyle('tablaSancionEstilo',$centrarTexto);

$table = $sectionB->addTable('tablaSancionEstilo');


//-----------------------------------------------------------------------------------------------------------

//Estilos celdas Principal
$estiloGris = 		array('vMerge' => 'restart','bgColor' => 'e6e6e6','borderSize' => 12, 'borderColor' => '000000','valign'=>'center');
$estiloGrisAmplio=  array('vMerge' => 'restart','gridSpan' => 6,'bgColor' => 'e6e6e6','borderSize' => 12, 'borderColor' => '000000','valign'=>'center');
$estiloCeldaEstandar=array('vMerge' => 'restart','valign' => 'center');

$row->addCell(500, $bordeizquierdoF7)->addText('5',$espaciadoF2,$centrarTextoCol);
$row->addCell(1000, $estiloFirma28)->addText('  FIRMA  ',$centrarTextoCol);
$row->addCell(3000, $estiloFila286)->addText('');
$row->addCell(3000, $estiloFirma28)->addText('  ACLARACION  ',$centrarTextoCol);
$row->addCell(3000, $estiloFila28)->addText('');



///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//=========================================== guardamos el texto en un archivo ========================================================
//--------------------------------------------------------------------------------------------------------------------------------------
///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
//

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save($filename);
// Download the file:
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment;filename=temp_.docx');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($filename));
ob_clean();
flush();
$status = readfile($filename);
unlink($filename);
exit;

	}

///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//=========================================== 								 ========================================================
//--------------------------------------------------------------------------------------------------------------------------------------
///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################



public function FuncionNotaObjeto(){

			$phpWord = new \PhpOffice\PhpWord\PhpWord();
			$filename = 'testNota.docx';
	

//ejemplo de como cambiar las propiedades de las secciones 
$sectionStyle=array(
	'marginTop' =>816,
	'marginBottom'=>509,
	'marginLeft'=>911,
	'marginRight'=>680,
	'spaceBefore' => 0,
	'spaceAfter' => 0,
	'headerHeight'=>100
);

//secciones que tomo para realizar pruebas de codigo y la seccionA queda como definicda
		//$sectionA = $phpWord->addSection($sectionStyle);
		$sectionB = $phpWord->addSection($sectionStyle);

//Estilos de fuentes
		$fuenteStyle1 = array('size' => 16, 'bold' => true, 'italic'=> true);
		$fuenteStyle2 = array('size' => 9, 'bold' => false, 'italic'=> true);
		$fuenteStyle3 = array('size' => 14, 'bold' => false, 'italic'=> true);
		$fuenteStyle4 = array('size' => 12, 'bold' => false,'name'=>'Times New Roman');
		$fuenteStyle5 = array('size' => 12, 'bold' => true,  'name'=>'Times New Roman');
		$fuenteStyle6 = array('size' => 9, 'bold' => false);
	
//Configuraciones del parrafo
		$configParrafo = array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
		$configParrafoTabla=array('align' => 'right', 'spaceAfter' => 0);

//Estilo del tabla
		$estiloTabla1 = array('borderSize' => 6, 'borderColor' => '999999');

///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//=========================================== VARIABLES ========================================================
//--------------------------------------------------------------------------------------------------------------------------------------

$membreteNota = $this->input->get('membreteNota');
$ExpLetraNota= $this->input->get('ExpLetraNota');
$expNumNota= $this->input->get('expNumNota');

$gradoNota= $this->input->get('gradoNota');
$ArmaNota= $this->input->get('ArmaNota');
$apeNota= $this->input->get('apeNota');
$nomNota= $this->input->get('nomNota');

$grado2Nota= $this->input->get('grado2Nota');
$Arma2Nota= $this->input->get('Arma2Nota');
$ape2Nota= $this->input->get('ape2Nota');
$nom2Nota= $this->input->get('nom2Nota');
$dni2NOTA= $this->input->get('dni2NOTA');
$FchNota= $this->input->get('FchNota');
$ELEVO2Nota= $this->input->get('ELEVO2Nota');

$diaNota= $this->input->get('var41');
$mesNota= $this->input->get('var42');
$anioNota= $this->input->get('var43');

//convertir en mayuscula
$apeNota=strtoupper($apeNota);
$ape2Nota=strtoupper($ape2Nota);
$nomNota=strtoupper($nomNota);
$ArmaNota=strtoupper($ArmaNota);
$gradoNota=strtoupper($gradoNota);

///echo date($FchNota);

//$dia= date("l");
$dia1=substr($FchNota,-2,3);
$anio=substr($FchNota,0,4);
$mes=substr($FchNota,5,2);

switch ($mes) {
    case 1:
        $mes1="enero";
        break;
    case 2:
         $mes1="febrero";
        break;
    case 3:
         $mes1="marzo";
        break;
    case 4:
         $mes1="abril";
        break;
    case 5:
         $mes1="mayo";
        break;
    case 6:
         $mes1="junio";
        break;
    case 7:
         $mes1="julio";
        break;
    case 8:
         $mes1="agosto";
        break;
    case 9:
         $mes1="setiembre";
        break;
    case 10:
         $mes1="octubre";
        break;
    case 11:
         $mes1="noviembre";
        break;
    case 12:
         $mes1="diciembre";
        break;
}

$FchNota = 


///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
//

// //linea 1

$header=$sectionB->addHeader();
$header->addImage('img/circuloNO.png',array('width'=>100,'height'=>100,'marginTop'=>-1,'marginLeft'=>55,'wrappingSyte'=>'infront','align'=>'right'));

$estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
$estiloParrafoH2=array('align' => 'right', 'spaceBefore' => 0,'spaceAfter' => 0);
$textrun = $sectionB->addTextRun($estiloParrafoH1);
$textrun->addText('   Ejército Argentino                  ',$fuenteStyle1);
$textrun->addText('');
$textrun->addText($this->getAño(),' ',$this->getMembrete(),$fuenteStyle2,$estiloParrafoH1);

$sectionB->addText($this->getUnidad(),$fuenteStyle3,$estiloParrafoH1);
$sectionB ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 
$sectionB->addText('C.E. Letra '.$ExpLetraNota.' Nro '.$expNumNota,$fuenteStyle4,$estiloParrafoH2);
$sectionB ->addText(' ',$fuenteStyle3,$estiloParrafoH1);
$sectionB ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 
$sectionB ->addText('AL '.$gradoNota.' DE '.$ArmaNota.' '.$apeNota.' '.$nomNota,$fuenteStyle5,$estiloParrafoH1); 
$sectionB ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 
$sectionB ->addText('			'.$ELEVO2Nota.' a usted el presente expediente relacionado con la afección que padece el '.$grado2Nota. ' de '.$Arma2Nota.'   '.$ape2Nota.' '.$nom2Nota.' (DNI: '.$dni2NOTA.' ) perteneciente a este Instituto; a los efectos que proceda a instruir la Información correspondiente conforme lo determinado en el Art 34 de la Reglamentación para el Ejército de la Ley 14.777 (Ex Ley para el Personal Militar) Tomo IV “Retiros y Pensiones”. ',$fuenteStyle4,$estiloParrafoH1); 
$sectionB ->addText(' ',$fuenteStyle3,$estiloParrafoH1);
$sectionB ->addText('			Asimismo comunico a Ud que para la tramitación de los presentes actuados deberá arbitrar los medios necesarios a fin de coadyuvar con la mayor celeridad posible. ',$fuenteStyle4,$estiloParrafoH1);
$sectionB ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 
$sectionB ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 
$sectionB ->addText('		EL PALOMAR, '.$diaNota.' de '.$mesNota.' de '.$anioNota,$fuenteStyle4,$estiloParrafoH2); 

$sectionB->addImage('img/rectanguloNO.png',array('width'=>100,'height'=>250,'marginTop'=>-1,'marginLeft'=>55,'wrappingSyte'=>'infront'));
 


///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//=========================================== guardamos el texto en un archivo ========================================================
//--------------------------------------------------------------------------------------------------------------------------------------
///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
//

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save($filename);
// Download the file:
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment;filename=temp_.docx');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($filename));
ob_clean();
flush();
$status = readfile($filename);
unlink($filename);
exit;

}


/* End of file dashboard.php */
/* Location: ./system/application/modules/matchbox/controllers/dashboard.php */





	public function downloadSancionCuad()  {
    
    $this->guardarInfractor();
    $this->guardarInstructor();
    $this->guardarInfraccion();
    $this->JuseaModelo->insertarSancion();		
		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$filename = 'test.docx';
		//ejemplo de como cambiar las propiedades de las secciones 
		$sectionStyle=array(
			'marginTop' =>816,
			'marginBottom'=>509,
			'marginLeft'=>911,
			'marginRight'=>680,
			'spaceBefore' => 0,
			'spaceAfter' => 0
		);
		//SECCION
		$sectionB = $phpWord->addSection($sectionStyle);
		//Estilos de fuentes
		$fuenteStyle1 = array('size' => 16, 'bold' => true, 'italic'=> true);
		$fuenteStyle2 = array('size' => 9, 'bold' => false, 'italic'=> true);
		$fuenteStyle3 = array('size' => 14, 'bold' => false, 'italic'=> true);
		$fuenteStyle4 = array('size' => 12, 'bold' => true);
		//Configuraciones del parrafo
		$configParrafo = array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
		$configParrafoTabla=array('align' => 'right', 'spaceAfter' => 0);
		//Estilo del tabla
		$estiloTabla1 = array('borderSize' => 6, 'borderColor' => '999999');		
//------------------------------------------------------TABLA1-----------------------------------------------------/////
		//se agrega un estilo de la tabla
		$phpWord->addTableStyle('tabla1',$estiloTabla1,$configParrafoTabla);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//-**********************************                     SECCION 2        *****************************************************//

// //linea 1

$estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);

$textrun = $sectionB->addTextRun($estiloParrafoH1);
$textrun->addText('   Ejército Argentino           ',$fuenteStyle1);
$textrun->addText('');
$textrun->addText($this->getAño(),' ',$this->getMembrete(),$fuenteStyle2,$estiloParrafoH1);

$sectionB->addText($this->getUnidad(),$fuenteStyle3,$estiloParrafoH1);
$sectionB ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 
$sectionB->addText('ANEXO 1 (PLANILLA IMPOSICIÓN DIRECTA DE SANCIÓN DISCIPLINARIA)',$fuenteStyle4,$estiloParrafoH1);
$sectionB ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 

//ESTILO DE LA TABLA 

$bordeTabla = array('borderSize' => 12, 'borderColor' => '000000','cellMargin'  => 50);

$nombreStilo = 'tablaSancionEstilo';

$estiloFondoGris = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '848484');

$estiloCeldas = array('valign' => 'center');

$estiloCeldasBtlr = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::VALIGN_CENTER);

$estiloFuenteTabla1 = array('bold' => true);

$estiloFuenteTabla2 = array('name'=> 'arial','size' => 10,'align' => 'center');

$centrarTexto = array('valign' => 'center','spaceAfter' => 0,'spaceBefore' => 0);



$phpWord->addTableStyle('tablaSancionEstilo',$centrarTexto);

$table = $sectionB->addTable('tablaSancionEstilo');


//-----------------------------------------------------------------------------------------------------------

//Estilos celdas Principal
$estiloGris = 		array('vMerge' => 'restart','bgColor' => 'e6e6e6','borderSize' => 12, 'borderColor' => '000000','valign'=>'center');
$estiloGrisAmplio=  array('vMerge' => 'restart','gridSpan' => 6,'bgColor' => 'e6e6e6','borderSize' => 12, 'borderColor' => '000000','valign'=>'center');
$estiloCeldaEstandar=array('vMerge' => 'restart','valign' => 'center');

///###################################################################################################################
///###################################################################################################################
///###################################################################################################################
// ------------------------------------------------------------------------------------------------------------------
//====================================        DATOS DEL INFRACTOR      ================================================
//--------------------------------------------------------------------------------------------------------------------
///###################################################################################################################
///###################################################################################################################
///###################################################################################################################


//VARIABLES
	//.----------------------DATOS DEL INFRACTOR----------------------------------//

        $armaInfractor= $this->input->get('valase1Cuad');
		$nomInfractor = $this->input->get('valnomCuad');
		$apeInfractor = $this->input->get('valapCuad');
        $destinoInfrator = $this->input->get('valdestCuad');
        $dniInfractor= $this->input->get('valdniCuad');
        $gradoInfractor= $this->input->get('valgrad1Cuad');
       	$fchInfractor= $this->input->get('fch');



//---------------------------------------------------------------------------------//

$unSoloEstilo= array('vMerge' => 'restart','borderSize' =>6, 'borderColor' => '000000','cellMargin'  => 350,'valign'=>'center');
$unSoloEstilo2= array('vMerge' => 'restart','gridSpan' => 1,'borderSize' => 6, 'borderColor' => '000000','valign'=>'center');

$bordeizquierdo=array('vMerge' => 'restart','borderSize' => 6, 'borderColor' => '000000','borderLeftSize'=>18,'valign'=>'center');

//Estilos celdas Principal
$estiloGris = 		array('vMerge' => 'restart','bgColor' => 'e6e6e6','borderSize' => 18, 'borderColor' => '000000','cellMargin'  => 350,'valign'=>'center');
$estiloGrisAmplio=  array('vMerge' => 'restart','gridSpan' => 9,'bgColor' => 'e6e6e6','borderSize' => 18, 'borderColor' => '000000','cellMargin'  => 350,'valign'=>'center');

$estiloGris1 = array ('vMerge' => 'continue','bgColor' => 'e6e6e6','borderSize' =>20, 'borderColor' => '000000','valign'=>'center');

//---------------------------------------------------

//DATOS
$centrarTextoCol = array('align' => 'center','spaceAfter' => 0,'spaceBefore' => 0);
$IZQTextoCol = array('align' => 'left','spaceAfter' => 0,'spaceBefore' => 0);


//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 1-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
$row = $table->addRow(340);
$row->addCell(2200,$estiloGris)->addText('A',array('align' =>'center','bold' => true),$centrarTextoCol);
$row->addCell(10000,$estiloGrisAmplio)->addText('DATOS DEL INFRACTOR',array('align' =>'center','bold' => true),$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 2-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$estilogrado = array('vMerge' => 'restart','gridSpan' =>2,'borderSize' => 6, 'borderColor' => '000000','valign'=>'center');
$espaciadoF2= array('valign'=>'center');
$espaciadoF2IZQ=array('valign'=>'left');
$estilogradoDer = array('vMerge' => 'restart','gridSpan' => 5,'borderSize' => 6, 'borderColor' => '000000','borderRightSize'=>18,'valign'=>'center');


$row = $table->addRow(340);

$row->addCell(2200,$bordeizquierdo)->addText('1',$espaciadoF2,$centrarTextoCol);

$row->addCell(1000,$unSoloEstilo2)->addText(' GRADO',$espaciadoF2IZQ,$IZQTextoCol);
$row->addCell(1000,$unSoloEstilo2)->addText(' '.$gradoInfractor,$espaciadoF2,$centrarTextoCol);

$row->addCell(1000,$estilogrado)->addText(' ARMA / SERVICIO / ESPECIALIDAD',$espaciadoF2IZQ,$IZQTextoCol);
$row->addCell(100000,$estilogradoDer)->addText(' '.$armaInfractor,$espaciadoF2IZQ,$IZQTextoCol);



//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 3-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$estiloFila3 = array('vMerge' => 'restart','gridSpan' => 2,'borderSize' => 6, 'borderColor' => '000000','valign'=>'center');
$estiloFila3_1=array('vMerge' => 'restart','gridSpan' => 7,'borderSize' => 6, 'borderColor' => '000000','valign'=>'center','borderRightSize'=>18);

$row = $table->addRow(340);

$row->addCell(1000, $bordeizquierdo)->addText('2',$espaciadoF2,$centrarTextoCol);

$row->addCell(1000,$estiloFila3)->addText('  APELLIDO Y NOMBRES',$espaciadoF2IZQ,$IZQTextoCol);

$row->addCell(100000, $estiloFila3_1)->addText(' '.$apeInfractor.', '.$nomInfractor,$espaciadoF2IZQ,$IZQTextoCol);



//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila4-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%


$estiloFila4 = array('vMerge' => 'restart','gridSpan' => 2,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000');
$estiloDNI = array('vMerge' => 'restart','borderSize' => 4,'valign'=>'center', 'borderColor' => '000000');
$estiloFila4Ultima = array('vMerge' => 'restart','gridSpan' => 2,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000');


$estiloDNIzq = array('vMerge' => 'restart','gridSpan' => 4,'borderSize' => 6, 'borderColor' => '000000','valign'=>'center','borderRightSize'=>18);

$espaciadoF2= array();


$row = $table->addRow(340);

$row->addCell(1000, $bordeizquierdo)->addText('3',$espaciadoF2,$centrarTextoCol);

$row->addCell(1000, $estiloFila4)->addText('  DESTINO INTERNO',$espaciadoF2IZQ,$IZQTextoCol);

$row->addCell(7000, $estiloFila4Ultima)->addText(' '.$destinoInfrator,$espaciadoF2IZQ,$IZQTextoCol);

$row->addCell(2000, $unSoloEstilo)->addText('  DNI',$espaciadoF2IZQ,$IZQTextoCol);


$row->addCell(8000, $estiloDNIzq)->addText(' '.$dniInfractor,$espaciadoF2IZQ,$IZQTextoCol);
//$row->addCell(null, array('vMerge' => 'restart'))->addText('B');

///###################################################################################################################
///###################################################################################################################
///###################################################################################################################
// ------------------------------------------------------------------------------------------------------------------
//=========================================     CAMPO SANCION     ====================================================
//--------------------------------------------------------------------------------------------------------------------
///###################################################################################################################
///###################################################################################################################
///###################################################################################################################


//////////////////////////////////////-----------------------VARIABLES DE CAMPO SANCION ----------------////////////////////////

$fchSancion= $this->input->get('fch');
$RegAct= $this->input->get('RegDisCuad');
$IncDic= $this->input->get('IncDicCuad');
$motSancionComent= $this->input->get('motivoCuad');
$tipoSancionSelect=$this->input->get('tipoSancionSelectCuad');
$elementoSelect=$this->input->get('elementoSelect');
$duracionSancionSelect=$this->input->get('duracionSelectCuad');
$lugarCumplSancion = $this->input->get('valdestCuad2');

$dia = substr($fchSancion,8,8);
$mess =substr($fchSancion,4,4);
$anio = substr($fchSancion,0,4);
switch ($mess) {
    case "-01-":
        $mess = "Enero";
        break;
    case "-02-":
        $mess = "Febrero";
        break;
    case "-03-":
        $mess = "Marzo";
        break;
    case "-04-":
        $mess = "Abril";
        break;
    case "-05-":
        $mess = "Mayo";
        break;
    case "-06-":
        $mess = "Junio";
        break;
    case "-07-":
        $mess = "Julio";
        break;
    case "-08-":
        $mess = "Agosto";
        break;
    case "-09-":
        $mess = "Septiembre";
        break;
    case "-10-":
        $mess = "Octubre";
        break;
    case "-11-":
        $mess = "Noviembre";
        break;
    case "-12-":
        $mess = "Diciembre";
        break;    
}

$fchSancion = $dia. " de " .$mess. " de " .$anio;



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 5-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(340);

$row->addCell(500, $estiloGris)->addText('B',array('align' =>'center','bold' => true),$centrarTextoCol);
$row->addCell(10000,$estiloGrisAmplio)->addText('SANCIÓN DISCIPLINARIA',array('align' =>'center','bold' => true),$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 6-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(340);

$estiloFila6 = array('vMerge' => 'restart','gridSpan' => 2,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000');
$estiloFila6_1=array('vMerge' => 'restart','gridSpan' => 7,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderRightSize'=>18);

$row->addCell(500, $bordeizquierdo)->addText('1',$espaciadoF2,$centrarTextoCol);
$row->addCell(1000, $estiloFila6)->addText('FECHA COMISION FALTA',$espaciadoF2,$centrarTextoCol);
$row->addCell(5000, $estiloFila6_1)->addText($fchSancion,$espaciadoF2IZQ,$IZQTextoCol);


//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 7-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(40);

$bordeizquierdoF7=array('vMerge' => 'restart','borderSize' => 6, 'borderColor' => '000000','borderLeftSize'=>18,'valign'=>'center','borderBottomSize'=>18);
$estiloFila7 = array('vMerge' => 'restart','gridSpan' => 3,'borderSize' => 6, 'borderColor' => '000000','valign'=>'center','borderBottomSize'=>18);
$estiloFila7_1 = array('vMerge' => 'restart','gridSpan' => 1,'borderSize' => 6, 'borderColor' => '000000','valign'=>'center','borderBottomSize'=>18);

$row->addCell(50,$bordeizquierdoF7)->addText('2',$espaciadoF2,$centrarTextoCol);
$row->addCell(1200,$estiloFila7 )->addText('RÉGIMEN DE ACTUACIÓN DISCIPLINARIA',$espaciadoF2,$centrarTextoCol);
$row->addCell(500,$estiloFila7_1 )->addText($RegAct,$espaciadoF2,$centrarTextoCol);

$estiloINC = array('vMerge' => 'restart','gridSpan' => 5,'borderSize' => 6, 'borderColor' => '000000','borderRightSize'=>18,'valign'=>'center','borderBottomSize'=>18);

$row->addCell(400,$estiloINC)->addText($IncDic,$espaciadoF2,$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 8-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(40);


$estiloFila8 = array('vMerge' => 'restart','gridSpan' => 2 ,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000');

$estiloFila8Cont = array('vMerge' => 'restart','gridSpan' => 7,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderRightSize'=>18);

$row->addCell(50, $bordeizquierdo)->addText('3',$espaciadoF2,$centrarTextoCol);


//creamos una tabla dentro de la seccionA 
//$cell 		= $sectionA->addTable()->addRow()->addCell(300);
//dentro de la celda agregamos un campo de texto
//$textbox 	=  $cell -> addTextBox($estiloCampoTexto1);

// $textbox -> addText('textbox dentro de la tabla');

$celdaMotivoSansion = $row->addCell(1000, $estiloFila8);

$lineStyle = array('weight' => 1, 'width' => 60, 'height' => 0, 'color' => 00000);

$texto = $celdaMotivoSansion->addText('MOTIVO DE LA SANCION',$espaciadoF2,$centrarTextoCol);
//$linea = $celdaMotivoSansion->addLine($lineStyle);
//$linea= $row->addLine(4000, $estiloFila8);
//$linea2 = $celdaMotivoSansion->addLine($lineStyle);


$row->addCell(10000,$estiloFila8Cont)->addText($motSancionComent,$espaciadoF2,$centrarTextoCol);


//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 9-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$unSoloEstiloContinue= array('vMerge' => 'continue','borderSize' => 6, 'borderColor' => '000000','cellMargin'  => 50,'valign'=>'center','borderLeftSize'=>18);
$estiloFila9Cont = array('vMerge' => 'continue','gridSpan' => 9,'borderSize' => 6, 'borderColor' => '000000','valign'=>'center','borderRightSize'=>18);

$estiloRestarF9=array('vMerge' => 'restart','gridSpan' => 2,'borderSize' => 0, 'borderColor' => 'FFFFFF','valign'=>'center','borderRightSize'=>'0.00000000001','cellMargin'  => 0);
$estiloFila9Cont1 = array('vMerge' => 'continue','gridSpan' => 3,'borderSize' => 6, 'borderColor' => 'FFFFFF','valign'=>'center','borderRightSize'=>18);

$estiloFila9Cont2 = array('vMerge' => 'continue','gridSpan' => 6,'borderSize' => 6,'valign'=>'center','borderRightSize'=>18);

$row = $table->addRow(20);
$row->addCell(20, $unSoloEstiloContinue)->addText('3',$espaciadoF2,$centrarTextoCol);
//$row->addCell(null, array('gridSpan' => 2,'vMerge' => 'restart'));
$row->addCell(40, $estiloRestarF9)->addText('',$espaciadoF2,$centrarTextoCol);

$row->addCell(50, $estiloFila9Cont1)->addText('',$espaciadoF2,$centrarTextoCol);

$row->addCell(50, $estiloFila9Cont2)->addText('',$espaciadoF2,$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 10-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(20);
$row->addCell(20, $unSoloEstiloContinue)->addText('');
$row->addCell(120, $estiloFila9Cont )->addText($motSancionComent,$espaciadoF2,$centrarTextoCol);


//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 11-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
$row = $table->addRow(20);
$row->addCell(20, $unSoloEstiloContinue)->addText('');
$row->addCell(10, $estiloFila9Cont )->addText('');

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 12-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(20);
$row->addCell(20, $unSoloEstiloContinue)->addText('');
$row->addCell(10, $estiloFila9Cont )->addText('');

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 13-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(20);
$row->addCell(20, $unSoloEstiloContinue)->addText('');
$row->addCell(10, $estiloFila9Cont )->addText('');

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 14-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(10);
$row->addCell(20,$unSoloEstiloContinue)->addText('');
$row->addCell(10, $estiloFila9Cont )->addText('');

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 15-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow();
$row->addCell(20, $unSoloEstiloContinue)->addText('');
$row->addCell(10, $estiloFila9Cont )->addText('');

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 16-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(20);
$row->addCell(20, $unSoloEstiloContinue)->addText('');
$row->addCell(10, $estiloFila9Cont )->addText('');

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 17-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(10);


$estiloTIPO = array('vMerge' => 'restart','gridSpan' => 1,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000');
$estiloApercib=array('vMerge' => 'restart','gridSpan' => 2,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000');
$estiloDura=array('vMerge' => 'restart','gridSpan' => 1,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000');
$estiloDuraVar=array('vMerge' => 'restart','gridSpan' => 5,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderRightSize'=>18);

$row->addCell(20, $bordeizquierdo)->addText('4',$espaciadoF2,$centrarTextoCol);

$row->addCell(10, $estiloTIPO)->addText('TIPO',$espaciadoF2,$centrarTextoCol);

$row->addCell(10,$estiloApercib)->addText(' '.$tipoSancionSelect,$espaciadoF2,$centrarTextoCol);


$row->addCell(20, $estiloDura)->addText('DURACION',$espaciadoF2,$centrarTextoCol);


$row->addCell(80, $estiloDuraVar)->addText(' '.$duracionSancionSelect,$espaciadoF2,$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 18-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(10);

$estiloLugarCumpl = array('vMerge' => 'restart','gridSpan' => 2,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000');

$estiloLugarCumplEsp=array('vMerge' => 'restart','gridSpan' => 7,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderRightSize'=>18);

$row->addCell(10,$bordeizquierdo)->addText('5',$espaciadoF2,$centrarTextoCol);
$row->addCell(10, $estiloLugarCumpl)->addText('LUGAR DE CUMPLIMIENTO',$espaciadoF2,$centrarTextoCol);
$row->addCell(10, $estiloLugarCumplEsp)->addText(' '.$lugarCumplSancion,$espaciadoF2,$centrarTextoCol);



///###################################################################################################################
///###################################################################################################################
///###################################################################################################################
// ------------------------------------------------------------------------------------------------------------------
//====================================AUTORIDAD QUE IMPONE LA SANCION================================================
//--------------------------------------------------------------------------------------------------------------------
///###################################################################################################################
///###################################################################################################################
///###################################################################################################################

$firmaComent = $this->input->get('firmaComent');
$nomAutoSancion= $this->input->get('nomAutoCuad');
$ApeAutoSancion= $this->input->get('apeAutoCuad');
$cargoAuto= $this->input->get('valCargoAutoCuad');
$dniAuto=$this->input->get('valdniAutoCuad');
$GradoAuto= $this->input->get('valgradAutoCuad');

$data_CargosComent = array(
'name' => 'CargosComent',
'rows' => 10,
'cols' => 80
);
 
//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 19-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%


$row = $table->addRow(340);

$row->addCell(500, $estiloGris)->addText('C',array('align' =>'center','bold' => true),$centrarTextoCol);
$row->addCell(10000, $estiloGrisAmplio)->addText('AUTORIDAD QUE IMPONE LA SANCION',array('align' =>'center','bold' => true),$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 18-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$estiloArribaFirma= array('vMerge' => 'restart','gridSpan' => 1,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000');
$estiloEspacioFirma=array('vMerge' => 'restart','gridSpan' => 1,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000');
$estGrad=array('vMerge' => 'restart','gridSpan' => 1,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000');
$estGrad2=array('vMerge' => 'restart','gridSpan' => 4,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderRightSize'=>18);

$row = $table->addRow(340);

$row->addCell(500,$bordeizquierdo)->addText('1',$espaciadoF2,$centrarTextoCol);

$row->addCell(1000,$estiloArribaFirma)->addText('FIRMA',$espaciadoF2,$centrarTextoCol);
$row->addCell(9000, $estiloEspacioFirma)->addText($firmaComent,$centrarTextoCol);

$row->addCell(500,$estGrad)->addText('GRADO',$espaciadoF2,$centrarTextoCol);
$row->addCell(2000, $estGrad)->addText(' '.$GradoAuto,$espaciadoF2,$centrarTextoCol);
 
$row->addCell(1000, $estGrad)->addText('DNI',$espaciadoF2,$centrarTextoCol);
$row->addCell(2000, $estGrad2)->addText(' '.$dniAuto,$espaciadoF2,$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 20-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$estFirmaCont=array('vMerge' => 'continue','gridSpan' => 1,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000');

$row = $table->addRow(340);
$row->addCell(500, $unSoloEstiloContinue)->addText('',$centrarTextoCol);
$row->addCell(2000,$estFirmaCont)->addText('');
$row->addCell(2000,$estFirmaCont)->addText('');

$estiloNOM = array('vMerge' => 'restart','gridSpan' => 6,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderRightSize'=>18);

$row->addCell(500, $estGrad)->addText('APELLIDO Y NOMBRE: ',$espaciadoF2,$centrarTextoCol);
$row->addCell(4000,$estiloNOM)->addText(' '.$ApeAutoSancion.' '.$nomAutoSancion,$espaciadoF2,$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 21-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%


$row = $table->addRow(340);
$row->addCell(500, $unSoloEstiloContinue)->addText('5');
$row->addCell(2000, $estFirmaCont)->addText('');
$row->addCell(2000, $estFirmaCont)->addText('');


//$CargosComent=$this->input->get('CargosComent');
//echo $CargosComent; die;

$estiloCargEsp=array('vMerge' => 'continue','gridSpan' => 6,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderRightSize'=>18);

$row->addCell(500,$estGrad)->addText('CARGO',$espaciadoF2,$centrarTextoCol);
$row->addCell(4000, $estiloNOM)->addText(' '.$cargoAuto,$espaciadoF2,$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%------------------------------fila 22-----------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(340);
$row->addCell(500, $unSoloEstiloContinue)->addText('');
$row->addCell(2000,$estFirmaCont)->addText('');
$row->addCell(2000,$estFirmaCont)->addText('');

$row->addCell(500,array('vMerge' => 'continue'))->addText('');
$row->addCell(4000, $estiloCargEsp)->addText('');

//%%%%%%%%%%%%%%%%%%%%%%-------------------------- FILA 23 -------------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%



///###################################################################################################################
///###################################################################################################################
///###################################################################################################################
// ------------------------------------------------------------------------------------------------------------------
//=========================================== ENTERADO DEL INFRACTOR  ================================================
//--------------------------------------------------------------------------------------------------------------------
///###################################################################################################################
///###################################################################################################################
///###################################################################################################################


$fchEnterado1= $this->input->get('fchEnterado1');
$lugaryFechaEnterado= $this->input->get('vallyfCuad');
$fchCumpEnterado= $this->input->get('valFchCumplCuad');
$aclaracionEnterado= $this->input->get('aclaracionEnterado');

$diaa = substr($fchCumpEnterado,8,8);
$messs =substr($fchCumpEnterado,4,4);
$anioo = substr($fchCumpEnterado,0,4);
switch ($messs) {
    case "-01-":
        $messs = "Enero";
        break;
    case "-02-":
        $messs = "Febrero";
        break;
    case "-03-":
        $messs = "Marzo";
        break;
    case "-04-":
        $messs = "Abril";
        break;
    case "-05-":
        $messs = "Mayo";
        break;
    case "-06-":
        $messs = "Junio";
        break;
    case "-07-":
        $messs = "Julio";
        break;
    case "-08-":
        $messs = "Agosto";
        break;
    case "-09-":
        $messs = "Septiembre";
        break;
    case "-10-":
        $messs = "Octubre";
        break;
    case "-11-":
        $messs = "Noviembre";
        break;
    case "-12-":
        $messs = "Diciembre";
        break;    
}

$fchCumpEnterado = $diaa. " de " .$messs. " de " .$anioo;

$row = $table->addRow(340);

$row->addCell(500, $estiloGris)->addText('D',array('align' =>'center','bold' => true),$centrarTextoCol);

$row->addCell(10000, $estiloGrisAmplio)->addText('ENTERADO DEL INFRACTOR',array('align' =>'center','bold' => true),$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%-------------------------- FILA 24 -------------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%


$row = $table->addRow(340);

$TdaLaLinea=array('vMerge' => 'restart','gridSpan' => 9,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderRightSize'=>18,'borderBottomSize'=>18);

$row->addCell(500, $bordeizquierdoF7)->addText('1',$espaciadoF2,$centrarTextoCol);
$row->addCell(1000,$TdaLaLinea)->addText('Usted tiene derecho a recurrir la presente sanción ante el superior inmediato de quien se la impuso -siguiendo la vía jerárquica- , para lo cual dispone de CINCO (5) días corridos. El vencimiento del plazo sin que se hubiere interpuesto recurso implica su aceptación de todo lo actuado. (Art 63 y 65 Anexo II Dec Nro 2666/12)',$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%-------------------------- FILA 25 -------------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
$row = $table->addRow(340);
$row->addCell(500,$bordeizquierdoF7)->addText('2',$espaciadoF2,$centrarTextoCol);

$estiloMitad= array('vMerge' => 'restart','gridSpan' => 4,'borderSize' => 6, 'borderColor' => '000000','valign'=>'center','borderBottomSize'=>18);
$estiloMitad1= array('vMerge' => 'restart','gridSpan' => 5,'borderSize' => 6, 'borderColor' => '000000','valign'=>'center','borderRightSize'=>18,'borderBottomSize'=>18);

$row->addCell(6000,$estiloMitad)->addText('Observaciones o quejas: Dec 2666/12 Art 71 – 2. (Las observaciones o quejas efectuadas no se considerarán recursos. Todo recurso debe presentarse de acuerdo a lo establecido en el Art 29 y 30 del Anexo IV Ley 26.394 y Art 63 y 64 del Anexo II del Decreto 2666/12)	',$centrarTextoCol);
$row->addCell(4000, $estiloMitad1)->addText('');

//%%%%%%%%%%%%%%%%%%%%%%-------------------------- FILA 26 -------------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
$row = $table->addRow(340);


$estiloFila26 = array('vMerge' => 'restart','gridSpan' => 2,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderBottomSize'=>18,'borderBottomSize'=>18);
$estiloFila26_1=array('vMerge' => 'restart','gridSpan' => 7,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderRightSize'=>18,'borderBottomSize'=>18);


$row->addCell(500, $bordeizquierdoF7)->addText('3',$espaciadoF2,$centrarTextoCol);
$row->addCell(4000, $estiloFila26)->addText('LUGAR Y FECHA',$espaciadoF2,$centrarTextoCol);
$row->addCell(6000, $estiloFila26_1)->addText(' '.$lugaryFechaEnterado,$espaciadoF2,$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%-------------------------- FILA 27 -------------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
$row = $table->addRow(540);

$estiloFila27_1=array('vMerge' => 'restart','gridSpan' => 7,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderRightSize'=>18,'borderBottomSize'=>18);

$estiloFila271 = array('vMerge' => 'restart','gridSpan' => 2,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderBottomSize'=>18);

$row->addCell(500,$bordeizquierdoF7)->addText('4',$espaciadoF2,$centrarTextoCol);
$row->addCell(4000, $estiloFila271)->addText('FECHA DE CUMPLIMIENTO',$espaciadoF2,$centrarTextoCol);
$row->addCell(6000, $estiloFila27_1)->addText(' '.$fchCumpEnterado,$espaciadoF2,$centrarTextoCol);

//%%%%%%%%%%%%%%%%%%%%%%-------------------------- FILA 28 -------------------------------------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$row = $table->addRow(640);
$estiloFila28 = array('vMerge' => 'restart','gridSpan' => 5,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderRightSize'=>18,'borderBottomSize'=>18);
$estiloFirma28= array('vMerge' => 'restart','gridSpan' => 1,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderBottomSize'=>18);

$estiloFila286 = array('vMerge' => 'restart','gridSpan' => 2,'borderSize' => 6,'valign'=>'center', 'borderColor' => '000000','borderBottomSize'=>18);


$row->addCell(500, $bordeizquierdoF7)->addText('5',$espaciadoF2,$centrarTextoCol);
$row->addCell(1000, $estiloFirma28)->addText('  FIRMA  ',$centrarTextoCol);
$row->addCell(3000, $estiloFila286)->addText('');
$row->addCell(3000, $estiloFirma28)->addText('  ACLARACION  ',$centrarTextoCol);
$row->addCell(3000, $estiloFila28)->addText('');



///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//=========================================== guardamos el texto en un archivo ========================================================
//--------------------------------------------------------------------------------------------------------------------------------------
///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
//

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save($filename);
// Download the file:
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment;filename=temp_.docx');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($filename));
ob_clean();
flush();
$status = readfile($filename);
unlink($filename);
exit;

	}

///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//=========================================== NOTA INFO ACC ENFERMEDAD ========================================================
//--------------------------------------------------------------------------------------------------------------------------------------
///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
public function InfoAccEnf(){

			$phpWord = new \PhpOffice\PhpWord\PhpWord();
			$filename = 'testNota.docx';
	

//ejemplo de como cambiar las propiedades de las secciones 
$sectionStyle=array(
	'marginTop' =>816,
	'marginBottom'=>509,
	'marginLeft'=>911,
	'marginRight'=>680,
	'spaceBefore' => 0,
	'spaceAfter' => 0,
	'headerHeight'=>100
);



		


//Estilos de fuentes
		$fuenteStyle1 = array('size' => 16, 'bold' => true, 'italic'=> true);
		$fuenteStyle2 = array('size' => 9, 'bold' => false, 'italic'=> true);
		$fuenteStyle3 = array('size' => 14, 'bold' => false, 'italic'=> true);
		$fuenteStyle4 = array('size' => 12, 'bold' => false,'name'=>'Times New Roman');
		$fuenteStyle5 = array('size' => 12, 'bold' => true,  'name'=>'Times New Roman');
		$fuenteStyle6 = array('size' => 9, 'bold' => false);
	
//Configuraciones del parrafo
		$configParrafo = array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
		$configParrafoTabla=array('align' => 'right', 'spaceAfter' => 0);

//Estilo del tabla
		$estiloTabla1 = array('borderSize' => 6, 'borderColor' => '999999');

///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//========================================= PRIMERA HOJA ===========================================================================
//--------------------------------------------------------------------------------------------------------------------------------------

		$primeraHoja = $phpWord->addSection($sectionStyle);

//estilo del cuerpo de la hoja

//estilo de texto
		$Hoja1Fuente1 = array('size' => 36,'name'=>'Times New Roman');
		$Hoja1Fuente2 = array('size' => 18,'name'=>'Times New Roman');
		$Hoja1Fuente3 = array('size' => 16,'name'=>'Times New Roman');
		$Hoja1Fuente4 = array('size' => 16,'bold' => true,'name'=>'Times New Roman');

//estilo de parrafo
$estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
$estiloParrafoH1_1=array('align' => 'center', 'spaceBefore' => 0,'spaceAfter' => 0);

//	CONTENIDO DE LA HOJA
$primeraHoja->addText('EJÉRCITO ARGENTINO',$Hoja1Fuente1,$estiloParrafoH1_1);
$primeraHoja->addText('COLEGIO MILITAR DE LA NACIÓN',$Hoja1Fuente2,$estiloParrafoH1_1);
$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');

//variables

$letraExp= $this->input->get('letraExpH1');
$NroExpH1= $this->input->get('NroExpH1');

$diaInicioCar= $this->input->get('var1c1');
$MesInicioCar= $this->input->get('var1c2');
$anioInicioCar= $this->input->get('var1c3');


$NomCausanteH1= $this->input->get('NomCausanteH1');
$ApeCausanteH1= $this->input->get('ApeCausanteH1');

$ApeCausanteH1=strtoupper($ApeCausanteH1);

$GradCausanteH1= $this->input->get('GradCausanteH1');
$ArmaCausanteH1= $this->input->get('ArmaCausanteH1');

$CausaCar= $this->input->get('var1d1');
$observacionesCar= $this->input->get('var1d2');


//CUERPO DE LA CARATULA 
$ExpedienteTxtRun = $primeraHoja->addTextRun($estiloParrafoH1);
$ExpedienteTxtRun->addText('EXPEDIENTE: ',$Hoja1Fuente4);
$ExpedienteTxtRun->addText($letraExp,$Hoja1Fuente3);
$ExpedienteTxtRun->addText(' - ',$Hoja1Fuente3);
$ExpedienteTxtRun->addText($NroExpH1,$Hoja1Fuente3);

$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');

$ExpedienteTxtRun = $primeraHoja->addTextRun($estiloParrafoH1);
$ExpedienteTxtRun->addText('FECHA DE INICIO: ',$Hoja1Fuente4);
$ExpedienteTxtRun->addText($diaInicioCar.' de '.$MesInicioCar.' de '.$anioInicioCar ,$Hoja1Fuente3);


$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');

$ExpedienteTxtRun = $primeraHoja->addTextRun($estiloParrafoH1);
$ExpedienteTxtRun->addText('CAUSANTE: ',$Hoja1Fuente4);
$ExpedienteTxtRun->addText($GradCausanteH1.' ',$Hoja1Fuente3);
$ExpedienteTxtRun->addText($ArmaCausanteH1.' ',$Hoja1Fuente3);
$ExpedienteTxtRun->addText($NomCausanteH1.' ',$Hoja1Fuente3);
$ExpedienteTxtRun->addText($ApeCausanteH1,$Hoja1Fuente3);

$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');

$ExpedienteTxtRun = $primeraHoja->addTextRun($estiloParrafoH1);
$ExpedienteTxtRun->addText('CAUSA: ',$Hoja1Fuente4);
$ExpedienteTxtRun->addText('"'.$CausaCar.'" ',$Hoja1Fuente3);

$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');
$primeraHoja->addText('');


$ExpedienteTxtRun = $primeraHoja->addTextRun($estiloParrafoH1);
$ExpedienteTxtRun->addText('OBSERVACIONES: ',$Hoja1Fuente4);
$ExpedienteTxtRun->addText($observacionesCar,$Hoja1Fuente3);


///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//========================================= segunda  HOJA ===========================================================================
//--------------------------------------------------------------------------------------------------------------------------------------

// //linea 1
//variables 
$DiaH2= $this->input->get('var2a1');
$MesH2= $this->input->get('var2a2');
$anioH2= $this->input->get('var2a3');

$HoraH2= $this->input->get('var2a4');
$MinH2= $this->input->get('var2a5');

//info del causante
$EdadCau= $this->input->get('var1b5');
$eCivilCau= $this->input->get('var1b6');
$dniCau= $this->input->get('var1b7');

//info del oficial informante
$GradOI= $this->input->get('var2b1');
$ArmaOI= $this->input->get('var2b2');
$NomOI= $this->input->get('var2b3');
$ApeOI= $this->input->get('var2b4');

$segundaHoja = $phpWord->addSection($sectionStyle);

//header
$H2header=$segundaHoja->addHeader();
$H2header->addImage('img/circuloNO.png',array('width'=>100,'height'=>100,'marginTop'=>-1,'marginLeft'=>55,'wrappingSyte'=>'infront','align'=>'right'));

//estilos de parrafos
$estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
$estiloParrafoH2=array('align' => 'right', 'spaceBefore' => 0,'spaceAfter' => 0);
//estilos de fuentes
		$Hoja2Fuente1 = array('size' => 12,'name'=>'Times New Roman');
		$Hoja2Fuente2 = array('size' => 11,'bold' => true,'name'=>'arial');
		$Hoja2Fuente3 = array('size' => 9,'bold' => true,'name'=>'arial');


//parte de encabezado del texto
$textrun = $segundaHoja->addTextRun($estiloParrafoH1);
$textrun->addText('   Ejército Argentino                  ',$fuenteStyle1);
$textrun->addText('');
$textrun->addText('2018 - AÑO DEL CENTENARIO DE LA REFORMA UNIVERSITARIA',$fuenteStyle2,$estiloParrafoH1);
$segundaHoja->addText('Colegio Militar de la Nación',$fuenteStyle3,$estiloParrafoH1);
$segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 


//cuerpo del texto
$segundaHoja->addText('C.E. Letra '.$letraExp.' Nro '.$NroExpH1,$Hoja2Fuente1,$estiloParrafoH2);
$segundaHoja ->addText('	    Diligencia iniciando',$Hoja2Fuente2,$estiloParrafoH1);
$segundaHoja ->addText('	Actuación Administrativa',$Hoja2Fuente2,$estiloParrafoH1);
$segundaHoja ->addText('					'.'En El Palomar, cuartel del Colegio Militar de la Nación a los '.$DiaH2. ' dias del mes de '.$MesH2.' del año  '.$anioH2.' siendo las '.$HoraH2.' horas '.$MinH2 .' y en cumplimiento de la orden precedente del Subdirector del Colegio Militar de la Nación, procedo a instruir la presente información a fin de determinar si la afección que padece el '.$GradCausanteH1.' '.$ArmaCausanteH1.' '.$NomCausanteH1.' '.$ApeCausanteH1.' (DNI: '.$dniCau.')'.'guarda relación o no con los actos del servicio.' ,$Hoja2Fuente1,$estiloParrafoH1); 
$segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);
$segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);
$segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);
$segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);
$segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);

$segundaHoja ->addText('	'.$GradOI.' '.$ArmaOI.' '.$NomOI.' '.$ApeOI.'			' ,$Hoja2Fuente3,$estiloParrafoH2); 
$segundaHoja ->addText('	'.'Oficial Informante'.'					' ,$Hoja2Fuente3,$estiloParrafoH2);





///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//========================================= TERCERA HOJA ===========================================================================
//--------------------------------------------------------------------------------------------------------------------------------------


$terceraHoja = $phpWord->addSection($sectionStyle);

//header
$H2header=$terceraHoja->addHeader();
$H2header->addImage('img/circuloNO.png',array('width'=>100,'height'=>100,'marginTop'=>-1,'marginLeft'=>55,'wrappingSyte'=>'infront','align'=>'right'));

//estilos de parrafos
$estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
$estiloParrafoH2=array('align' => 'right', 'spaceBefore' => 0,'spaceAfter' => 0);
$estiloParrafoH3=array('align' => 'center', 'spaceBefore' => 0,'spaceAfter' => 0);
//estilos de fuentes
		$Hoja3Fuente1 = array('size' => 12,'name'=>'Times New Roman');
		$Hoja3Fuente2 = array('size' => 12,'bold' => true,'underline'=>'single','name'=>'arial');
		$Hoja3Fuente3 = array('size' => 12,'bold' => true,'name'=>'Times New Roman');
		$Hoja3Fuente4 = array('size' => 8,'bold' => true,'name'=>'arial');


//variables 
$DiaH3= $this->input->get('var3a1');
$MesH3= $this->input->get('var3a2');
$anioH3= $this->input->get('var3a3');

$HoraH3= $this->input->get('var3a4');
$MinH3= $this->input->get('var3a5');

//vbles preguntas
$preg1= $this->input->get('var3b1');
$preg2= $this->input->get('var3b2');
$preg3= $this->input->get('var3b3');
$preg4= $this->input->get('var3b4');
$preg5= $this->input->get('var3b5');
$preg6= $this->input->get('var3b6');
$preg7= $this->input->get('var3b7');
$preg8= $this->input->get('var3b8');
$preg9= $this->input->get('var3b9');
$Respreg9= $this->input->get('var3b10');

//otros datos del cuasante
$edadCauH1= $this->input->get('var1b5');
$estadoCivilCauH1= $this->input->get('var1b6');

//parte de encabezado del texto
$textrun = $terceraHoja->addTextRun($estiloParrafoH1);
$textrun->addText('   Ejército Argentino                  ',$fuenteStyle1);
$textrun->addText('');
$textrun->addText('2018 - AÑO DEL CENTENARIO DE LA REFORMA UNIVERSITARIA',$fuenteStyle2,$estiloParrafoH1);
$terceraHoja->addText('Colegio Militar de la Nación',$fuenteStyle3,$estiloParrafoH1);
$terceraHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 

//cuerpo del texto
$terceraHoja->addText('C.E. Letra '.$letraExp.' Nro '.$NroExpH1,$Hoja3Fuente1,$estiloParrafoH2);
$terceraHoja->addText(' ',$Hoja3Fuente1,$estiloParrafoH2);
$terceraHoja->addText('ACTA DE DECLARACIÓN DEL CAUSANTE ',$Hoja3Fuente2,$estiloParrafoH3);


$terceraHoja ->addText('		'.'En El Palomar, sede del Colegio Militar de la Nación a las '.$HoraH3. ' horas '.$MinH3.' minutos del día '.$DiaH3.' de '.$MesH3.' del año '.$anioH3 .', comparezco ante el '.$GradCausanteH1.' '.$ArmaCausanteH1.' '.$NomCausanteH1.' '.$ApeCausanteH1.' (DNI: '.$dniCau.')'.', quién convenientemente interrogado dice llamarse como queda dicho, ser de nacionalidad argentino, de '.$edadCauH1.' años de edad, de estado civil '.$estadoCivilCauH1.', de profesión militar y perteneciente al Colegio Militar de la Nación.' ,$Hoja3Fuente1,$estiloParrafoH1); 
$terceraHoja->addText('');
//Preguntas
//preg 1
$Preg1TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$Preg1TxtRun ->addText('1. A la pregunta: ',$Hoja3Fuente3);
$Preg1TxtRun ->addText('¿Cuál afección/lesión que lo aqueja y cómo se produjo la misma?' ,$Hoja3Fuente1);

$ResPreg1TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$ResPreg1TxtRun ->addText('DIJO: ',$Hoja3Fuente3);
$ResPreg1TxtRun ->addText($preg1,$Hoja3Fuente1);

$terceraHoja->addText('');

//preg2
$Preg2TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$Preg2TxtRun ->addText('2. A la pregunta: ',$Hoja3Fuente3);
$Preg2TxtRun ->addText('¿Tiene antecedentes médicos anteriores? ' ,$Hoja3Fuente1);

$ResPreg2TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$ResPreg2TxtRun ->addText('DIJO: ',$Hoja3Fuente3);
$ResPreg2TxtRun ->addText($preg2,$Hoja3Fuente1);

$terceraHoja->addText('');

//preg3
$Preg3TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$Preg3TxtRun ->addText('3. A la pregunta: ',$Hoja3Fuente3);
$Preg3TxtRun ->addText('¿Si tiene antecedentes médicos, se le realizaron con anterioridad AJM?' ,$Hoja3Fuente1);

$ResPreg3TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$ResPreg3TxtRun ->addText('DIJO: ',$Hoja3Fuente3);
$ResPreg3TxtRun ->addText($preg3,$Hoja3Fuente1);

$terceraHoja->addText('');

//preg4
$Preg4TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$Preg4TxtRun ->addText('4. A la pregunta: ',$Hoja3Fuente3);
$Preg4TxtRun ->addText('¿Se le brindó la asistencia médica necesaria en su momento?' ,$Hoja3Fuente1);

$ResPreg4TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$ResPreg4TxtRun ->addText('DIJO: ',$Hoja3Fuente3);
$ResPreg4TxtRun ->addText($preg4,$Hoja3Fuente1);

$terceraHoja->addText('');

//preg5
$Preg5TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$Preg5TxtRun ->addText('5. A la pregunta: ',$Hoja3Fuente3);
$Preg5TxtRun ->addText('¿Quién fue el médico que lo atendió en la actualidad?' ,$Hoja3Fuente1);

$ResPreg5TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$ResPreg5TxtRun ->addText('DIJO: ',$Hoja3Fuente3);
$ResPreg5TxtRun ->addText($preg5,$Hoja3Fuente1);

$terceraHoja->addText('');

//preg6
$Preg6TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$Preg6TxtRun ->addText('6. A la pregunta: ',$Hoja3Fuente3);
$Preg6TxtRun ->addText('¿Cómo es su estado actual de salud? ' ,$Hoja3Fuente1);

$ResPreg6TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$ResPreg6TxtRun ->addText('DIJO: ',$Hoja3Fuente3);
$ResPreg6TxtRun ->addText($preg6,$Hoja3Fuente1);

$terceraHoja->addText('');

//preg7
$Preg7TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$Preg7TxtRun ->addText('7. A la pregunta: ',$Hoja3Fuente3);
$Preg7TxtRun ->addText('¿Quiénes pueden atestiguar respecto a su afección?' ,$Hoja3Fuente1);

$ResPreg7TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$ResPreg7TxtRun ->addText('DIJO: ',$Hoja3Fuente3);
$ResPreg7TxtRun ->addText($preg7,$Hoja3Fuente1);

$terceraHoja->addText('');

//preg8
$Preg8TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$Preg8TxtRun ->addText('8. A la pregunta: ',$Hoja3Fuente3);
$Preg8TxtRun ->addText('Si tiene algo más que agregar, quitar o enmendar a lo declarado' ,$Hoja3Fuente1);

$ResPreg8TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$ResPreg8TxtRun ->addText('DIJO: ',$Hoja3Fuente3);
$ResPreg8TxtRun ->addText($preg8,$Hoja3Fuente1);

$terceraHoja->addText('');

//preg9

if ($preg9!=''){

$Preg9TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$Preg9TxtRun ->addText('9. A la pregunta: ',$Hoja3Fuente3);
$Preg9TxtRun ->addText($preg9 ,$Hoja3Fuente1);

$ResPreg9TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$ResPreg9TxtRun ->addText('DIJO: ',$Hoja3Fuente3);
$ResPreg9TxtRun ->addText($Respreg9,$Hoja3Fuente1);
}

$terceraHoja->addText('');

$sello1TxtRun = $terceraHoja->addTextRun($estiloParrafoH1);
$sello1TxtRun -> addText('			  '.$GradCausanteH1.' '.$ArmaCausanteH1.' '.$NomCausanteH1.' '.$ApeCausanteH1,$Hoja3Fuente4,$estiloParrafoH1);
$sello1TxtRun -> addText('				'.$GradOI.' '.$ArmaOI.' '.$NomOI.' '.$ApeOI.'' ,$Hoja3Fuente4,$estiloParrafoH1);

$sello1TxtRun1 = $terceraHoja->addTextRun($estiloParrafoH1);
$sello1TxtRun1 -> addText('			  causante					',$Hoja3Fuente4,$estiloParrafoH1);
$sello1TxtRun1 -> addText('Oficial Informante		' ,$Hoja3Fuente4,$estiloParrafoH1);

///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//========================================= CUARTA HOJA ===========================================================================
//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------//--------------------------------------------------------------------------------------------------------------------------------------//--------------------------------------------------------------------------------------------------------------------------------------//--------------------------------------------------------------------------------------------------------------------------------------

$cuartaHoja = $phpWord->addSection($sectionStyle);

//header
$H2header=$cuartaHoja->addHeader();
$H2header->addImage('img/circuloNO.png',array('width'=>100,'height'=>100,'marginTop'=>-1,'marginLeft'=>55,'wrappingSyte'=>'infront','align'=>'right'));

//estilos de parrafos
$estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
$estiloParrafoH2=array('align' => 'right', 'spaceBefore' => 0,'spaceAfter' => 0);
$estiloParrafoH3=array('align' => 'center', 'spaceBefore' => 0,'spaceAfter' => 0);
//estilos de fuentes
		$Hoja4Fuente1 = array('size' => 12,'name'=>'Times New Roman');
		$Hoja4Fuente2 = array('size' => 12,'bold' => true,'underline'=>'single','name'=>'arial');
		$Hoja4Fuente3 = array('size' => 12,'bold' => true,'name'=>'Times New Roman');
		$Hoja4Fuente4 = array('size' => 8,'bold' => true,'name'=>'arial');


//variables 
$DiaH4= $this->input->get('var4a1');
$MesH4= $this->input->get('var4a2');
$anioH4= $this->input->get('var4a3');

$HoraH4= $this->input->get('var4a4');
$MinH4= $this->input->get('var4a5');
//vbles informacion del testigo 1
$gradoTest1	= $this->input->get('var4b1');
$armaTest1	= $this->input->get('var4b2');
$nomTest1	= $this->input->get('var4b3');
$apeTest1	= $this->input->get('var4b4');
$edadTest1= $this->input->get('var4b5');
$dniTest1= $this->input->get('var4b6');

//vbles preguntas al testigo 1
$preg1Test1= $this->input->get('var4c1');
$preg2Test1= $this->input->get('var4c2');
$preg3Test1= $this->input->get('var4c3');
$preg3aTest1= $this->input->get('var4c3a');
$preg4Test1= $this->input->get('var4c4');
$preg5Test1= $this->input->get('var4c5');
$preg6Test1= $this->input->get('var4c6');

$preg7Test1= $this->input->get('var3b8');
$resPreg8Test1= $this->input->get('var3b7');

//parte de encabezado del texto
$textrun = $cuartaHoja->addTextRun($estiloParrafoH1);
$textrun->addText('   Ejército Argentino                  ',$fuenteStyle1);
$textrun->addText('');
$textrun->addText('2018 - AÑO DEL CENTENARIO DE LA REFORMA UNIVERSITARIA',$fuenteStyle2,$estiloParrafoH1);
$cuartaHoja->addText('Colegio Militar de la Nación',$fuenteStyle3,$estiloParrafoH1);
$cuartaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 

//cuerpo del texto
$cuartaHoja->addText('C.E. Letra '.$letraExp.' Nro '.$NroExpH1,$Hoja4Fuente1,$estiloParrafoH2);
$cuartaHoja->addText(' ',$Hoja4Fuente1,$estiloParrafoH2);
$cuartaHoja->addText('ACTA DE DECLARACIÓN DEL TESTIGO ',$Hoja4Fuente2,$estiloParrafoH3);


$cuartaHoja->addText('		'.'En El Palomar, sede del Colegio Militar de la Nación a los '.$DiaH4. ' días del mes de '.$MesH4.' del año '.$anioH4.' siendo las '.$HoraH4.' horas con '.$MinH4.' minutos comparece ante mí el '.$gradoTest1.' de '.$armaTest1.' '.$nomTest1.' '.$apeTest1.' (DNI: '.$dniTest1.')'.', quién convenientemente interrogado manifestó llamarse como queda dicho de '.$edadTest1.' años de edad, y perteneciente al Colegio Militar de la Nación..',$Hoja4Fuente1,$estiloParrafoH1); 
$cuartaHoja->addText('');
//Preguntas
//preg 1
$Preg1TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$Preg1TxtRun ->addText('1. A la pregunta: ',$Hoja4Fuente3);
$Preg1TxtRun ->addText('¿Tiene conocimiento de la afección/lesión que padece el '.$GradCausanteH1.' '.$NomCausanteH1.' '.$ApeCausanteH1.' y cuando se produjo la misma?',$Hoja4Fuente1);

$ResPreg1TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$ResPreg1TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
$ResPreg1TxtRun ->addText($preg1Test1,$Hoja4Fuente1);

$cuartaHoja->addText('');

//preg2
$Preg2TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$Preg2TxtRun ->addText('2. A la pregunta: ',$Hoja4Fuente3);
$Preg2TxtRun ->addText('¿Qué síntomas observa u observó de la afección/lesión que padece?' ,$Hoja4Fuente1);

$ResPreg2TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$ResPreg2TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
$ResPreg2TxtRun ->addText($preg2Test1,$Hoja4Fuente1);

$cuartaHoja->addText('');

//preg3
$Preg3TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$Preg3TxtRun ->addText('3. A la pregunta: ',$Hoja4Fuente3);
$Preg3TxtRun ->addText('Al conocer su afección/lesión el causante ¿Se hizo atender por el servicio médico de su Unidad?',$Hoja4Fuente1);

$ResPreg3TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$ResPreg3TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
if ($preg4Test1=='SI'){
	$ResPreg3TxtRun ->addText($preg3Test1.', en '.$preg3aTest1,$Hoja4Fuente1);
}else{
	$ResPreg3TxtRun ->addText($preg3Test1,$Hoja4Fuente1);
}


$cuartaHoja->addText('');

//preg4
$Preg4TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$Preg4TxtRun ->addText('4. A la pregunta: ',$Hoja4Fuente3);
$Preg4TxtRun ->addText('¿Se le brindó la correspondiente asistencia médica necesaria?' ,$Hoja4Fuente1);

$ResPreg4TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$ResPreg4TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
$ResPreg4TxtRun ->addText($preg4Test1,$Hoja4Fuente1);

$cuartaHoja->addText('');

//preg5
$Preg5TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$Preg5TxtRun ->addText('5. A la pregunta: ',$Hoja4Fuente3);
$Preg5TxtRun ->addText('¿Considera que la afección del causante se produjo en Actos del Servicio?' ,$Hoja4Fuente1);

$ResPreg5TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$ResPreg5TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
$ResPreg5TxtRun ->addText($preg5Test1,$Hoja4Fuente1);

$cuartaHoja->addText('');

//preg6
$Preg6TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$Preg6TxtRun ->addText('6. A la pregunta: ',$Hoja4Fuente3);
$Preg6TxtRun ->addText('Si tiene algo más que agregar, quitar o enmendar a esta su declaración.' ,$Hoja4Fuente1);

$ResPreg6TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$ResPreg6TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
$ResPreg6TxtRun ->addText($preg6Test1,$Hoja4Fuente1);

$cuartaHoja->addText('');

//preg7
if ($preg7Test1!=''){

	$Preg7TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
	$Preg7TxtRun ->addText('7. A la pregunta: ',$Hoja4Fuente3);
	$Preg7TxtRun ->addText($preg7Test1,$Hoja3Fuente1);
	
	$ResPreg7TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
	$ResPreg7TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
	$ResPreg7TxtRun ->addText($resPreg8Test1,$Hoja4Fuente1);
}

$cuartaHoja->addText('');
$cuartaHoja->addText('');
$cuartaHoja->addText('');
$cuartaHoja->addText('');




$sello1TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
$sello1TxtRun -> addText('			'.$gradoTest1.' '.$armaTest1.' '.$nomTest1.' '.$apeTest1.' 				' ,$Hoja3Fuente4,$estiloParrafoH1);
$sello1TxtRun -> addText(''.$GradOI.' '.$ArmaOI.' '.$NomOI.' '.$ApeOI,$Hoja3Fuente4,$estiloParrafoH1);

$sello1TxtRun1 = $cuartaHoja->addTextRun($estiloParrafoH1);
$sello1TxtRun1 -> addText('			testigo 						',$Hoja3Fuente4,$estiloParrafoH1);
$sello1TxtRun1 -> addText('     Oficial Informante',$Hoja3Fuente4,$estiloParrafoH1);


///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//============================================== 	QUINTA HOJA 	========================================================
//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------//--------------------------------------------------------------------------------------------------------------------------------------//--------------------------------------------------------------------------------------------------------------------------------------//--------------------------------------------------------------------------------------------------------------------------------------

$quintaHoja = $phpWord->addSection($sectionStyle);

//header
$H2header=$quintaHoja->addHeader();
$H2header->addImage('img/circuloNO.png',array('width'=>100,'height'=>100,'marginTop'=>-1,'marginLeft'=>55,'wrappingSyte'=>'infront','align'=>'right'));

//estilos de parrafos
$estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
$estiloParrafoH2=array('align' => 'right', 'spaceBefore' => 0,'spaceAfter' => 0);
$estiloParrafoH3=array('align' => 'center', 'spaceBefore' => 0,'spaceAfter' => 0);
//estilos de fuentes
		$Hoja5Fuente1 = array('size' => 12,'name'=>'Times New Roman');
		$Hoja5Fuente2 = array('size' => 12,'bold' => true,'underline'=>'single','name'=>'arial');
		$Hoja5Fuente3 = array('size' => 12,'bold' => true,'name'=>'Times New Roman');
		$Hoja5Fuente4 = array('size' => 8,'bold' => true,'name'=>'arial');


//variables 
$DiaH5= $this->input->get('var5a1');
$MesH5= $this->input->get('var5a2');
$anioH5= $this->input->get('var5a3');

$HoraH5= $this->input->get('var5a4');
$MinH5= $this->input->get('var5a5');
//vbles informacion del testigo 1
$gradoTest2	= $this->input->get('var5b1');
$armaTest2	= $this->input->get('var5b2');
$nomTest2	= $this->input->get('var5b3');
$apeTest2	= $this->input->get('var5b4');
$edadTest2= $this->input->get('var5b5');
$dniTest2= $this->input->get('var5b6');

//vbles preguntas al testigo 1
$preg1Test2= $this->input->get('var5c1');
$preg2Test2= $this->input->get('var5c2');
$preg3Test2= $this->input->get('var5c3');
$preg3aTest2= $this->input->get('var5c3a');
$preg4Test2= $this->input->get('var5c4');
$preg5Test2= $this->input->get('var5c5');
$preg6Test2= $this->input->get('var5c6');

$preg7Test2= $this->input->get('var5c8');
$resPreg8Test2= $this->input->get('var5c7');



//parte de encabezado del texto
$textrun = $quintaHoja->addTextRun($estiloParrafoH1);
$textrun->addText('   Ejército Argentino                  ',$fuenteStyle1);
$textrun->addText('');
$textrun->addText('2018 - AÑO DEL CENTENARIO DE LA REFORMA UNIVERSITARIA',$fuenteStyle2,$estiloParrafoH1);
$quintaHoja->addText('Colegio Militar de la Nación',$fuenteStyle3,$estiloParrafoH1);
$quintaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 

//cuerpo del texto
$quintaHoja->addText('C.E. Letra '.$letraExp.' Nro '.$NroExpH1,$Hoja4Fuente1,$estiloParrafoH2);
$quintaHoja->addText(' ',$Hoja4Fuente1,$estiloParrafoH2);
$quintaHoja->addText('ACTA DE DECLARACIÓN DEL TESTIGO ',$Hoja4Fuente2,$estiloParrafoH3);


$quintaHoja->addText('		'.'En El Palomar, sede del Colegio Militar de la Nación a los '.$DiaH5. ' dias del mes de '.$MesH5.' del año '.$anioH5.' siendo las '.$HoraH5.' horas con '.$MinH5.' minutos comparece ante mí el '.$gradoTest2.' de '.$armaTest2.' '.$nomTest2.' '.$apeTest2.' (DNI: '.$dniTest2.')'.', quién convenientemente interrogado manifestó llamarse como queda dicho de '.$edadTest2.' años de edad, y perteneciente al Colegio Militar de la Nación..',$Hoja4Fuente1,$estiloParrafoH1); 
$quintaHoja->addText('');
//Preguntas
//preg 1
$Preg1TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$Preg1TxtRun ->addText('1. A la pregunta: ',$Hoja4Fuente3);
$Preg1TxtRun ->addText('¿Tiene conocimiento de la afección/lesión que padece el '.$GradCausanteH1.' '.$NomCausanteH1.' '.$ApeCausanteH1.' y cuando se produjo la misma?',$Hoja4Fuente1);

$ResPreg1TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$ResPreg1TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
$ResPreg1TxtRun ->addText($preg1Test2,$Hoja4Fuente1);

$quintaHoja->addText('');

//preg2
$Preg2TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$Preg2TxtRun ->addText('2. A la pregunta: ',$Hoja4Fuente3);
$Preg2TxtRun ->addText('¿Qué síntomas observa u observó de la afección/lesión que padece?' ,$Hoja4Fuente1);

$ResPreg2TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$ResPreg2TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
$ResPreg2TxtRun ->addText($preg2Test2,$Hoja4Fuente1);

$quintaHoja->addText('');

//preg3
$Preg3TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$Preg3TxtRun ->addText('3. A la pregunta: ',$Hoja4Fuente3);
$Preg3TxtRun ->addText('Al conocer su afección/lesión el causante ¿Se hizo atender por el servicio médico de su Unidad?',$Hoja4Fuente1);

$ResPreg3TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$ResPreg3TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
if ($preg3Test2=='SI'){
	$ResPreg3TxtRun ->addText($preg3Test2.', en '.$preg3aTest2,$Hoja4Fuente1);
}else{
	$ResPreg3TxtRun ->addText($preg3Test2,$Hoja4Fuente1);
}


$quintaHoja->addText('');

//preg4
$Preg4TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$Preg4TxtRun ->addText('4. A la pregunta: ',$Hoja4Fuente3);
$Preg4TxtRun ->addText('¿Se le brindó la correspondiente asistencia médica necesaria?' ,$Hoja4Fuente1);

$ResPreg4TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$ResPreg4TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
$ResPreg4TxtRun ->addText($preg4Test2,$Hoja4Fuente1);

$quintaHoja->addText('');

//preg5
$Preg5TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$Preg5TxtRun ->addText('5. A la pregunta: ',$Hoja4Fuente3);
$Preg5TxtRun ->addText('¿Considera que la afección del causante se produjo en Actos del Servicio?' ,$Hoja4Fuente1);

$ResPreg5TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$ResPreg5TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
$ResPreg5TxtRun ->addText($preg5Test2,$Hoja4Fuente1);

$quintaHoja->addText('');

//preg6
$Preg6TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$Preg6TxtRun ->addText('6. A la pregunta: ',$Hoja4Fuente3);
$Preg6TxtRun ->addText('Si tiene algo más que agregar, quitar o enmendar a esta su declaración.' ,$Hoja4Fuente1);

$ResPreg6TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$ResPreg6TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
$ResPreg6TxtRun ->addText($preg6Test2,$Hoja4Fuente1);

$quintaHoja->addText('');

//preg7
if ($preg7Test2!=''){

	$Preg7TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
	$Preg7TxtRun ->addText('7. A la pregunta: ',$Hoja4Fuente3);
	$Preg7TxtRun ->addText($preg7Test2,$Hoja3Fuente1);
	
	$ResPreg7TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
	$ResPreg7TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
	$ResPreg7TxtRun ->addText($resPreg8Test2,$Hoja4Fuente1);
}

$quintaHoja->addText('');
$quintaHoja->addText('');
$quintaHoja->addText('');
$quintaHoja->addText('');





$sello1TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
$sello1TxtRun -> addText('				'.$gradoTest2.' '.$armaTest2.' '.$nomTest2.' '.$apeTest2.' 			' ,$Hoja3Fuente4,$estiloParrafoH1);
$sello1TxtRun -> addText($GradOI.' '.$ArmaOI.' '.$NomOI.' '.$ApeOI,$Hoja3Fuente4,$estiloParrafoH1);

$sello1TxtRun1 = $quintaHoja->addTextRun($estiloParrafoH1);
$sello1TxtRun1 -> addText('				testigo 						',$Hoja3Fuente4,$estiloParrafoH1);
$sello1TxtRun1 -> addText('     Oficial Informante',$Hoja3Fuente4,$estiloParrafoH1);


///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//=======================================			SEXTA HOJA   ======================================================================
//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------

$sextaHoja = $phpWord->addSection($sectionStyle);

//header
$H2header=$sextaHoja->addHeader();
$H2header->addImage('img/circuloNO.png',array('width'=>100,'height'=>100,'marginTop'=>-1,'marginLeft'=>55,'wrappingSyte'=>'infront','align'=>'right'));

//estilos de parrafos
$estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
$estiloParrafoH2=array('align' => 'right', 'spaceBefore' => 0,'spaceAfter' => 0);
$estiloParrafoH3=array('align' => 'center', 'spaceBefore' => 0,'spaceAfter' => 0);
//estilos de fuentes
		$Hoja6Fuente1 = array('size' => 12,'name'=>'Times New Roman');
		$Hoja6Fuente2 = array('size' => 12,'bold' => true,'underline'=>'single','name'=>'arial');
		$Hoja6Fuente3 = array('size' => 12,'bold' => true,'name'=>'Times New Roman');
		$Hoja6Fuente4 = array('size' => 10,'bold' => true,'name'=>'Times New Roman');
		$Hoja6Fuente5 = array('size' => 8,'bold' => true,'name'=>'arial');


// //linea 1
//variables 
$DiaH2= $this->input->get('var2a1');
$MesCon  = $this->input->get('var6c1');
$anioCon= $this->input->get('var6c2');

$HoraH2= $this->input->get('var2a4');
$MinH2= $this->input->get('var2a5');

//asistio al causante: 
$GradAC= $this->input->get('var6b1');
$ArmaAC= $this->input->get('var6b2');
$NomOAC= $this->input->get('var6b3');
$ApeOAC= $this->input->get('var6b4');


//info
//asistencia medica debe contener el valor de SI o NO
$asistenciaMed=$this->input->get('var6a5');
//se lesiono en actos de servicios, debe decir si o no
$actosServicios=$this->input->get('var6a4');

//tiene antecedentes? la variable contiene el valos SI o NO
$obranAnteC=$this->input->get('var6a3');

//causa de la lesion
$causaLesion=$this->input->get('var6a2');
//que tipo de lesion padece
$tipoLesion=$this->input->get('var6a1');

//info del causante

//info del oficial informante
$GradOI= $this->input->get('var2b1');
$ArmaOI= $this->input->get('var2b2');
$NomOI= $this->input->get('var2b3');
$ApeOI= $this->input->get('var2b4');




//parte de encabezado del texto
$textrun = $sextaHoja->addTextRun($estiloParrafoH1);
$textrun->addText('   Ejército Argentino                  ',$fuenteStyle1);
$textrun->addText('');
$textrun->addText('2018 - AÑO DEL CENTENARIO DE LA REFORMA UNIVERSITARIA',$fuenteStyle2,$estiloParrafoH1);
$sextaHoja->addText('Colegio Militar de la Nación',$fuenteStyle3,$estiloParrafoH1);
$sextaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1); 


//cuerpo del texto
$sextaHoja->addText('C.E. Letra '.$letraExp.' Nro '.$NroExpH1,$Hoja2Fuente1,$estiloParrafoH2);

$sextaHoja ->addText('',$Hoja2Fuente2,$estiloParrafoH1);
$sextaHoja ->addText('',$Hoja2Fuente2,$estiloParrafoH1);

$sextaHoja ->addText('AL DIRECTOR DEL COLEGIO MILITAR DE LA NACIÓN',$Hoja6Fuente3,$estiloParrafoH1);

$sextaHoja ->addText('',$Hoja2Fuente2,$estiloParrafoH1);

$sextaHoja ->addText('			'.'Elevo a usted, las presentes actuaciones instruidas con motivo de la afección que padece al '.$GradCausanteH1.' '.$ArmaCausanteH1.' '.$NomCausanteH1.' '.$ApeCausanteH1.' (DNI: '.$dniCau.')'.' perteneciente a este Instituto, de cuyas constancias resultan: ' ,$Hoja6Fuente1,$estiloParrafoH1); 

$sextaHoja ->addText(' ',$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText('1.	Que con relación a la afección  de “'.$tipoLesion.'" el causante manifiesta que fue producto de '.$causaLesion,$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText(' ',$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText('2.	Que se dio cuenta al '.$preg3aTest2.' siendo asistido por el '.$GradAC.' '.$ArmaAC.' '.$NomOAC.' '.$ApeOAC,$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText(' ',$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText('3.	Que '.$obranAnteC.' obran antecedentes de haber sido asistido por la Sanidad Militar ',$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText(' ',$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText('4.	Que está comprobado que la afección que padece actualmente '.$actosServicios.' se originó por actos del servicio. ',$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText(' ',$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText('5.	Que al causante '.$asistenciaMed.' se le prestó asistencia médica necesaria. ',$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText(' ',$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText('6.	Que no hay responsabilidad para terceras personas. ',$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText(' ',$Hoja6Fuente1,$estiloParrafoH1);

$sextaHoja ->addText('7.	Que no existe negligencia alguna. ',$Hoja6Fuente1,$estiloParrafoH1);


$sextaHoja ->addText(' ',$Hoja6Fuente1,$estiloParrafoH1);


$sextaHoja ->addText(' ',$Hoja6Fuente1,$estiloParrafoH1);



$sextaHoja ->addText('EL PALOMAR,          de '.$MesCon.' de '.$anioCon ,$Hoja6Fuente1,$estiloParrafoH2); 

$sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);
$sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);
$sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);
$sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);
$sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);
$sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);
$sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);

$sextaHoja ->addText('	'.$GradOI.' '.$ArmaOI.' '.$NomOI.' '.$ApeOI ,$Hoja6Fuente4,$estiloParrafoH2); 
$sextaHoja ->addText('	'.'Oficial Informante 	' ,$Hoja6Fuente4,$estiloParrafoH2);






///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//=========================================== guardamos el texto en un archivo ========================================================
//--------------------------------------------------------------------------------------------------------------------------------------
///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
//

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save($filename);
// Download the file:
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment;filename=temp_.docx');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($filename));
ob_clean();
flush();
$status = readfile($filename);
unlink($filename);
exit;

}





    public function ActuacionBienesEstados(){


        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $filename = 'testActuacion.docx';


//ejemplo de como cambiar las propiedades de las secciones
        $sectionStyle=array(
            'marginTop' =>816,
            'marginBottom'=>509,
            'marginLeft'=>911,
            'marginRight'=>680,
            'spaceBefore' => 0,
            'spaceAfter' => 0,
            'headerHeight'=>100
        );






//Estilos de fuentes
        $fuenteStyle1 = array('size' => 16, 'bold' => true, 'italic'=> true);
        $fuenteStyle2 = array('size' => 9, 'bold' => false, 'italic'=> true);
        $fuenteStyle3 = array('size' => 14, 'bold' => false, 'italic'=> true);
        $fuenteStyle4 = array('size' => 12, 'bold' => false,'name'=>'Times New Roman');
        $fuenteStyle5 = array('size' => 12, 'bold' => true,  'name'=>'Times New Roman');
        $fuenteStyle6 = array('size' => 9, 'bold' => false);

//Configuraciones del parrafo
        $configParrafo = array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
        $configParrafoTabla=array('align' => 'right', 'spaceAfter' => 0);

//Estilo del tabla
        $estiloTabla1 = array('borderSize' => 6, 'borderColor' => '999999');

///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//========================================= PRIMERA HOJA ===========================================================================
//--------------------------------------------------------------------------------------------------------------------------------------

        $primeraHoja = $phpWord->addSection($sectionStyle);

//estilo del cuerpo de la hoja

//estilo de texto
        $Hoja1Fuente1 = array('size' => 36,'name'=>'Times New Roman');
        $Hoja1Fuente2 = array('size' => 18,'name'=>'Times New Roman');
        $Hoja1Fuente3 = array('size' => 16,'name'=>'Times New Roman');
        $Hoja1Fuente4 = array('size' => 16,'bold' => true,'name'=>'Times New Roman');

//estilo de parrafo
        $estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
        $estiloParrafoH1_1=array('align' => 'center', 'spaceBefore' => 0,'spaceAfter' => 0);

//	CONTENIDO DE LA HOJA
        $primeraHoja->addText('EJÉRCITO ARGENTINO',$Hoja1Fuente1,$estiloParrafoH1_1);
        $primeraHoja->addText('COLEGIO MILITAR DE LA NACIÓN',$Hoja1Fuente2,$estiloParrafoH1_1);
        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');




//variables

        $letraExp= $this->input->get('letraExpH1');
        $NroExpH1= $this->input->get('NroExpH1');

        $GradCausanteH1= $this->input->get('GradCausanteH1');
        $ArmaCausanteH1= $this->input->get('ArmaCausanteH1');


        $NomCausanteH1= $this->input->get('NomCausanteH1');
        $ApeCausanteH1= $this->input->get('ApeCausanteH1');

        $ApeCausanteH1=strtoupper($ApeCausanteH1);

        $EdadH1= $this->input->get('EdadH1');
        $EstadoCivilH1= $this->input->get('EstadoCivilH1');
        $DniH1= $this->input->get('DniH1');

        $DiaInicioAct= $this->input->get('var1c1');
        $MesInicioAct= $this->input->get('var1c2');
        $AnioInicioAct= $this->input->get('var1c3');

        $CausaAct= $this->input->get('var1d1');
        $ObservacionesAct= $this->input->get('var1d2');


//CUERPO DE LA CARATULA
        $ExpedienteTxtRun = $primeraHoja->addTextRun($estiloParrafoH1);
        $ExpedienteTxtRun->addText('EXPEDIENTE: ',$Hoja1Fuente4);
        $ExpedienteTxtRun->addText($letraExp,$Hoja1Fuente3);
        $ExpedienteTxtRun->addText(' - ',$Hoja1Fuente3);
        $ExpedienteTxtRun->addText($NroExpH1,$Hoja1Fuente3);

        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');

        $ExpedienteTxtRun = $primeraHoja->addTextRun($estiloParrafoH1);
        $ExpedienteTxtRun->addText('FECHA DE INICIO: ',$Hoja1Fuente4);
        $ExpedienteTxtRun->addText($DiaInicioAct.' de '.$MesInicioAct.' de '.$AnioInicioAct ,$Hoja1Fuente3);


        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');

        $ExpedienteTxtRun = $primeraHoja->addTextRun($estiloParrafoH1);
        $ExpedienteTxtRun->addText('CAUSANTE: ',$Hoja1Fuente4);
        $ExpedienteTxtRun->addText($GradCausanteH1.' ',$Hoja1Fuente3);
        $ExpedienteTxtRun->addText($ArmaCausanteH1.' ',$Hoja1Fuente3);
        $ExpedienteTxtRun->addText($NomCausanteH1.' ',$Hoja1Fuente3);
        $ExpedienteTxtRun->addText($ApeCausanteH1.' ',$Hoja1Fuente3);
        $ExpedienteTxtRun->addText($EdadH1.' Años ',$Hoja1Fuente3);
        $ExpedienteTxtRun->addText($EstadoCivilH1.' ',$Hoja1Fuente3);
        $ExpedienteTxtRun->addText($DniH1,$Hoja1Fuente3);


        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');

        $ExpedienteTxtRun = $primeraHoja->addTextRun($estiloParrafoH1);
        $ExpedienteTxtRun->addText('CAUSA: ',$Hoja1Fuente4);
        $ExpedienteTxtRun->addText('"'.$CausaAct.'" ',$Hoja1Fuente3);

        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');
        $primeraHoja->addText('');


        $ExpedienteTxtRun = $primeraHoja->addTextRun($estiloParrafoH1);
        $ExpedienteTxtRun->addText('OBSERVACIONES: ',$Hoja1Fuente4);
        $ExpedienteTxtRun->addText($ObservacionesAct,$Hoja1Fuente3);


///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//========================================= segunda  HOJA ===========================================================================
//--------------------------------------------------------------------------------------------------------------------------------------

// //Variables
//Datos de la fecha
        $DiaH2= $this->input->get('DiaH2');
        $MesH2= $this->input->get('MesH2');
        $AnioH2= $this->input->get('AnioH2');

        $HoraH2= $this->input->get('HoraH2');
        $MinH2= $this->input->get('MinH2');

//Fecha de la orden del subdirector
        $DiaOrdenH2= $this->input->get('DiaOrdenH2');
        $MesOrdenH2= $this->input->get('MesOrdenH2');
        $AnioOrdenH2= $this->input->get('AnioOrdenH2');

//Descripcion del Cargo
        $DescripCargoH2= $this->input->get('DescripCargoH2');

//Responsable
        $GradoResponsableH1= $this->input->get('GradoResponsableH1');
        $NombreResponsableH1= $this->input->get('NombreResponsableH1');
        $ApellidoResponsableH1= $this->input->get('ApellidoResponsableH1');
        $DniResponsableH1= $this->input->get('DniResponsableH1');

//info del oficial informante
        $GradOI= $this->input->get('GradOI');
        $ArmaOI= $this->input->get('ArmaOI');
        $NombreOI= $this->input->get('NombreOI');
        $ApellidoOI= $this->input->get('ApellidoOI');

        $segundaHoja = $phpWord->addSection($sectionStyle);

//header
        $H2header=$segundaHoja->addHeader();
        $H2header->addImage('img/circuloNO.png',array('width'=>100,'height'=>100,'marginTop'=>-1,'marginLeft'=>55,'wrappingSyte'=>'infront','align'=>'right'));

//estilos de parrafos
        $estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
        $estiloParrafoH2=array('align' => 'right', 'spaceBefore' => 0,'spaceAfter' => 0);
//estilos de fuentes
        $Hoja2Fuente1 = array('size' => 12,'name'=>'Times New Roman');
        $Hoja2Fuente2 = array('size' => 11,'bold' => true,'name'=>'arial');
        $Hoja2Fuente3 = array('size' => 9,'bold' => true,'name'=>'arial');


//parte de encabezado del texto
        $textrun = $segundaHoja->addTextRun($estiloParrafoH1);
        $textrun->addText('   Ejército Argentino                  ',$fuenteStyle1);
        $textrun->addText('');
        $textrun->addText('                        2019 - AÑO DE LA EXPORTACIÓN'            ,$fuenteStyle2,$estiloParrafoH1);
        $segundaHoja->addText('Colegio Militar de la Nación',$fuenteStyle3,$estiloParrafoH1);
        $segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);


//cuerpo del texto
        $segundaHoja->addText('C.E. Letra '.$letraExp.' Nro. '.$NroExpH1,$Hoja2Fuente1,$estiloParrafoH2);
        $segundaHoja ->addText('	    Diligencia iniciando',$Hoja2Fuente2,$estiloParrafoH1);
        $segundaHoja ->addText('	Actuación Administrativa',$Hoja2Fuente2,$estiloParrafoH1);
        $segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);
        $segundaHoja ->addText('					'.'En la Ciudad de EL PALOMAR, Cuartel del Colegio Militar de la Nación a los '.$DiaH2. ' Días del mes de '.$MesH2.' del año  '.$AnioH2.' siendo las '.$HoraH2.' horas '.$MinH2 .' y en cumplimiento de la orden precedente del Subdirector del Colegio Militar de la Nación de fecha '.$DiaOrdenH2.' '.$MesOrdenH2.' '.$AnioOrdenH2.'se labra la presente a los efectos de dejar constancia que quien suscribe asume la intervención en estos actuados con la finalidad de tramitar la Actuación Administrativa determinada en el Art 12 del decreto 2666/12 motivada por la pérdida de efectos de '.$DescripCargoH2.' con cargo del '.$GradoResponsableH1.' '.$NombreResponsableH1.' '.$ApellidoResponsableH1. '(DNI: '.$DniResponsableH1.') perteneciente a este Instituto.' ,$Hoja2Fuente1,$estiloParrafoH1);
        $segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);
        $segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);
        $segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);
        $segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);
        $segundaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);


        $segundaHoja ->addText('	                    '.$GradOI.' '.$ArmaOI.' '.$NombreOI.' '.$ApellidoOI.'	' ,$Hoja2Fuente3,$estiloParrafoH2);
        $segundaHoja ->addText('       Oficial Informante',$Hoja2Fuente3,$estiloParrafoH2);





///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//========================================= TERCERA HOJA ===========================================================================
//--------------------------------------------------------------------------------------------------------------------------------------


        $terceraHoja = $phpWord->addSection($sectionStyle);

//header
        $H2header=$terceraHoja->addHeader();
        $H2header->addImage('img/circuloNO.png',array('width'=>100,'height'=>100,'marginTop'=>-1,'marginLeft'=>55,'wrappingSyte'=>'infront','align'=>'right'));

//estilos de parrafos
        $estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
        $estiloParrafoH2=array('align' => 'right', 'spaceBefore' => 0,'spaceAfter' => 0);
        $estiloParrafoH3=array('align' => 'center', 'spaceBefore' => 0,'spaceAfter' => 0);
//estilos de fuentes
        $Hoja3Fuente1 = array('size' => 12,'name'=>'Times New Roman');
        $Hoja3Fuente2 = array('size' => 12,'bold' => true,'name'=>'single','name'=>'arial');
        $Hoja3Fuente3 = array('size' => 12,'bold' => true,'name'=>'Times New Roman');
        $Hoja3Fuente4 = array('size' => 9,'bold' => true,'name'=>'arial');


//variables
//Fecha
        $DiaH3= $this->input->get('DiaH3');
        $MesH3= $this->input->get('MesH3');
        $AnioH3= $this->input->get('AnioH3');

//Documentacion agregada
        $FormSRE137= $this->input->get('FormSRE137');
        $FormularioSRE137= $this->input->get('FormularioSRE137');
        $PON= $this->input->get('PON');


//parte de encabezado del texto
        $textrun = $terceraHoja->addTextRun($estiloParrafoH1);
        $textrun->addText('   Ejército Argentino                       ',$fuenteStyle1);
        $textrun->addText('');
        $textrun->addText('                            2019 - AÑO DE LA EXPORTACIÓN'           ,$fuenteStyle2,$estiloParrafoH1);
        $terceraHoja->addText('Colegio Militar de la Nación',$fuenteStyle3,$estiloParrafoH1);
        $terceraHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);

//cuerpo del texto
        $terceraHoja->addText('C.E. Letra '.$letraExp.' Nro. '.$NroExpH1,$Hoja3Fuente1,$estiloParrafoH2);
        $terceraHoja->addText(' ',$Hoja3Fuente1,$estiloParrafoH2);
        $terceraHoja ->addText('	    Diligencia Agregando',$Hoja3Fuente2,$estiloParrafoH1);
        $terceraHoja ->addText('	Documentación',$Hoja3Fuente2,$estiloParrafoH1);
        $terceraHoja->addText(' ',$fuenteStyle1,$estiloParrafoH2);


        $terceraHoja ->addText('		'.'En la Ciudad de El Palomar, Cuartel del Colegio Militar de la Nación a los' .$DiaH3.' de '.$MesH3.' del año '.$AnioH3 .', se labra la presente a efectos de agregar: Formulario SRE 137 (Orden de Provisión y Transferencia) de fecha 30Mar15 de UNA (1) '.$FormSRE137.' Fs: Formulario SRE 137 (Orden de Provisión y Transferencia) de fecha 15Abr15 de UNA (1) '.$FormularioSRE137.' Fs y PROCEDIMIENTO OPERATIVO NORMAL Nro. 01/16 (Régimen Funcional de Logística del Cu Grl/Cdo Br Aerot IV) de DIESCISIETE (17) Fs '.$PON.'',$Hoja3Fuente1,$estiloParrafoH1);
        $terceraHoja->addText('');
        $terceraHoja->addText('');
        $terceraHoja->addText('');
        $terceraHoja->addText('');



        $terceraHoja -> addText('                                                                                                                                      '.'CP Aud Emiliano ZITO'.'           ',$Hoja3Fuente4,$estiloParrafoH1);
        $terceraHoja -> addText('                                                                                                                                    Oficial Auditor Instructor',$Hoja3Fuente4,$estiloParrafoH1);

///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//========================================= CUARTA HOJA ===========================================================================
//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------//--------------------------------------------------------------------------------------------------------------------------------------//--------------------------------------------------------------------------------------------------------------------------------------//--------------------------------------------------------------------------------------------------------------------------------------

        $cuartaHoja = $phpWord->addSection($sectionStyle);

//header
        $H2header=$cuartaHoja->addHeader();
        $H2header->addImage('img/circuloNO.png',array('width'=>100,'height'=>100,'marginTop'=>-1,'marginLeft'=>55,'wrappingSyte'=>'infront','align'=>'right'));


//estilos de parrafos
        $estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
        $estiloParrafoH2=array('align' => 'right', 'spaceBefore' => 0,'spaceAfter' => 0);
        $estiloParrafoH3=array('align' => 'center', 'spaceBefore' => 0,'spaceAfter' => 0);
//estilos de fuentes
        $Hoja4Fuente1 = array('size' => 12,'name'=>'Times New Roman');
        $Hoja4Fuente2 = array('size' => 12,'bold' => true,'underline'=>'single','name'=>'arial');
        $Hoja4Fuente3 = array('size' => 12,'bold' => true,'name'=>'Times New Roman');
        $Hoja4Fuente4 = array('size' => 8,'bold' => true,'name'=>'arial');


//variables
        $DiaH4= $this->input->get('var4a1');
        $MesH4= $this->input->get('var4a2');
        $anioH4= $this->input->get('var4a3');
        $HoraH4= $this->input->get('var4a4');
        $MinH4= $this->input->get('var4a5');


//vbles informacion del testigo 1
        $gradoTest1	= $this->input->get('var4b1');
        $armaTest1	= $this->input->get('var4b2');
        $nomTest1	= $this->input->get('var4b3');
        $apeTest1	= $this->input->get('var4b4');
        $edadTest1= $this->input->get('var4b5');
        $dniTest1= $this->input->get('var4b6');
        $estTest1= $this->input->get('var4b7');
        $domTest1= $this->input->get('var4b8');
        $proTest1= $this->input->get('var4b9');
        $pdiTest1= $this->input->get('var4b10');
        $bienTest1= $this->input->get('var4b11');


//vbles preguntas al testigo 1
        $preg1Test1= $this->input->get('var4c1');
        $preg2Test1= $this->input->get('var4c2');
        $preg3Test1= $this->input->get('var4c3');
        $preg4Test1= $this->input->get('var4c4');
        $preg5Test1= $this->input->get('var4c5');
        $preg5Test1b= $this->input->get('var4c5b');
        $preg6Test1= $this->input->get('var4c6');
        $preg7Test1= $this->input->get('var4c7'); //Reveer por si Acaso
        $preg8Test1= $this->input->get('var4c8');



//parte de encabezado del texto
        $textrun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $textrun->addText('   Ejército Argentino                  ',$fuenteStyle1);
        $textrun->addText('');
        $textrun->addText('                            2019 - AÑO DE LA EXPORTACIÓN'           ,$fuenteStyle2,$estiloParrafoH1);
        $cuartaHoja->addText('Colegio Militar de la Nación',$fuenteStyle3,$estiloParrafoH1);


//cuerpo del texto
        $cuartaHoja->addText('C.E. Letra '.$letraExp.' Nro. '.$NroExpH1,$Hoja4Fuente1,$estiloParrafoH2);
        $cuartaHoja->addText(' ',$Hoja4Fuente1,$estiloParrafoH2);
        $cuartaHoja->addText('ACTA DE DECLARACIÓN DEL TESTIGO 1 ',$Hoja4Fuente2,$estiloParrafoH3);






        $cuartaHoja->addText('		'.'En la ciudad de EL PALOMAR, asiento del, siendo las '.$HoraH4.' horas con '.$MinH4.' minutos del Día '.$DiaH4.' de ' .$MesH4.' del año '.$anioH4 .' comparece ante mí el ' .$gradoTest1.', DNI' .$dniTest1.' quien se desempeña como ' 	.$ArmaCausanteH1.' quién convenientemente interrogado dice llamarse ' .$nomTest1.' '.$apeTest1. ' como queda dicho, ser argentino, de ' .$edadTest1. ' años de edad, de profesión militar, actualmente en actividad, de estado civil ' .$estTest1. ' ,con domicilio real en ' .$domTest1. ' ,provincia de ' .$proTest1. ' Acto seguido se le hace saber a la misma que se le recibirá declaración testimonial en el marco de la Actuación ' .$pdiTest1. ' Administrativa prevista en el Artículo 12 del Decreto 2666/12, a los fines de recabar mayor información sobre los hechos que motivaron la ' .$bienTest1. ' del bien.' ,$Hoja4Fuente1,$estiloParrafoH1);
        $cuartaHoja->addText('');


//Preguntas
//preg 1
        $Preg1TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $Preg1TxtRun ->addText('1. A la pregunta: ',$Hoja4Fuente3);
        $Preg1TxtRun ->addText('¿Cómo se produjo la perdida/destrucción/ inutilización del Efecto?' ,$Hoja4Fuente1);

        $ResPreg1TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $ResPreg1TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg1TxtRun ->addText($preg1Test1,$Hoja4Fuente1);

        $cuartaHoja->addText('');

//preg2
        $Preg2TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $Preg2TxtRun ->addText('2. A la pregunta: ',$Hoja4Fuente3);
        $Preg2TxtRun ->addText('¿Cuando se produjo el hecho?' ,$Hoja4Fuente1);

        $ResPreg2TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $ResPreg2TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg2TxtRun ->addText($preg2Test1,$Hoja4Fuente1);

        $cuartaHoja->addText('');

//preg3
        $Preg3TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $Preg3TxtRun ->addText('3. A la pregunta: ',$Hoja4Fuente3);
        $Preg3TxtRun ->addText('¿Quién era el responsable del bien perdido/deteriorado/destruido? ',$Hoja4Fuente1);

        $ResPreg3TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $ResPreg3TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg3TxtRun ->addText($preg3Test1,$Hoja4Fuente1);


        $cuartaHoja->addText('');

//preg4
        $Preg4TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $Preg4TxtRun ->addText('4. A la pregunta: ',$Hoja4Fuente3);
        $Preg4TxtRun ->addText('¿Dónde se produjo el hecho que motivó la pérdida/destrucción/inutilzación?' ,$Hoja4Fuente1);

        $ResPreg4TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $ResPreg4TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg4TxtRun ->addText($preg4Test1,$Hoja4Fuente1);

        $cuartaHoja->addText('');

//preg5
        $Preg5TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $Preg5TxtRun ->addText('5. A la pregunta: ',$Hoja4Fuente3);
        $Preg5TxtRun ->addText('¿Qué actividades se encontraba desarrollando cuando se produjo la novedad? ¿Estaba ordenada?' ,$Hoja4Fuente1);

        $ResPreg5TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $ResPreg5TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg5TxtRun ->addText($preg5Test1,$Hoja4Fuente1);



        $cuartaHoja->addText('');

//preg6
        $Preg6TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $Preg6TxtRun ->addText('6. A la pregunta: ',$Hoja4Fuente3);
        $Preg6TxtRun ->addText('¿Quíenes fueron testigo de lo ocurrido?' ,$Hoja4Fuente1);

        $ResPreg6TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $ResPreg6TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg6TxtRun ->addText($preg6Test1,$Hoja4Fuente1);



        $cuartaHoja->addText('');


//preg7
        $Preg7TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $Preg7TxtRun ->addText('7. A la pregunta: ',$Hoja4Fuente3);
        $Preg7TxtRun ->addText('¿Usted entregó dicho equipo a alguien?. Y de ser así ¿a quien se lo entregó?' ,$Hoja4Fuente1);

        $ResPreg7TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $ResPreg7TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg7TxtRun ->addText($preg7Test1,$Hoja4Fuente1);



        $cuartaHoja->addText('');


//preg8
        $Preg8TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $Preg8TxtRun ->addText('8. A la pregunta: ',$Hoja4Fuente3);
        $Preg8TxtRun ->addText('¿Tiene algo que agregar, quitar o enmendar a lo anteriormente declarado?' ,$Hoja4Fuente1);

        $ResPreg8TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $ResPreg8TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg8TxtRun ->addText($preg8Test1,$Hoja4Fuente1);



        $cuartaHoja->addText('');

        $sello1TxtRun = $cuartaHoja->addTextRun($estiloParrafoH1);
        $sello1TxtRun -> addText('         '.$gradoTest1.' '.$armaTest1.' '.$nomTest1.' '.$apeTest1.' ' ,$Hoja3Fuente4,$estiloParrafoH1);
        $sello1TxtRun -> addText('                                                                  '.$GradOI.' '.$ArmaOI.' '.$NombreOI.' '.$ApellidoOI,$Hoja3Fuente4,$estiloParrafoH1);

        $sello1TxtRun1 = $cuartaHoja->addTextRun($estiloParrafoH1);
        $sello1TxtRun1 -> addText('            Testigo 						',$Hoja3Fuente4,$estiloParrafoH1);
        $sello1TxtRun1 -> addText('     Oficial Informante',$Hoja3Fuente4,$estiloParrafoH1);


///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//============================================== 	QUINTA HOJA 	========================================================
//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------//--------------------------------------------------------------------------------------------------------------------------------------//--------------------------------------------------------------------------------------------------------------------------------------//--------------------------------------------------------------------------------------------------------------------------------------

        $quintaHoja = $phpWord->addSection($sectionStyle);

//header
        $H2header=$quintaHoja->addHeader();
        $H2header->addImage('img/circuloNO.png',array('width'=>100,'height'=>100,'marginTop'=>-1,'marginLeft'=>55,'wrappingSyte'=>'infront','align'=>'right'));

//estilos de parrafos
        $estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
        $estiloParrafoH2=array('align' => 'right', 'spaceBefore' => 0,'spaceAfter' => 0);
        $estiloParrafoH3=array('align' => 'center', 'spaceBefore' => 0,'spaceAfter' => 0);
//estilos de fuentes
        $Hoja5Fuente1 = array('size' => 12,'name'=>'Times New Roman');
        $Hoja5Fuente2 = array('size' => 12,'bold' => true,'underline'=>'single','name'=>'arial');
        $Hoja5Fuente3 = array('size' => 12,'bold' => true,'name'=>'Times New Roman');
        $Hoja5Fuente4 = array('size' => 8,'bold' => true,'name'=>'arial');


//variables
        $DiaH5= $this->input->get('var5a1');
        $MesH5= $this->input->get('var5a2');
        $anioH5= $this->input->get('var5a3');
        $HoraH5= $this->input->get('var5a4');
        $MinH5= $this->input->get('var5a5');

//vbles informacion del testigo 2
        $gradoTest2= $this->input->get('var5b1');
        $armaTest2= $this->input->get('var5b2');
        $nomTest2= $this->input->get('var5b3');
        $apeTest2= $this->input->get('var5b4');
        $edadTest2= $this->input->get('var5b5');
        $dniTest2= $this->input->get('var5b6');
        $estTest2= $this->input->get('var5b7');
        $domTest2= $this->input->get('var5b8');
        $proTest2= $this->input->get('var5b9');
        $pdiTest2= $this->input->get('var5b10');
        $bienTest2= $this->input->get('var5b11');

//vbles preguntas al testigo 2
        $preg1Test2= $this->input->get('var5c1');
        $preg2Test2= $this->input->get('var5c2');
        $preg3Test2= $this->input->get('var5c3');
        $preg4Test2= $this->input->get('var5c4');
        $preg5Test2= $this->input->get('var5c5');
        $preg5Test2b= $this->input->get('var5c5b');
        $preg6Test2= $this->input->get('var5c6');
        $preg7Test2= $this->input->get('var5c7');
        $preg8Test2= $this->input->get('var5c8');




//parte de encabezado del texto
        $textrun = $quintaHoja->addTextRun($estiloParrafoH1);
        $textrun->addText('   Ejército Argentino                  ',$fuenteStyle1);
        $textrun->addText('');
        $textrun->addText('2019 - AÑO DE LA EXPORTACIÓN',$fuenteStyle2,$estiloParrafoH1);
        $quintaHoja->addText('Colegio Militar de la Nación',$fuenteStyle3,$estiloParrafoH1);

//cuerpo del texto
        $quintaHoja->addText('C.E. Letra '.$letraExp.' Nro. '.$NroExpH1,$Hoja4Fuente1,$estiloParrafoH2);
        $quintaHoja->addText(' ',$Hoja4Fuente1,$estiloParrafoH2);
        $quintaHoja->addText('ACTA DE DECLARACIÓN DEL TESTIGO 2 ',$Hoja4Fuente2,$estiloParrafoH3);



        $quintaHoja->addText('		'.'En la ciudad de EL PALOMAR, asiento del, siendo las '.$HoraH5.' horas con '.$MinH5.' minutos del dia '.$DiaH5.' de '.$MesH5.' del año '.$anioH5.' comparece ante mi el '.$gradoTest2.' , DNI '.$dniTest2.' quien se desempeña como '.$armaTest2.' quién convenientemente interrogado dice llamarse '.$nomTest2.' '.$apeTest2.' como queda dicho, ser argentino, de '.$edadTest2.' años de edad, de profesión militar, actualmente en actividad, de estado civil '.$estTest2.',con domicilio real en '. $domTest2.', provincia de '.$proTest2.' Acto seguido se le hace saber a la misma que se le recibirá declaración testimonial en el marco de la Actuación '.$pdiTest2.' Administrativa prevista en el Artículo 12 del Decreto 2666/12, a los fines de recabar mayor información sobre los hechos que motivaron la '.$bienTest2.' del bien.' ,$Hoja4Fuente1,$estiloParrafoH1);
        $quintaHoja->addText('');

//Preguntas
//preg 1
        $Preg1TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $Preg1TxtRun ->addText('1. A la pregunta: ',$Hoja4Fuente3);
        $Preg1TxtRun ->addText('¿Cómo se produjo la perdida/destrucción/ inutilización del Efecto?' ,$Hoja4Fuente1);

        $ResPreg1TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $ResPreg1TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg1TxtRun ->addText($preg1Test1,$Hoja4Fuente1);

        $quintaHoja->addText('');

//preg2
        $Preg2TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $Preg2TxtRun ->addText('2. A la pregunta: ',$Hoja4Fuente3);
        $Preg2TxtRun ->addText('¿Cuando se produjo el hecho?' ,$Hoja4Fuente1);

        $ResPreg2TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $ResPreg2TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg2TxtRun ->addText($preg2Test1,$Hoja4Fuente1);

        $quintaHoja->addText('');

//preg3
        $Preg3TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $Preg3TxtRun ->addText('3. A la pregunta: ',$Hoja4Fuente3);
        $Preg3TxtRun ->addText('¿Quién era el responsable del bien perdido/deteriorado/destruido? ',$Hoja4Fuente1);

        $ResPreg3TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $ResPreg3TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg3TxtRun ->addText($preg3Test1,$Hoja4Fuente1);


        $quintaHoja->addText('');

//preg4
        $Preg4TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $Preg4TxtRun ->addText('4. A la pregunta: ',$Hoja4Fuente3);
        $Preg4TxtRun ->addText('¿Dónde se produjo el hecho que motivó la pérdida/destrucción/inutilización?' ,$Hoja4Fuente1);

        $ResPreg4TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $ResPreg4TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg4TxtRun ->addText($preg4Test1,$Hoja4Fuente1);

        $quintaHoja->addText('');

//preg5
        $Preg5TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $Preg5TxtRun ->addText('5. A la pregunta: ',$Hoja4Fuente3);
        $Preg5TxtRun ->addText('¿Qué actividades se encontraba desarrollando cuando se produjo la novedad? ¿Estaba ordenada?' ,$Hoja4Fuente1);

        $ResPreg5TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $ResPreg5TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg5TxtRun ->addText($preg5Test1,$Hoja4Fuente1);

        $quintaHoja->addText('');

//preg6
        $Preg6TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $Preg6TxtRun ->addText('6. A la pregunta: ',$Hoja4Fuente3);
        $Preg6TxtRun ->addText('¿Quíenes fueron testigo de lo ocurrido?' ,$Hoja4Fuente1);

        $ResPreg6TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $ResPreg6TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg6TxtRun ->addText($preg6Test2,$Hoja4Fuente1);

        $quintaHoja->addText('');


//preg7
        $Preg7TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $Preg7TxtRun ->addText('7. A la pregunta: ',$Hoja4Fuente3);
        $Preg7TxtRun ->addText('¿Usted entregó dicho equipo a alguien, y de ser así a quíen se lo entregó' ,$Hoja4Fuente1);

        $ResPreg7TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $ResPreg7TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg7TxtRun ->addText($preg7Test2,$Hoja4Fuente1);

        $quintaHoja->addText('');

//preg8
        $Preg8TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $Preg8TxtRun ->addText('8. A la pregunta: ',$Hoja4Fuente3);
        $Preg8TxtRun ->addText('¿Tiene algo que agregar, quitar o enmendar a lo anteriormente declarado?' ,$Hoja4Fuente1);

        $ResPreg8TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $ResPreg8TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg8TxtRun ->addText($preg8Test2,$Hoja4Fuente1);


        $quintaHoja->addText('');

        $sello1TxtRun = $quintaHoja->addTextRun($estiloParrafoH1);
        $sello1TxtRun -> addText('				'.$gradoTest2.' '.$armaTest2.' '.$nomTest2.' '.$apeTest2.' 			' ,$Hoja3Fuente4,$estiloParrafoH1);
        $sello1TxtRun -> addText(                   $GradOI.' '.$ArmaOI.' '.$NombreOI.' '.$ApellidoOI,$Hoja3Fuente4,$estiloParrafoH1);

        $sello1TxtRun1 = $quintaHoja->addTextRun($estiloParrafoH1);
        $sello1TxtRun1 -> addText('				Testigo 		               ',$Hoja3Fuente4,$estiloParrafoH1);
        $sello1TxtRun1 -> addText('                     Oficial Informante',$Hoja3Fuente4,$estiloParrafoH1);

///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//=======================================			SEXTA HOJA   ======================================================================
//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------

        $sextaHoja = $phpWord->addSection($sectionStyle);

//header
        $H2header=$sextaHoja->addHeader();
        $H2header->addImage('img/circuloNO.png',array('width'=>100,'height'=>100,'marginTop'=>-1,'marginLeft'=>55,'wrappingSyte'=>'infront','align'=>'right'));

//estilos de parrafos
        $estiloParrafoH1=array('align' => 'left', 'spaceBefore' => 0,'spaceAfter' => 0);
        $estiloParrafoH2=array('align' => 'right', 'spaceBefore' => 0,'spaceAfter' => 0);
        $estiloParrafoH3=array('align' => 'center', 'spaceBefore' => 0,'spaceAfter' => 0);
//estilos de fuentes
        $Hoja6Fuente1 = array('size' => 12,'name'=>'Times New Roman');
        $Hoja6Fuente2 = array('size' => 12,'bold' => true,'underline'=>'single','name'=>'arial');
        $Hoja6Fuente3 = array('size' => 12,'bold' => true,'name'=>'Times New Roman');
        $Hoja6Fuente4 = array('size' => 10,'bold' => true,'name'=>'Times New Roman');
        $Hoja6Fuente5 = array('size' => 8,'bold' => true,'name'=>'arial');

// //linea 1
//variables

//vbles preguntas al Director
        $preg1Test3= $this->input->get('var6c1');
        $preg2Test3= $this->input->get('var6c2');
        $preg3Test3= $this->input->get('var6c3');
        $preg4Test3= $this->input->get('var6c4');
        $preg5Test3= $this->input->get('var6c5');
        $preg6Test3= $this->input->get('var6c6');


//asistio al causante:
        $GradAC= $this->input->get('var6b1');
        $ArmaAC= $this->input->get('var6b2');
        $NomOAC= $this->input->get('var6b3');
        $ApeOAC= $this->input->get('var6b4');


//info del oficial informante
        $GradOI= $this->input->get('var2b1');
        $ArmaOI= $this->input->get('var2b2');
        $NomOI= $this->input->get('var2b3');
        $ApeOI= $this->input->get('var2b4');



//parte de encabezado del texto
        $textrun = $sextaHoja->addTextRun($estiloParrafoH1);
        $textrun->addText('   Ejército Argentino                  ',$fuenteStyle1);
        $textrun->addText('');
        $textrun->addText('2019 - AÑO DE LA EXPORTACIÓN',$fuenteStyle2,$estiloParrafoH1);
        $sextaHoja->addText('Colegio Militar de la Nación',$fuenteStyle3,$estiloParrafoH1);
        $sextaHoja ->addText(' ',$fuenteStyle3,$estiloParrafoH1);


//cuerpo del texto
        $sextaHoja->addText('C.E. Letra '.$letraExp.' Nro. '.$NroExpH1,$Hoja2Fuente1,$estiloParrafoH2);

        $sextaHoja ->addText('',$Hoja2Fuente2,$estiloParrafoH1);
        $sextaHoja ->addText('',$Hoja2Fuente2,$estiloParrafoH1);

        $sextaHoja ->addText('AL DIRECTOR DEL COLEGIO MILITAR DE LA NACIÓN:',$Hoja6Fuente3,$estiloParrafoH1);

        $sextaHoja ->addText('',$Hoja2Fuente2,$estiloParrafoH1);


        $sextaHoja->addText('		'.'Elevo a usted el presente expediente relacionado con motivo de la pérdida de efectos de '.$DescripCargoH2.' con cargo del '.$GradCausanteH1.' '.$ArmaCausanteH1.' '.$NomCausanteH1.' '.$ApeCausanteH1.' (DNI: '.$DniResponsableH1.')'. 'de cuyas constancias resultan:' ,$Hoja6Fuente1,$estiloParrafoH1);
        $sextaHoja->addText('');

//Preguntas
//preg 1
        $Preg1TxtRun = $sextaHoja->addTextRun($estiloParrafoH1);
        $Preg1TxtRun ->addText('1. A la pregunta: ',$Hoja4Fuente3);
        $Preg1TxtRun ->addText('1.	¿La novedad de la pérdida del efecto en cuestión surgió en circunstancias en que dicho efecto fue utilizado durante actividades de instrucción desarrolladas en ….?'  ,$Hoja4Fuente1);

        $ResPreg1TxtRun = $sextaHoja->addTextRun($estiloParrafoH1);
        $ResPreg1TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg1TxtRun ->addText($preg1Test3,$Hoja4Fuente1);

        $sextaHoja->addText('');

//preg2
        $Preg2TxtRun = $sextaHoja->addTextRun($estiloParrafoH1);
        $Preg2TxtRun ->addText('2. A la pregunta: ',$Hoja4Fuente3);
        $Preg2TxtRun ->addText('2. ¿Qué se informó la novedad a efectos de iniciar la Actuación Administrativa correspondiente?' ,$Hoja4Fuente1);

        $ResPreg2TxtRun = $sextaHoja->addTextRun($estiloParrafoH1);
        $ResPreg2TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg2TxtRun ->addText($preg2Test3,$Hoja4Fuente1);

        $sextaHoja->addText('');

//preg3
        $Preg3TxtRun = $sextaHoja->addTextRun($estiloParrafoH1);
        $Preg3TxtRun ->addText('3. A la pregunta: ',$Hoja4Fuente3);
        $Preg3TxtRun ->addText('¿Quiénes fueron testigos de la novedad? ',''.$nomTest1.''.$apeTest1.''.$nomTest2.''.$apeTest2.'',$Hoja4Fuente1);

        $ResPreg3TxtRun = $sextaHoja->addTextRun($estiloParrafoH1);
        $ResPreg3TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg3TxtRun ->addText($preg3Test3,$Hoja4Fuente1);


        $sextaHoja->addText('');

//preg4
        $Preg4TxtRun = $sextaHoja->addTextRun($estiloParrafoH1);
        $Preg4TxtRun ->addText('4. A la pregunta: ',$Hoja4Fuente3);
        $Preg4TxtRun ->addText('¿Está comprobado que la pérdida se produjo por la negligencia del CAUSANTE?',' '.$GradCausanteH1.''.$ArmaCausanteH1.' '.$NomCausanteH1.' '.$ApeCausanteH1.'', $Hoja4Fuente1);

        $ResPreg4TxtRun = $sextaHoja->addTextRun($estiloParrafoH1);
        $ResPreg4TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg4TxtRun ->addText($preg4Test3,$Hoja4Fuente1);

        $sextaHoja->addText('');

//preg5
        $Preg5TxtRun = $sextaHoja->addTextRun($estiloParrafoH1);
        $Preg5TxtRun ->addText('5. A la pregunta: ',$Hoja4Fuente3);
        $Preg5TxtRun ->addText('5.	Que no/si existiría  responsabilidad para y por obrar con negligencia en el cuidado del efecto (De no detectarse negligencia o culpa mencionarlo en este punto).' ,$Hoja4Fuente1);

        $ResPreg5TxtRun = $sextaHoja->addTextRun($estiloParrafoH1);
        $ResPreg5TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg5TxtRun ->addText($preg5Test3,$Hoja4Fuente1);


        $sextaHoja->addText('');

//preg6
        $Preg6TxtRun = $sextaHoja->addTextRun($estiloParrafoH1);
        $Preg6TxtRun ->addText('6. A la pregunta: ',$Hoja4Fuente3);
        $Preg6TxtRun ->addText('¿Que correspondería dictar el Acto Administrativo correspondiente?' ,$Hoja4Fuente1);

        $ResPreg6TxtRun = $sextaHoja->addTextRun($estiloParrafoH1);
        $ResPreg6TxtRun ->addText('DIJO: ',$Hoja4Fuente3);
        $ResPreg6TxtRun ->addText($preg6Test3,$Hoja4Fuente1);


        $sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);
        $sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);
        $sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);
        $sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);
        $sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);
        $sextaHoja ->addText('',$Hoja6Fuente1,$estiloParrafoH2);

        $sextaHoja ->addText('	'.$GradOI.' '.$ArmaOI.' '.$NomOI.' '.$ApeOI ,$Hoja6Fuente4,$estiloParrafoH2);
        $sextaHoja ->addText('	'.'Oficial Informante 	' ,$Hoja6Fuente4,$estiloParrafoH2);






///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
// ------------------------------------------------------------------------------------------------------------------------------------
//=========================================== guardamos el texto en un archivo ========================================================
//--------------------------------------------------------------------------------------------------------------------------------------
///####################################################################################################################################
///####################################################################################################################################
///####################################################################################################################################
//

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($filename);
// Download the file:
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment;filename=temp_.docx');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename));
        ob_clean();
        flush();
        $status = readfile($filename);
        unlink($filename);
        exit;

    }


}//ultima llave de la clase
