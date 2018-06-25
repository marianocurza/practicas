<?php
error_reporting(E_ALL);
ini_set('display_errors', 'stdout');

require_once 'header.php';
?>
<div class="row">
    <div class="col-md-12">
        <form role="form" class="form-inline" method="get" id="formulario-personas">
            <div class="form-group">

                <label for="correo">
                    Correo
                </label>
                <input class="form-control" id="correo" name="correo" type="text" value=""/>
            </div>
            <div class="form-group">

                <label for="apellido">
                    Apellido
                </label>
                <input class="form-control" id="apellido" name="apellido" type="text" value=""/>
            </div>
            <div class="checkbox">
                <label for="estudiante">
                    ¿Es Estudiante?
                </label>
                <select name="estudiante" id="estudiante">
                    <option value=""> - </option>
                    <option value="S"> Si </option>
                    <option value="N"> No </option>
                </select>
            </div> 
            <button type="submit" class="btn btn-primary" name="boton">
                Buscar
            </button>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table" id="tabla-personas">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Correo
                    </th>
                    <th>
                        Apellido
                    </th>
                    <th>
                        Estudiante
                    </th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

<script>
    
    document.addEventListener('DOMContentLoaded', function(){
        $('#formulario-personas').on('submit', function(evento){
            evento.preventDefault();
            var parametros = $('#formulario-personas').serialize();
            var url = 'acciones/buscar-personas.php?' + parametros;
            $.get(url).then(function(data){
                $('#tabla-personas tbody').html(data);
            })
        });       
       
    }, false);
</script>


<?php
require_once 'footer.php';
