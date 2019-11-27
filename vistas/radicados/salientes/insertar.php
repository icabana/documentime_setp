<script type="text/javascript">

  function insertar_saliente() {

      var datos = $('#formSalientes').serialize();

      ejecutarAccion(
        'configuracion',
        'Salientes',
        'insertar',
        datos,
        'insertar_saliente2(data)'
      );

  }

  function insertar_saliente2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Saliente Registrado Exitosamente", "center");
        cargar_salientes();
      } else {
        mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
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
      <div style="padding: 25px" class="col-md-6">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Registrar Saliente</h3>
          </div>

          <form autocomplete="on" id="formSalientes" method="post">

            <div class="card-body">


            <div class="form-group">
                <label>Remitente</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>

              //OCULTAR
              <div class="form-group">
                <label>Tipo de documento</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>

              <div class="form-group">
                <label>Documento</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>

              <div class="form-group">
                <label>Telefono</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>

              <div class="form-group">
                <label>Direcci&oacute;n</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>

              <div class="form-group">
                <label>Ciudad</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>



              <div class="form-group">
                <label>Destinatario</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>


              //OCULTAR
              <div class="form-group">
                <label>Tipo de documento</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>

              <div class="form-group">
                <label>Documento</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>

              <div class="form-group">
                <label>Telefono</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>

              <div class="form-group">
                <label>Direcci&oacute;n</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>

              <div class="form-group">
                <label>Ciudad</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>




            
              <div class="form-group">
                <label>Asunto</label>
                <textarea id="asunto_entrante" name="asunto_entrante"></textarea>
              </div>

              <div class="form-group">
                <label>Tipo de Radicado</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>

              <div class="form-group">
                <label>Fecha max de respuesta</label>
                <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante">
              </div>


              <div class="form-group">
                <label>Descripcion de los anexos</label>
                <textarea id="asunto_entrante" name="asunto_entrante"></textarea>
              </div>




              <div class="form-group">
                <label>Serie</label>
                <?php
                echo $froms->Lista_Desplegable(
                        $roles,
                        'nombre_rol',
                        'id_rol',
                        'rol_usuario',
                        '',
                        '',
                        ''
                    );
                ?>

              </div>


              <div class="form-group">
                <label>Subserie</label>
                <?php
                echo $froms->Lista_Desplegable(
                        $roles,
                        'nombre_rol',
                        'id_rol',
                        'rol_usuario',
                        '',
                        '',
                        ''
                    );
                ?>

              </div>


              <div class="form-group">
                <label>Tipo Documental</label>
                <?php
                echo $froms->Lista_Desplegable(
                        $roles,
                        'nombre_rol',
                        'id_rol',
                        'rol_usuario',
                        '',
                        '',
                        ''
                    );
                ?>

              </div>


              <div class="form-group">
                <label>Usuario responsable</label>
                <?php
                echo $froms->Lista_Desplegable(
                        $roles,
                        'nombre_rol',
                        'id_rol',
                        'rol_usuario',
                        '',
                        '',
                        ''
                    );
                ?>

              </div>


            </div>

            <div class="card-footer">
              <button onclick="cargar_salientes();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_saliente(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>