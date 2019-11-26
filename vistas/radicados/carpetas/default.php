<script type="text/javascript">

    function nuevo_carpeta() {

        abrirVentanaContenedor(
            'configuracion', 'Carpetas', 'nuevo', '', ''
        );

    }

    function editar_carpeta(id_carpeta) {

        abrirVentanaContenedor(
            'configuracion',
            'Carpetas',
            'editar',
            'id_carpeta=' + id_carpeta,
            ''
        );

    }

    function eliminar_carpeta(id_carpeta) {

        mensaje_confirmar("¿Está seguro de eliminar el rol?", "eliminar_carpeta2(" + id_carpeta + "); ");

    }

    function eliminar_carpeta2(id_carpeta) {

        ejecutarAccion(
            'configuracion',
            'Carpetas',
            'eliminar',
            "id_carpeta=" + id_carpeta,
            ' mensaje_alertas("success", "Carpeta Eliminado con Éxito", "center"); cargar_carpetas();'
        );

    }

    $(document).ready(function() {
        CrearTabla('tabla_carpetas');
    });
</script>

<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
            <div class="card-header">
                <div class="box">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 style="color:grey">GESTIONAR ROLES</h4>
                        </div>
                        <div class="col-md-2">

                            <button onclick="nuevo_carpeta(); return false;" class="btn btn-success btn-sm">
                                NUEVO ROL
                            </button>

                        </div>
                    </div>
                </div>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>NOMBRE</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($carpetas as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . utf8_encode(strtolower($items['nombre_carpeta'])) . "</td>";


                            echo "<td><a href='#'><i onclick='editar_carpeta(" . $items['id_carpeta'] . ");' 
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a href='#'><i onclick='eliminar_carpeta(" . $items['id_carpeta'] . ");' 
                                    class='fas fa-trash'></i></a></td>";


                            echo "</tr>";
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>