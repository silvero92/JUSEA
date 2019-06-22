<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorJusea extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('JuseaModelo');
		
	}

	public function obtenerInfracciones(){
		$prueba= $this->input->post('nombre');//capturamos el valor del dato ingresado en el form
		$radio=$this->input->post('radio');
		if($radio=='dni'){
			$data['infracciones'] = $this->JuseaModelo->obtenerInfraccionesPorDni($prueba);
			if(!$data['infracciones']==null)
  				$this->load->view('SanmeaVistas/tabla',$data);
  			else
  				$this->load->view('SanmeaVistas/error');
		}
		if($radio=='apellido'){
			$data['infracciones']= $this->JuseaModelo->obtenerInfraccionesPorApellido($prueba);
  			if(!$data['infracciones']==null)
  				$this->load->view('SanmeaVistas/tabla',$data);
  			else
  				$this->load->view('SanmeaVistas/error');
  		}		

	}
	public function prueba(){
		$prueba= $this->input->post('prueba');
		$this->load->view('SanmeaVistas/tabla', $prueba);
	}

	public function modificarEncabezado(){
		$año= $this->input->post('año');
		$membrete= $this->input->post('membrete');
		$unidad= $this->input->post('unidad');
		//$data = array($año, $membrete, $unidad);
		$data = array(
    	'año' => $año,
    	'membrete' => $membrete,
    	'unidad' => $unidad
		);
		$this->JuseaModelo->modificarEncabezado($data);
		
		//$this->load->view('SanmeaVistas/Encabezado');
		//$this->load->view('SanmeaVistas/Encabezado');
	}
  
}