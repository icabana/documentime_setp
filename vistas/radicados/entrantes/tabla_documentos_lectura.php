<?php

$tabla_documentos = "

<div class='box box-default'>

  <div class='box-body'>               
    <div class='row'>
  
    <form  method='post' action='return false;'>";
                         
    $bandera = 0;
    $icono_archivo = "";

    foreach ($documentos as $clave => $valor) {
        
      $path = 'archivos/uploads/entrantes/'.$id_entrante.'/'.$valor['nombre_documento'];

      if(file_exists($path)){
          
          $directorio = dir($path);            
          $nombre_archivo = "";            
          $extension = "";
                          
          while ($archivo = $directorio->read()){

              if($archivo != "." && $archivo != ".." ){
                  $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                  $nombre_archivo = $archivo;
              }

          }
              
          $icono_archivo = '<img width="100px" height="100px" src="imagenes/iconos/pdf.png">';
          if($extension == "pdf"){
              $icono_archivo = '<img width="100px" height="100px" src="imagenes/iconos/pdf.png">';
          }
          if($extension == "doc" || $extension == "docx"){
              $icono_archivo = '<img width="100px" height="100px" src="imagenes/iconos/word.png">';
          }
          if($extension == "xls" || $extension == "xlsx"){
              $icono_archivo = '<img width="100px" height="100px" src="imagenes/iconos/excel.png"';
          }
          

          $tabla_documentos .= ' <div class="col-md-3">
            <ul class="mailbox-attachments clearfix">
              <li>
              <a target="_blank"  href="'.$path."/".$nombre_archivo.'">
                <span class="mailbox-attachment-icon">'.$icono_archivo.'</span>
                <div class="mailbox-attachment-info">
                  <a target="_blank" href="'.$path."/".$nombre_archivo.'" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> '.substr( $valor['nombre_documento'],0,22).'</a>
               
                </div>
              </li>

            </ul> </div>';

          $ver_upload = "<a href='#' title='ELIMINAR ARCHIVO' onclick='eliminar_archivo(".$valor["id_documento"].", \"".$valor["nombre_documento"]."\", ".$id_contrato_documento.", \"".$ruta_archivo."\"); return false;'><img alt='' src='imagenes/botones/eliminar.png' width='37px'  /></a>   ";

        }else{
          
          $tabla_documentos .= ' <div class="col-md-3">
            <ul class="mailbox-attachments clearfix">
              <li>
              <a target="_blank" >
              <a onclick="modificar_nombre_archivo(\''.$valor["nombre_documento"].'\'); return false;" href="#"  data-toggle="modal" data-target="#exampleModal5_editar_entrante"  ><span class="mailbox-attachment-icon"><i class="fa fa-upload"></i></span></a>
                <div class="mailbox-attachment-info">
                <i class="fa fa-paperclip"></i> '.substr( $valor['nombre_documento'],0,22).'
                  <span class="mailbox-attachment-size">
                      <a onclick="modificar_nombre_archivo(\''.$valor["nombre_documento"].'\'); return false;" href="#" data-toggle="modal" data-target="#exampleModal5_editar_entrante" >Adjuntar Archivo</a>
                    <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-upload"></i></a>
                    </a>
                  </span>
                </div>
              </li>

            </ul> </div>';

          $ver_upload = "<a href='#' title='ELIMINAR ARCHIVO' onclick='eliminar_archivo(".$valor["id_documento"].", \"".$valor["nombre_documento"]."\", ".$id_contrato_documento.", \"".$ruta_archivo."\"); return false;'><img alt='' src='imagenes/botones/eliminar.png' width='37px'  /></a>   ";
        }

        $contador ++;

        $ver_archivo = "";
        $bandera = 0;

    }



    $tabla_documentos .= "</div";    
                    
    $tabla_documentos .= "</form></div></div></div>";
  
      

    
?>