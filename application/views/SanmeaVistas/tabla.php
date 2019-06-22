<?php $this->load->view('SanmeaVistas/HistorialVista');  ?>

		<?php 
		if(!$infracciones==null){

			 	echo "<table class='table table-hover'>";
				  echo '<thead>
                   			<tr>
                    			<th colspan="3"><center>DATOS DEL INFRACTOR</center></th>
                    			<th colspan="2"><center>DATOS DE SANCION</center> </th>
                    			<th colspan="3"><center>IMPUESTA POR:</center></th>
                   			</tr>
                  		</thead>
                  		<thead>
                   			<tr>
                    			<th><center>DNI<center></th>
                    			<th><center>Nombre<center></th>
                    			<th><center>Apellido<center></th>
                    			<th><center>Motivo<center></th>
                    			<th><center>Fecha<center></th>
                    			<th><center>DNI<center></th>
                    			<th><center>Nombre<center></th>
                    			<th><center>Apellido<center></th>
                   			</tr>
                  		</thead>';

					$i=0;
				  foreach ($infracciones->result() as $infraccion) {

				  $dni = $infraccion->dniinfractor;
				  $nombre = $infraccion->nombre;
				  $apellido = $infraccion->apellido;
				  $motivo = $infraccion->motivo;
			  	  $fecha = $infraccion->fecha;
			  	  $instructordni = $infraccion->dniinstructor;
			  	  $instructornom = $infraccion->nominst;
			  	  $instructorap = $infraccion->apinst;	
				  echo '<tr>
				  		
				    	<td>'.$dni.'</td>
				    	<td>'.$nombre.'</td>
				    	<td>'.$apellido.'</td>
				    	<td>'.$motivo.'</td>
				    	<td>'.$fecha.'</td>
				    	<td>'.$instructordni.'</td>
				    	<td>'.$instructornom.'</td>
				    	<td>'.$instructorap.'</td>
				    	</tr>';
				    
				   }
				   echo "</table>";
				 }
	
		
		//echo $prueba;
		//foreach ($infracciones->result() as $infraccion) {
		//	echo $infraccion->dniinfractor;
		//}
		// ?> 
</body>
</html>