<!-- Incluir clases necesarias -->
<html>
    <head>
        <title>PWD 2018</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header><h3>Práctico Evaluativo</h3></header>
        <section class="contenido">
            <div class="formulario">
                <!--
                    Pueden utilizar la clase Helpers para agregar más métodos, por ejemplo
                    quizás les sería útil un método que genere algunos inputs de radio o check,
                    y que se encargue de setear el valor que viene en el formulario
                -->
                <form action="">
                    <div class="formGroup">
                        <!-- Nombre -->
                        <label for="">Nombre</label>
                        <input type="text" name="" id="" placeholder="Nombre">
                    </div>
                    <div class="formGroup">
                        <!-- 
                        Sexo Toma los valores  de listaSexos, permite 1 sola opción
                        Se deben generar los input a partir de la lista
                        -->
                        <label for="">Sexo</label>
                        <input type="radio" name="" id="">
                        
                    </div>
                    <div class="formGroup">
                        <!--
                        Altura toma las opciones de listaAlturas, permite múltiples 
                        Se deben generar los inputs a partir de la lista
                        -->
                        <label for="">Altura</label>
                        <input type="checkbox" name="" id="">
                        
                    </div>
                    <div class="formGroup">
                        <!--
                         Mayores de edad? completar de manera estática, recordando la estrategia
                         para determinar si el valor fue seleccionado
                        -->
                        <label for="">¿Es Mayor?</label>
                        <select name="" id="">
                            <option value=""></option>
                        </select>
                    </div>
                    
                    <button type="submit">Buscar</button>
                </form>
            </div>
            <div class="lista">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>May. Edad</th>
                            <th>Sexo</th>
                            <th>Rango Altura</th>
                        </tr>
                    </thead>
                    <tbody> <!-- iterar sobre la colección de objetos mostrando las descripciones-->
                        <tr>
                            <td>Nombre</td>
                            <td>SI/NO</td>
                            <td>Masculino/Femenino</td>
                            <td>Alto/Intermedio/Bajo</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <!-- ESCRIBIR EL TOTAL DE ELEMENTOS MOSTRADOS-->
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </section>
    </body>
</html>
