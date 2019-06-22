<?php 

class JuseaModelo extends CI_Model{

	public function obtenerInfraccionesPorDni($prueba){
		$result = $this->db->query("SELECT p1.dni as 'dniinfractor',p1.nombre, p1.apellido, infraccion.motivo as 'motivo', infraccion.fechaComision as 'fecha', p2.dni AS 'dniinstructor', p2.nombre as nominst,p2.apellido as apinst from persona p1 	
			INNER JOIN sancion s1 on s1.idCausante=p1.idPersona
			INNER JOIN persona p2 on s1.idAutoridad= p2.idPersona
			INNER join infraccion on s1.idInfraccion=infraccion.idInfraccion
			WHERE p1.dni='$prueba'");
		if($result->num_rows()>0){
			return $result;
		}
	}
	public function obtenerInfraccionesPorApellido($prueba){
		$result = $this->db->query("SELECT p1.dni as 'dniinfractor', p1.nombre, p1.apellido ,infraccion.motivo as 'motivo', infraccion.fechaComision as 'fecha', p2.dni AS 'dniinstructor', p2.nombre as nominst,p2.apellido as apinst from persona p1 	
			INNER JOIN sancion s1 on s1.idCausante=p1.idPersona
			INNER JOIN persona p2 on s1.idAutoridad= p2.idPersona
			INNER join infraccion on s1.idInfraccion=infraccion.idInfraccion
			WHERE p1.apellido='$prueba'");
		if($result->num_rows()>0){
			return $result;
		}
	}
	public function insertarInfractor($data){
			return $this->db->insert('persona', $data);
	}
	public function insertarInstructor($data){
			return $this->db->insert('persona', $data);
		}
	public function insertarInfraccion($data){
			return $this->db->insert('infraccion', $data);
		}
	public function insertarSancion(){
		$infraccion=$this->db->query("SELECT max(idInfraccion) as max from infraccion");
		$causante=$this->db->query("SELECT max(idPersona) as max from persona WHERE situacion=2");
		$autoridad=$this->db->query("SELECT max(idPersona) as max from persona WHERE situacion=1");
		$data = array(
		'idInfraccion' => $infraccion->row()->max,
		'idCausante'=> $causante->row()->max,
		'idAutoridad'=> $autoridad->row()->max
    	);
    	return $this->db->insert('sancion', $data);
		}

	public function leerEncabezado(){
		$result = $this->db->query("SELECT año, membrete,unidad from encabezado");
		return $result;
	}	

	public function modificarEncabezado($data){
		/*$this->db->query("UPDATE encabezado 
		SET 'año' = año, membrete = membrete, unidad=$data[2]
		WHERE idEncabezado=1 ;");*/
		
	$this->db->update('encabezado', $data);

	

	echo "<script>alert('El encabezado fue modificado correctamente.');</script>";

 	redirect('SanmeaControlador', 'refresh');
	
	}
}
?>
 


