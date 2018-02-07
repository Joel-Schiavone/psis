
<?php
	  include_once('inc/conectar.php');
  include_once('inc/classes.php');
  include_once('inc/classesExclusivas.php');
	$nonconformita         = new nonconformita;
	$nonconformitaE 	   = new nonconformitaE;

  $reciveFecha=$_POST['fecha'];
  $fechaSinEspacios=str_replace(" ","",$reciveFecha);
  $fechaSinEspacios2=substr($fechaSinEspacios, 4);
  $fechaDividida=explode("-",$fechaSinEspacios2);

  $fechaInicio=$fechaDividida[0];
  $fechaInicioCambioDeSignos=str_replace( "/" , "-" ,$fechaInicio);
  $fechaInicioFormateda=date("Y-m-d",strtotime($fechaInicioCambioDeSignos));
  $fecDesde=$fechaInicioFormateda . " 00:00:00";

  $fechafin=$fechaDividida[1];
  $fechafinCambioDeSignos=str_replace( "/" , "-" ,$fechafin);
  $fechaFinFormateda=date("Y-m-d",strtotime($fechafinCambioDeSignos));
  $fecHasta=$fechaFinFormateda . " 23:59:59";

  	$get_nonconformita     = $nonconformitaE->get_nonconformita($fecDesde, $fecHasta);
	$num_get_nonconformita = mysql_num_rows($get_nonconformita);
?>
<!--Fin: Documentos requeridos -->
<!--Inicio: classes -->
<style type="text/css">
	th
	{
		text-align: center;
	}
</style>
<!--Fin: classes -->
<!--Inicio: Contenedor principal -->


<div class="container-fluid" style="text-align: center;">

		<table id="listado" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>DATA ANOMALIA</th>
                        <th>DATA CHIUSURA</th>
                        <th>SERVICE REPORT</th>
                        <th>CLIENTE</th>
                        <th>PRESIDIO</th>
                        <th>REPARTO</th>
                        <th>ARTICULO</th>
                        <th>DEXX ANOMALIA</th>
                        <th>KIT APERTO</th>
                        <th>QUANTITA APERTI</th>
                        <th>ANALISIS NC</th>
                        <th>AZZIONI</th>
                        <th>DEXX ASS</th>
                        <th>MODIFICARE</th>
                        <th>ELIMINARE</th>
                    </tr> 
                </thead>
                <tfoot>
                    <tr>
                        <th>DATA ANOMALIA</th>
                        <th>DATA CHIUSURA</th>
                        <th>SERVICE REPORT</th>
                        <th>CLIENTE</th>
                        <th>PRESIDIO</th>
                        <th>REPARTO</th>
                        <th>ARTICULO</th>
                        <th>DEXX ANOMALIA</th>
                        <th>KIT APERTO</th>
                        <th>QUANTITA APERTI</th>
                        <th>ANALISIS NC</th>
                        <th>AZZIONI</th>
                        <th>DEXX ASS</th>
                        <th>MODIFICARE</th>
                        <th>ELIMINARE</th>
                    </tr>
                </tfoot>
                <tbody>
                	
	                	<?php 
	                			for ($count=0; $count < $num_get_nonconformita; $count++) 
								{ 
									$assoc_nomconformita = mysql_fetch_assoc($get_nonconformita);
									echo "<tr><th>".$assoc_nomconformita['DATA_ANOMALIA']."</th>";
			                        echo "<th>".$assoc_nomconformita['DATA_CHIUSURA']."</th>";
			                        echo "<th>".$assoc_nomconformita['SERVICE_REPORT']."</th>";
			                        echo "<th>".$assoc_nomconformita['CLIENTE']."</th>";
			                        echo "<th>".$assoc_nomconformita['PRESIDIO']."</th>";
			                        echo "<th>".$assoc_nomconformita['REPARTO']."</th>";
			                        echo "<th>".$assoc_nomconformita['ARTICULO']."</th>";
			                        echo "<th>".$assoc_nomconformita['DEXX_ANOMALIA']."</th>";
			                        echo "<th>".$assoc_nomconformita['KIT_APERTO']."</th>";
			                        echo "<th>".$assoc_nomconformita['QUANTITA_APERTI']."</th>";
			                        echo "<th>".$assoc_nomconformita['ANALISIS_NC']."</th>";
			                        echo "<th>".$assoc_nomconformita['AZZIONI']."</th>";
			                        echo "<th>".$assoc_nomconformita['DEXX_ASS']."</th>";
			                        echo "<th><buttons class='btn btn-primary'><i class='material-icons'>edit</i></buttons></th>";
			                        echo "<th><buttons class='btn btn-danger'><i class='material-icons'>delete_forever</i></buttons></th></tr>";
								}
						?>

                </tbody>
            </table>

</div>
<!--Fin: Contenedor principal -->


     <script type='text/javascript'>

    $(document).ready( function () {
    $('#listado').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'print',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                download: 'open'
            }
        ],
        responsive: true,
       
    });
    });

     </script>
  

<!--Inicio: Footer -->
<?php
	include("modulos/footer.php"); 
?>
<!--Fin: Footer -->
