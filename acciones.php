<?php
session_start();
include_once('inc/conectar.php');
include_once('inc/classes.php');
include_once('inc/classesExclusivas.php');
$action=$_POST['action'];
$nonconformita = new nonconformita;
	if ($action=="nuevoRegistro")
	{
			
		$DATA_CHIUSURA 			=			$_POST['DATA_CHIUSURA'];
		$CLIENTE  				=			$_POST['CLIENTE'];
		$PRESIDIO  				=			$_POST['PRESIDIO'];
		$REPARTO 				=			$_POST['reparto'];
		$ARTICULO  				=			$_POST['ARTICOLO'];
		$DATA_ANOMALIA 			=			$_POST['DATA_ANOMALIA'];
		$DEXX_ANOMALIA 			=			$_POST['DEXX_ANOMALIA'];
		$DEXX_otro 				=			$_POST['DEXX_otro'];
		$KIT_APERTO 			=			$_POST['KIT_APERTO'];
		$QUANTITA_APERTI 		=			$_POST['QUANTITA_APERTI'];
		$AZZIONI 				=			$_POST['AZZIONI'];
		$AZZIONI_otro 			=			$_POST['AZZIONI_otro'];
		$DEXX_ASS 				=			$_POST['DEXX_ASS'];
		$ANALISIS_NC 			= 			0;
		
		if ($DEXX_ANOMALIA=="non perfetta tenuta del container" OR
			$DEXX_ANOMALIA=="non funzionalità dello strumentario in relazione alle caratteristiche d’uso" OR
			$DEXX_ANOMALIA=="presenza di macchie e/o di ruggine per usura dello strumentario" OR
			$DEXX_ANOMALIA=="Affilatura strumenti" OR
			$DEXX_ANOMALIA=="Ottica difettosa" OR
			$DEXX_ANOMALIA=="Richiesta trattamento antiruggine" OR
			$DEXX_ANOMALIA=="Strumenti da lubrificare" OR
			$DEXX_ANOMALIA=="Strum. danneggiato in S.O." OR
			$DEXX_ANOMALIA=="Non tenuta del D.M."
			 ) 
		{
			$SERVICE_REPORT	= "SI";		
		}
		else
		{
			$SERVICE_REPORT	= "NO";	
		}	
			
		$insert_nonconformita 			=$nonconformita->insert_nonconformita($DATA_ANOMALIA, $DATA_CHIUSURA, $SERVICE_REPORT, $CLIENTE, $PRESIDIO, $REPARTO, $ARTICULO, $DEXX_ANOMALIA, $KIT_APERTO, $QUANTITA_APERTI, $ANALISIS_NC, $AZZIONI, $DEXX_ASS);


      //REDIRECCIONA
       echo '<script type="text/javascript">
       window.location.assign("tabla.php?M=1");
      </script>';
	}


?>

