<div id="contenido">
    <form autocomplete="on" method="post" name="reservas" id="reservas">
        <h1>Crear una reserva</h1>
        <table border='0'>
            <tr>
                <td>Numero de personas: </td>
                <td><input type="text" id="num_personas" name="num_personas" placeholder="num_personas" value=""/></td>
                <td><font color="red">
                    <span id="error_personas" class="error">
                        <?php
                            echo "$error_personas";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td>Numero de menores: </td>
                <td><input type="text" id="num_menores" name="num_menores" placeholder="num_menores" value=""/></td>
                <td><font color="red">
                    <span id="error_menores" class="error">
                        <?php
                            echo "$error_menores";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Nombre: </td>
                <td><input type="text" id="Nombre" name="Nombre" placeholder="Nombre" value=""/></td>
                <td><font color="red">
                    <span id="error_nombre" class="error">
                        <?php
                            echo "$error_nombre";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>DNI: </td>
                <td><input type="text" id= "DNI" name="DNI" placeholder="DNI" value=""/></td>
                <td><font color="red">
                    <span id="error_DNI" class="error">
                        <?php
                            echo "$error_DNI";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Sexo: </td>
                <td><input type="radio" id="Sexo" name="Sexo" placeholder="Sexo" value="Hombre"/>Hombre
                    <input type="radio" id="Sexo" name="Sexo" placeholder="Sexo" value="Mujer"/>Mujer</td>
                <td><font color="red">
                    <span id="error_sexo" class="error">
                        <?php
                            echo "$error_sexo";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Fecha de nacimiento: </td>
                <td><input id="fnac" type="text" name="fnac" placeholder="fnac" value=""/></td>
                <td><font color="red">
                    <span id="error_fnac" class="error">
                        <?php
                            echo "$error_fnac";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Edad: </td>
                <td><input type="text" id="Edad" name="Edad" placeholder="Edad" value=""/></td>
                <td><font color="red">
                    <span id="error_edad" class="error">
                        <?php
                            echo "$error_edad";
                        ?>
                    </span>
                </font></font></td>
                
            </tr>
			<tr>
                <td>Fecha de la reserva: </td>
                <td><input id="fecha_reserva" type="date" name="fecha_reserva" placeholder="fecha_reserva" value=""/></td>
                <td><font color="red">
                    <span id="error_fecha" class="error">
                        <?php
                            echo "$error_fecha";
                        ?>
                    </span>
                </font></font></td>
            </tr>    
            <tr>
               <td> <input name="submit" type="button" value="Reservar" onclick="validate()"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>