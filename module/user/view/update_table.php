<div id="contenido">
    <form autocomplete="on" method="post" name="aupdate_user" id="update_user" onsubmit="return validate();" action="index.php?page=controller_user&op=update">
        <h1>Modificar Reserva</h1>
        <table border='0'>
            <tr>
                <td>Personas: </td>
                <td><input type="text" id="num_personas" name="num_personas" placeholder="num_personas" value="<?php echo $user['num_personas'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_personas" class="error">
                        <?php
                            echo "$error_personas";
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>menores: </td>
                <td><input type="text" id="num_menores" name="num_menores" placeholder="num_menores" value="<?php echo $user['num_menores'];?>"/></td>
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
                <td><input type="text" id="Nombre" name="Nombre" placeholder="Nombre" value="<?php echo $user['Nombre'];?>"/></td>
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
                <td><input type="text" id= "DNI" name="DNI" placeholder="DNI" value="<?php echo $user['dni'];?>"/></td>
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
                <td>
                    <?php
                        if ($user['Sexo']==="Hombre"){
                    ?>
                        <input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Hombre" checked/>Hombre
                        <input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Mujer"/>Mujer
                    <?php    
                        }else{
                    ?>
                        <input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Hombre"/>Hombre
                        <input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Mujer" checked/>Mujer
                    <?php   
                        }
                    ?>
                </td>
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
                <td><input id="fnac" type="text" name="fnac" placeholder="fnac" value="<?php echo $user['fnac'];?>"/></td>
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
                <td><input type="text" id="edad" name="edad" placeholder="edad" value="<?php echo $user['Edad'];?>"/></td>
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
                <td><input id="fecha_reserva" type="text" name="fecha_reserva" placeholder="fecha_reserva" value="<?php echo $user['fecha_reserva'];?>"/></td>
                <td><font color="red">
                    <span id="error_fecha" class="error">
                        <?php
                            echo "$error_fecha";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>