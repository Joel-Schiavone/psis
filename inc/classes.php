<?php

    //05 02 2018 18:02:28 El Archivo classes.php se ha modificado correctamente

    class nonconformita
    {

          //Inicio Funciones para Mostrar Datos

                        //Inicio: Llama a todas las columnas de la tabla
                        function get_nonconformita()
                        {
                              $sql_nonconformita = 'SELECT * FROM nonconformita ';
                              $result_nonconformita =mysql_query($sql_nonconformita);
                              return $result_nonconformita;
                        }
                         //Fin: Llama a todas las columnas de la tabla

          //Inicio Funciones para Mostrar Datos por ID

                        function get_nonconformitaById($ID)
                        {
                              $sql_nonconformita = 'SELECT * FROM nonconformita  WHERE ID='.$ID.' ' ; 
                              $result_nonconformita =mysql_query($sql_nonconformita);
                              return $result_nonconformita;
                        }
          //Fin Funciones para Mostrar Datos por ID

          //Fin Funciones para Mostrar Datos

          //Inicio Funciones para Insertar datos


                        function insert_nonconformita($DATA_ANOMALIA, $DATA_CHIUSURA, $SERVICE_REPORT, $CLIENTE, $PRESIDIO, $REPARTO, $ARTICULO, $DEXX_ANOMALIA, $KIT_APERTO, $QUANTITA_APERTI, $ANALISIS_NC, $AZZIONI, $DEXX_ASS)
                        {
                              $sql_nonconformita = 'INSERT INTO nonconformita (DATA_ANOMALIA, DATA_CHIUSURA, SERVICE_REPORT, CLIENTE, PRESIDIO, REPARTO, ARTICULO, DEXX_ANOMALIA, KIT_APERTO, QUANTITA_APERTI, ANALISIS_NC, AZZIONI, DEXX_ASS) VALUES ("'.$DATA_ANOMALIA.'", "'.$DATA_CHIUSURA.'", "'.$SERVICE_REPORT.'", "'.$CLIENTE.'", "'.$PRESIDIO.'", "'.$REPARTO.'", "'.$ARTICULO.'", "'.$DEXX_ANOMALIA.'", "'.$KIT_APERTO.'", "'.$QUANTITA_APERTI.'", "'.$ANALISIS_NC.'", "'.$AZZIONI.'", "'.$DEXX_ASS.'")'; 
                              $result_nonconformita =mysql_query($sql_nonconformita );
                              return $result_nonconformita;
                        }
          //Fin Funcion Insertar todos los datos

          //Inicio Funciones para Modificar datos

          //Inicio Funcion Modifica todos los datos por ID
                        function update_nonconformitaById($ID, $DATA_ANOMALIA, $DATA_CHIUSURA, $SERVICE_REPORT, $CLIENTE, $PRESIDIO, $REPARTO, $ARTICULO, $DEXX_ANOMALIA, $KIT_APERTO, $QUANTITA_APERTI, $ANALISIS_NC, $AZZIONI, $DEXX_ASS)

                        {
                              $sql_nonconformita = 'UPDATE nonconformita  SET DATA_ANOMALIA = "'.$DATA_ANOMALIA.'" , DATA_CHIUSURA = "'.$DATA_CHIUSURA.'" , SERVICE_REPORT = "'.$SERVICE_REPORT.'" , CLIENTE = "'.$CLIENTE.'" , PRESIDIO = "'.$PRESIDIO.'" , REPARTO = "'.$REPARTO.'" , ARTICULO = "'.$ARTICULO.'" , DEXX_ANOMALIA = "'.$DEXX_ANOMALIA.'" , KIT_APERTO = "'.$KIT_APERTO.'" , QUANTITA_APERTI = "'.$QUANTITA_APERTI.'" , ANALISIS_NC = "'.$ANALISIS_NC.'" , AZZIONI = "'.$AZZIONI.'" , DEXX_ASS = "'.$DEXX_ASS.'"  WHERE ID='.$ID.' ';
                              $result_nonconformita =mysql_query($sql_nonconformita );
                              return $result_nonconformita;
                        }
          //Fin Funcion Modifica todos los datos por ID

          //Fin Funciones para Modificar datos

          //Inicio Funciones para Eliminar datos

          //Inicio Funcion Eliminar todos los datos por ID
                              function drop_nonconformitaById($ID)
                        {
                              $sql_nonconformita = 'DELETE FROM nonconformita  WHERE ID='.$ID.' ' ; 
                              $result_nonconformita =mysql_query($sql_nonconformita);
                              return $result_nonconformita;
                        }
          //Fin Funcion Eliminar todos los datos por ID

          //Fin Funciones para Eliminar datos

                        }

   //Fin trae tablas de la base de datos

   //FIN GENERADOR DE FUNCIONES PHP DESARROLLADO POR SCHIAVONE JOEL LEANDRO

    class reparto
    {

          //Inicio Funciones para Mostrar Datos

                        //Inicio: Llama a todas las columnas de la tabla
                        function get_reparto()
                        {
                              $sql_reparto = 'SELECT * FROM reparto ';
                              $result_reparto =mysql_query($sql_reparto);
                              return $result_reparto;
                        }
                         //Fin: Llama a todas las columnas de la tabla

          //Inicio Funciones para Mostrar Datos por ID

                        function get_repartoById($ID_rep)
                        {
                              $sql_reparto = 'SELECT * FROM reparto  WHERE ID_rep='.$ID_rep.' ' ; 
                              $result_reparto =mysql_query($sql_reparto);
                              return $result_reparto;
                        }
          //Fin Funciones para Mostrar Datos por ID

          //Fin Funciones para Mostrar Datos

          //Inicio Funciones para Insertar datos


                        function insert_reparto($red_desc)
                        {
                              $sql_reparto = 'INSERT INTO reparto (red_desc) VALUES ("'.$red_desc.'")'; 
                              $result_reparto =mysql_query($sql_reparto );
                              return $result_reparto;
                        }
          //Fin Funcion Insertar todos los datos

          //Inicio Funciones para Modificar datos

          //Inicio Funcion Modifica todos los datos por ID
                        function update_repartoById($ID_rep, $red_desc)

                        {
                              $sql_reparto = 'UPDATE reparto  SET red_desc = "'.$red_desc.'"  WHERE ID_rep='.$ID_rep.' ';
                              $result_reparto =mysql_query($sql_reparto );
                              return $result_reparto;
                        }
          //Fin Funcion Modifica todos los datos por ID

          //Fin Funciones para Modificar datos

          //Inicio Funciones para Eliminar datos

          //Inicio Funcion Eliminar todos los datos por ID
                              function drop_repartoById($ID_rep)
                        {
                              $sql_reparto = 'DELETE FROM reparto  WHERE ID_rep='.$ID_rep.' ' ; 
                              $result_reparto =mysql_query($sql_reparto);
                              return $result_reparto;
                        }
          //Fin Funcion Eliminar todos los datos por ID

          //Fin Funciones para Eliminar datos

                        }

   //Fin trae tablas de la base de datos

   //FIN GENERADOR DE FUNCIONES PHP DESARROLLADO POR SCHIAVONE JOEL LEANDRO

?>