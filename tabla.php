<!--Inicio: Documentos requeridos -->
<?php
	include_once("inc/requerido.php"); 
  $especiales         = new especiales;
  $reparto            = new reparto;
  $get_reparto        = $reparto->get_reparto();
  $num_get_reparto    = mysql_num_rows($get_reparto);
if(@$_GET['M']==1)
{
 echo '<div class="alert alert-success alert-dismissable" style="margin-bottom:-2px;">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <i class="material-icons">thumb_up</i> salvato correttamente
</div>';
}
?>
<!--Fin: Documentos requeridos -->
<!--Inicio: classes -->

<!--Fin: classes -->
<!--Inicio: Contenedor principal -->


                            <!--Inicio Modal nueva cuenta-->                          
                            <div class="modal fade" id="nuevoRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                         <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel"><i class='material-icons'>add_box</i> NUOVO</h4>
                                          </div>
                                          <div class="modal-body">
                                             <form action="acciones.php" method="post" enctype="multipart/form-data">
                                                <fieldset>
                                                    <legend>MODULO</legend>
                                                        <input hidden type="text" name="action" value="nuevoRegistro">
                                                          
                                                        <div class="form-group">
                                                          <label for="exampleInputEmail1">DATA CHIUSURA</label>
                                                            <input type="text" name="DATA_CHIUSURA" id="DATA_CHIUSURA" value="<?php echo $generaCodigo=$especiales->generaCodigo();?>" readonly>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="exampleInputEmail1">CLIENTE</label>
                                                            <select name='CLIENTE' class="selectpicker" data-live-search="true" required>
                                                              <option value='AZIENDA OSPEDALIERA DI PADOVA'>AZIENDA OSPEDALIERA DI PADOVA </option>
                                                              <option value='ISTITUTO ONCOLOGICO VENETO'>ISTITUTO ONCOLOGICO VENETO</option>
                                                              <option value='AZIENDA ULSS N 9 SCALIGERA'>AZIENDA ULSS N 9 SCALIGERA</option>
                                                              <option value='AZIENDA ULSS N 6 EUGANEA'>AZIENDA ULSS N 6 EUGANEA</option>
                                                              <option value='AZIENDA ULSS N 9 SCALIGERA'>AZIENDA ULSS N 9 SCALIGERA</option>
                                                            </select>
                                                        </div>

                                                       <div class="form-group">
                                                          <label for="exampleInputEmail1">PRESIDIO</label>
                                                            <select name='PRESIDIO' class="selectpicker" data-live-search="true" required>
                                                              <option value='Ospedale San Bonifacio - Presidio'>Ospedale San Bonifacio - Presidio</option>
                                                              <option value='VR Distretto 4'>VR Distretto 4</option>
                                                              <option value='VR Distretto 1'>VR Distretto 1</option>
                                                              <option value='Verona Marzana - Presidio'>Verona Marzana - Presidio</option>
                                                              <option value='VR Distretto 2'>VR Distretto 2</option>
                                                              <option value='AOPD Policlinico'>AOPD Policlinico</option>
                                                              <option value='AOPD Ospedale Giustinianeo'>AOPD Ospedale Giustinianeo</option>
                                                              <option value='Ospedale Busonera IOV'>Ospedale Busonera IOV</option>
                                                              <option value='AOPD Monoblocco'>AOPD Monoblocco</option>
                                                              <option value='AOPD Pronto soccorso'>AOPD Pronto soccorso</option>
                                                              <option value='VR Distretto 1'>VR Distretto 1</option>
                                                              <option value='VR Distretto 3'>VR Distretto 3</option>
                                                              <option value='VR Distretto 2'>VR Distretto 2</option>
                                                              <option value='AOPD Pediatria'>AOPD Pediatria</option>
                                                              <option value='AOPD Clinica Ginecologica'>AOPD Clinica Ginecologica</option>
                                                              <option value='AOPD Gallucci'>AOPD Gallucci</option>
                                                              <option value='OSA Reparti'>OSA Reparti</option>
                                                              <option value='AOPD Neurochirurgia'>AOPD Neurochirurgia</option>
                                                              <option value='AOPD Divisione Ostetrica'>AOPD Divisione Ostetrica</option>
                                                              <option value='PDS Piastra Operatoria'>PDS Piastra Operatoria</option>
                                                              <option value='PDS Servizi'>PDS Servizi</option>
                                                              <option value='PDS Ambulatori'>PDS Ambulatori</option>
                                                              <option value='PDS Reparti'>PDS Reparti</option>
                                                              <option value='PD Distretto 3'>PD Distretto 3</option>
                                                              <option value='PD Distretto 6'>PD Distretto 6</option>
                                                              <option value='PD Distretto 1'>PD Distretto 1</option>
                                                              <option value='CARCERE DUE PALAZZI'>CARCERE DUE PALAZZI</option>
                                                              <option value='PD Distretto 4'>PD Distretto 4</option>
                                                              <option value='Hospice Mandria'>Hospice Mandria</option>
                                                              <option value='Ospedale ai Colli ULSS 16'>Ospedale ai Colli ULSS 16</option>
                                                              <option value='AOPD Ortopedia'>AOPD Ortopedia</option>
                                                              <option value='OSA Servizi'>OSA Servizi</option>
                                                              <option value='OSA Ambulatori'>OSA Ambulatori</option>
                                                              <option value='AOPD Gustavo Modena'>AOPD Gustavo Modena</option>
                                                              <option value='AOPD Ospedale S.Antonio'>AOPD Ospedale S.Antonio</option>
                                                              <option value='AOPD Infettivi'>AOPD Infettivi</option>
                                                              <option value='AOPD Pneumologia'>AOPD Pneumologia</option>
                                                              <option value='OSA Piastra Operatoria'>OSA Piastra Operatoria</option>
                                                              <option value='AOPD Dermatologia'>AOPD Dermatologia</option>
                                                              <option value='PD Distretto 2'>PD Distretto 2</option>
                                                              <option value='Ospedale di Conselve'>Ospedale di Conselve</option>
                                                              <option value='Radioterapia IOV'>Radioterapia IOV</option>
                                                              <option value='AOPD Ospedale ai Colli'>AOPD Ospedale ai Colli</option>
                                                              <option value='AOPD Campus v.Orus'>AOPD Campus v.Orus</option>
                                                              <option value='AOPD Suem'>AOPD Suem</option>
                                                              <option value='AOPD Semeiotica'>AOPD Semeiotica</option>
                                                              <option value='AOPD Ospedale Busonera'>AOPD Ospedale Busonera</option>
                                                              <option value='Casa Breda'>Casa Breda</option>
                                                              <option value='AOPD Palazzo Bolis'>AOPD Palazzo Bolis</option>
                                                              <option value='AOPD Hospice Pediatrico'>AOPD Hospice Pediatrico</option>
                                                              <option value='Istituto Maria Bambina'>Istituto Maria Bambina</option>
                                                              <option value='Residenza Santa Chiara'>Residenza Santa Chiara</option>
                                                              <option value='PD Distretto 5'>PD Distretto 5</option>
                                                              <option value='AOPD Psichiatria'>AOPD Psichiatria</option>
                                                              <option value='AOPD San Massimo'>AOPD San Massimo</option>
                                                              <option value='AOPD Chirurgia Pediatrica'>AOPD Chirurgia Pediatrica</option>
                                                              <option value='AO PADOVA PROG'>AO PADOVA PROG</option>
                                                              <option value='Ospedale Giustinianeo IOV'>Ospedale Giustinianeo IOV</option>
                                                              <option value='AOPD Odontoiatria'>AOPD Odontoiatria</option>
                                                              <option value='CASA DI CURA'>CASA DI CURA</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                          <label for="exampleInputEmail1">DESCRIZIONE DESTINATARIO</label>
                                                            <select name='reparto' class="selectpicker" data-live-search="true" required>
                                                              <?php 
                                                                for ($countB=0; $countB < $num_get_reparto; $countB++) 
                                                                { 
                                                                  $assoc_get_reparto=mysql_fetch_assoc($get_reparto);
                                                                  echo "<option value='".$assoc_get_reparto['red_desc']."'>".$assoc_get_reparto['red_desc']."</option>";
                                                                }
                                                              ?>
                                                            </select>
                                                        </div>

                                                         <div class="form-group">
                                                          <label for="exampleInputEmail1">ARTICOLO</label>
                                                            <select name='ARTICOLO' class="selectpicker" data-live-search="true" required>
                                                                  <option value='BUSTE A VAPORE'>BUSTE A VAPORE</option>
                                                                  <option value='BUSTE A ETO'>BUSTE A ETO</option>
                                                                  <option value='BUSTE A PEROSSIDO DI IDROGENO'>BUSTE A PEROSSIDO DI IDROGENO</option>
                                                                  <option value='KIT MINI'>KIT MINI</option>
                                                                  <option value='KIT COMODATO'>KIT COMODATO</option>
                                                                  <option value='KIT MOTORE'>KIT MOTORE</option>
                                                                  <option value='BUSTE A VAPORE OCL'>BUSTE A VAPORE OCL</option>
                                                                  <option value='KIT CONTAINER'>KIT CONTAINER</option>
                                                            </select>
                                                        </div>
                                                        

                                                         <div class="form-group">
                                                          <label for="exampleInputEmail1">DATA ANOMALIA</label>
                                                           <input type="date" name="DATA_ANOMALIA">
                                                        </div>  
    
                                                       <div class="form-group">
                                                          <label for="exampleInputEmail1">DEXX ANOMALIA</label>
                                                           <select name="DEXX_ANOMALIA" id="DEXX_ANOMALIA"  class="selectpicker show-tick" title="Choose one of the following...">

                                                              <option value="mancanza di dati identificativi del kit sterile/busta sterile:errore/mancanza data di scadenza">mancanza di dati identificativi del kit sterile/busta sterile:errore/mancanza data di scadenza</option>
                                                              <option value="assemblaggio container/coperchio sbagliato">assemblaggio container/coperchio sbagliato</option>
                                                              <option value="mancanza filtro sul coperchio">mancanza filtro sul coperchio</option>
                                                              <option value="mancanza del sigillo di imballo">mancanza del sigillo di imballo</option>
                                                              <option value="strum. errato">strum. errato</option>
                                                              <option value="strumento non apartenente al kit">strumento non apartenente al kit</option>
                                                              <option value="mancanza di strumento che pregiudica la funz. kit">mancanza di strumento che pregiudica la funz. kit</option>
                                                              <option value="strumenti mal posizionati nel kit / strum.mal confezionati">strumenti mal posizionati nel kit / strum.mal confezionati</option>
                                                              <option value="mancanza indicatore di sterilità all’interno del kit">mancanza indicatore di sterilità all’interno del kit</option>
                                                              <option value="indicatore di sterilità non visibile all’apertura del kit">indicatore di sterilità non visibile all’apertura del kit</option>
                                                              <option value="indicatore di processo non virato correttamente">indicatore di processo non virato correttamente</option>
                                                              <option value="documenti di consegna mancanti o errati">documenti di consegna mancanti o errati</option>
                                                              <option value="danno strum/dispositivo Comodato">danno strum/dispositivo Comodato</option>
                                                              <option value="la non conformità ha reso necessaria l’apertura di ulteriore">la non conformità ha reso necessaria l’apertura di ulteriore</option>
                                                              <option value="presenza di sporco  o corpi estranei: Strumenti">presenza di sporco  o corpi estranei: Strumenti </option>
                                                              <option value="presenza di sporco  o corpi estranei: Contanier">presenza di sporco  o corpi estranei: Contanier </option>
                                                              <option value="presenza di sporco  o corpi estranei: Box">presenza di sporco  o corpi estranei: Box </option>
                                                              <option value="bugiardino non presente o errato">bugiardino non presente o errato</option>
                                                              <option value="non corrispondenza del numero di kit sterili di strumentario chirurgico consegnati rispetto al numero di kit ordinati">non corrispondenza del numero di kit sterili di strumentario chirurgico consegnati rispetto al numero di kit ordinati</option>
                                                              <option value="mancata consegna strumentario imbustato">mancata consegna strumentario imbustato</option>
                                                              <option value="presenza di lacerazioni nella conf. o conf. bagnata">presenza di lacerazioni nella conf. o conf. bagnata</option>
                                                              <option value="rottura strumentario imbustato">rottura strumentario imbustato</option>
                                                              <option value="non rispetto dell’orario di ritiro dello strumentario utilizzato">non rispetto dell’orario di ritiro dello strumentario utilizzato</option>
                                                              <option value="non rispetto dell’orario di riconsegna del materiale sterile">non rispetto dell’orario di riconsegna del materiale sterile</option>
                                                              <option value="consegna di materiali non appartenenti all’U.O.">consegna di materiali non appartenenti all’U.O.</option>
                                                              <option value="errore nella modalità di sterilizzazione">errore nella modalità di sterilizzazione</option>

                                                              <option style="background: #5cb85c; color: #fff;">SERVICE REPORT </option>

                                                              <option value="non perfetta tenuta del container">non perfetta tenuta del container</option>
                                                              <option value="non funzionalità dello strumentario in relazione alle caratteristiche d’uso">non funzionalità dello strumentario in relazione alle caratteristiche d’uso</option>
                                                              <option value="presenza di macchie e/o di ruggine per usura dello strumentario">presenza di macchie e/o di ruggine per usura dello strumentario </option>
                                                              <option value="Affilatura strumenti">Affilatura strumenti</option>
                                                              <option value="Ottica difettosa">Ottica difettosa</option>
                                                              <option value="Richiesta trattamento antiruggine">Richiesta trattamento antiruggine</option>
                                                              <option value="Strumenti da lubrificare">Strumenti da lubrificare</option>
                                                              <option value="Strum. danneggiato in S.O.">Strum. danneggiato in S.O.</option>
                                                              <option value="Non tenuta del D.M.">Non tenuta del D.M.</option>
                                                              <option value="Altro">Altro</option>
                                                            </select>
                                                        </div>

                                                         <div class="form-group" id='otroA' style="display: none;">
                                                            <textarea  name='DEXX_otro' id='DEXX_otro' placeholder="CONTROLLO STRUMENTARIO ALL’ARRIVO IN CENTRALE">
                                                            </textarea>
                                                            
                                                             <script type="text/javascript">
                                                            $(document).ready(function(){
                                                              $('#DEXX_ANOMALIA').change(function(){
                                                                 var DEXX_ANOMALIA=$('#DEXX_ANOMALIA').val();
                                                                 if (DEXX_ANOMALIA=="Altro") 
                                                                 {
                                                                   $('#otroA').fadeIn(500);
                                                                 }
                                                                 else
                                                                 {
                                                                  $('#otroA').fadeOut(500);
                                                                 } 
                                                              })
                                                            });
                                                          </script>

                                                         </div>

                                                         <div class="form-group">
                                                          <label for="exampleInputEmail1" required>SE HA UTILIZZATO UN ALTRO KIT</label>
                                                            <select class="form-control" name='KIT_APERTO' id='KIT_APERTO'>
                                                             <option value='NO'>NO</option>  
                                                             <option value='SI'>SI</option> 
                                                          </select>
                                                         </div>

                                                          <div class="form-group" id="cantidad" style="display: none;">
                                                          <label for="exampleInputEmail1">QUANTITA’ DI KIT UTILIZZATI</label>
                                                            <input type="num" name="QUANTITA_APERTI" id="QUANTITA_APERTI" placeholder="0">
                                                         </div>
                                                         
                                                          <script type="text/javascript">
                                                            $(document).ready(function(){
                                                              $('#KIT_APERTO').change(function(){
                                                                 var KIT_APERTO=$('#KIT_APERTO').val();
                                                                 if (KIT_APERTO=="SI") 
                                                                 {
                                                                  $('#cantidad').fadeIn(500);
                                                                  $('#QUANTITA_APERTI').attr("required", "true");
                                                                 }
                                                                 else
                                                                 {
                                                                  $('#cantidad').fadeOut(500);
                                                                  $('#QUANTITA_APERTI').removeAttr("required");
                                                                 } 
                                                              })
                                                            });
                                                          </script>
                                                          
                                                        <div class="form-group">
                                                          <label for="exampleInputEmail1">CONTROLLO STRUMENTARIO ALL’ARRIVO IN CENTRALE</label>
                                                            <select class="form-control" name='AZZIONI' id='AZZIONI'>
                                                             <option value='Controllo strumentario all’arrivo in Centrale'>Controllo strumentario all’arrivo in Centrale</option>
                                                             <option value='Ritrovamento strum.imbustato – inviato U.O.'>Ritrovamento strum.imbustato – inviato U.O.</option> 
                                                             <option value='Mancato ritrovamento strum. Imbustato'>Mancato ritrovamento strum. Imbustato</option> 
                                                             <option value='Kit trattenuto in Centrale'>Kit trattenuto in Centrale</option> 
                                                             <option value='Kit reso disponibile'>Kit reso disponibile</option> 
                                                             <option value='Altro'>Altro</option> 
                                                            </select>
                                                        </div>    

                                                          <div class="form-group" id='otroB' style="display: none;">
                                                            <textarea  name='AZZIONI_otro' id='AZZIONI_otro' placeholder="CONTROLLO STRUMENTARIO ALL’ARRIVO IN CENTRALE">
                                                            </textarea>
                                                            
                                                             <script type="text/javascript">
                                                            $(document).ready(function(){
                                                              $('#AZZIONI').change(function(){
                                                                 var AZZIONI=$('#AZZIONI').val();
                                                                 if (AZZIONI=="Altro") 
                                                                 {
                                                                   $('#otroB').fadeIn(500);
                                                                 }
                                                                 else
                                                                 {
                                                                  $('#otroB').fadeOut(500);
                                                                 } 
                                                              })
                                                            });
                                                          </script>

                                                         </div>

                                                          <div class="form-group">
                                                          <label for="exampleInputEmail1">DEXX ASS</label>
                                                            <select class="form-control" name='DEXX_ASS' id='DEXX_ASS'>
                                                             <option value='Respinta'>Respinta</option>
                                                             <option value='PSIS'>PSIS</option> 
                                                             <option value='Serv. Osp'>Serv. Osp</option> 
                                                             <option value='Log’s'>Log’s</option> 
                                                             <option value='Manutenzione'>Manutenzione</option> 
                                                            </select>
                                                        </div>    
        
                                                         
                                                    
                                                         <button type="submit" class="btn btn-success"><i class="material-icons">save</i> SALVARE</button>

                                                </fieldset>        

                                            </form>
                                           </div>
                                            </div>
                                          <div class="modal-footer">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                <!--Fin Modal nueva cuenta-->




<div class="container-fluid" style="text-align: center; margin-top: 2%;">
    <div class="col-md-12" style=" margin-bottom: 2%;">
        <div class="col-md-3" style=" text-align: left;">
          <img src='logo.jpeg' style="width: 30%;">
        </div>
         <div class='col-md-5' id='FechaComprobante'> 
            <fieldset>
               <legend><i class="material-icons">filter_list</i> FILTRA PER DATA </legend>
                  <div class="form-group">
                      <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                            <span></span> <b class="caret"></b>
                      </div>
                  </div>  
            </fieldset>  
         </div>
        <div class="col-md-4" style="text-align: right;">
           <button class='btn btn-success' data-placement='top' data-toggle='modal' data-target='#nuevoRegistro'><i class='material-icons'>add_box</i> NUOVO</button>
        </div>
  </div>
  <div class='col-md-12' style="text-align: center;" id="suggestionsTable">
  </div> 
           
  
</div>
<!--Fin: Contenedor principal -->
<!--Inicio: Footer -->
<script type="text/javascript">
  $(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Hoy': [moment(), moment()],
           'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Ultimos 7 Dias': [moment().subtract(6, 'days'), moment()],
           'Ultimos 30 Dias': [moment().subtract(29, 'days'), moment()],
           'Este Mes': [moment().startOf('month'), moment().endOf('month')],
           'Ultimo Mes': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);
    
});

  $ ('#reportrange').on('apply.daterangepicker', function (){
  var fecha = $('#reportrange').text();

  var dataString = 'fecha='+fecha;


  $.ajax(
                                              {
                                                  type: 'POST',
                                                  url: 'muestratabla.php',
                                                  data: dataString,
                                                  success: function(data)
                                                   {
                                                      $('#suggestionsTable').fadeIn(1000).html(data);
                                                      
                                                   }

                                               });
});

$(document).ready(function(){
  var fecha = $('#reportrange').text();
  var dataString = 'fecha='+fecha;
  $.ajax(
                                              {
                                                  type: 'POST',
                                                  url: 'muestratabla.php',
                                                  data: dataString,
                                                  success: function(data)
                                                   {
                                                      $('#suggestionsTable').fadeIn(1000).html(data);
                                                      
                                                   }

                                               });
});
</script>

<?php
	include("modulos/footer.php"); 
?>


<!--Fin: Footer -->

 