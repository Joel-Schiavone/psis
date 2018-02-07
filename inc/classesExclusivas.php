<?php 
	
	class especiales

	{
		function generaCodigo()
		{
							 //trae ultimo registro
							  $sql_nonconformita = 'SELECT * FROM nonconformita ORDER BY ID DESC LIMIT 1';
                              $result_nonconformita =mysql_query($sql_nonconformita);
                              $assoc_result_nonconformita=mysql_fetch_assoc($result_nonconformita);
                              $ID=$assoc_result_nonconformita['ID']+1;
                              $fecha=date('y');
                              echo $nuevoID=$ID."/".$fecha;
                              return; 
		}
	}
	class nonconformitaE
	{
		function get_nonconformita($fecDesde, $fecHasta)
		{
			$sql_nonconformita = 'SELECT * FROM nonconformita where DATA_ANOMALIA BETWEEN "'.$fecDesde.'" AND "'.$fecHasta.'" order by DATA_ANOMALIA DESC';
                              $result_nonconformita =mysql_query($sql_nonconformita);
                              return $result_nonconformita;
		}
	}


?>