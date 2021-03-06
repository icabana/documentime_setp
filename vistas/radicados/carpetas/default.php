<script type="text/javascript">

    function nuevo_carpeta() {

        abrirVentanaContenedor(
            'radicados', 'Carpetas', 'nuevo', '', ''
        );

    }

    function editar_carpeta(id_carpeta) {

        abrirVentanaContenedor(
            'radicados',
            'Carpetas',
            'editar',
            'id_carpeta=' + id_carpeta,
            ''
        );

    }

    function eliminar_carpeta(id_carpeta) {

        mensaje_confirmar("¿Está seguro de eliminar la carpeta seleccionada?", "eliminar_carpeta2(" + id_carpeta + "); ");

    }

    function eliminar_carpeta2(id_carpeta) {

        ejecutarAccion(
            'radicados',
            'Carpetas',
            'eliminar',
            "id_carpeta=" + id_carpeta,
            'if(data == 1){ location.reload(); } else { mensaje_alertas("error", "Esta carpeta tiene radicados asociados", "center"); } '
        );

    }

</script>

<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
            <div class="card-header">
                <div class="box">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 style="color:grey">GESTIONAR CARPETAS</h4>
                        </div>
                        <div class="col-md-2">

                            <button onclick="nuevo_carpeta(); return false;" class="btn btn-success btn-sm">
                                NUEVA CARPETA
                            </button>

                        </div>
                    </div>
                </div>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabla_carpetas" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style='background-color:lavender'>NOMBRE DE LA CARPETA</th>
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($carpetas as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . $items['nombre_carpeta'] . "</td>";


                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_carpeta(" . $items['id_carpeta'] . ");' ><i
                                    class='fas fa-edit'></i></a></td>";

                            echo "<td><a class='btn btn-sm btn-danger' style='padding:5px 11px 5px 11px' href='#' onclick='eliminar_carpeta(" . $items['id_carpeta'] . ");' ><i
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