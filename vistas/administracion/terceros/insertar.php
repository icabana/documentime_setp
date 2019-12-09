<script type="text/javascript">
  function insertar_tercero() {

    if(!validar_requeridos()){
        return 0;
    }


    var datos = $('#formTerceros').serialize();

    ejecutarAccion(
      'administracion',
      'Terceros',
      'insertar',
      datos,
      'insertar_tercero2(data)'
    );

  }

  function insertar_tercero2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Tercero Registrado Exitosamente", "center");
      cargar_terceros();
    } else {
      mensaje_alertas("error", "El Documento ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>


<div class="box box-default">

  <div class="box-body">

    <div class="row">
      <div class="col-md-3"></div>
      <div style="padding: 25px" class="col-md-12">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Registrar Tercero</h3>
          </div>

          <form autocomplete="on" id="formTerceros" method="post">

            <div class="card-body">

              <div class="row">

                <div class="col-md-3">

                  <label>Tipo de Documento<span style="color:red">*</span></label>
                  <?php
                  echo $froms->Lista_Desplegable(
                    $tiposdocumento,
                    'nombre_tipodocumento',
                    'id_tipodocumento',
                    'tipodocumento_emterceropleado',
                    '',
                    '',
                    ''
                  );
                  ?>

                </div>

                <div class="col-md-3">
                  <label>Documento<span style="color:red">*</span></label>
                  <input type="text" class="form-control requerido" id="documento_tercero" name="documento_tercero">
                </div>

                <div class="col-md-6">
                  <label>Correo el&eacute;ctronico</label>
                  <input type="text" class="form-control" id="correo_tercero" name="correo_tercero">
                </div>

                
              </div>

              <br>


              <div class="row">

                <div class="col-md-6">
                  <label>Nombres<span style="color:red">*</span></label>
                  <input type="text" class="form-control requerido" id="nombres_tercero" name="nombres_tercero">
                </div>


                <div class="col-md-6">
                  <label>Apellidos<span style="color:red">*</span></label>
                  <input type="text" class="form-control requerido" id="apellidos_tercero" name="apellidos_tercero">
                </div>


              </div>

              
              <br>


              <div class="row">

                <div class="col-md-6">
                  <label>Direcci&oacute;n</label>
                  <input type="text" class="form-control" id="direccion_tercero" name="direccion_tercero">
                </div>


                <div class="col-md-6">
                  <label>Ciudad</label>
                  <input type="text" class="form-control" id="ciudad_tercero" name="ciudad_tercero">
                </div>

              </div>

              
              <br>


              <div class="row">

                <div class="col-md-4">
                  <label>Celular</label>
                  <input type="text" class="form-control" id="celular_tercero" name="celular_tercero">
                </div>


                <div class="col-md-4">
                  <label>Tel&eacute;fono</label>
                  <input type="text" class="form-control" id="telefono_tercero" name="telefono_tercero">
                </div>

              </div>

       
<br>
        <div>
          <button onclick="cargar_terceros();" class="btn btn-danger">Cancelar</button>
          <button onclick="insertar_tercero(); return false;" class="btn btn-success">Guardar</button>
        </div>
       


        </form>

        </div>
      </div>
    </div>

  </div>
</div>
</div>