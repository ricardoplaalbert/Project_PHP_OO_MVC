<div id="contenido">
    <h1>Informacion de la reserva</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Personas: </td>
            <td>
                <?php
                    echo $user['num_personas'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Menores: </td>
            <td>
                <?php
                    echo $user['num_menores'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Nombre: </td>
            <td>
                <?php
                    echo $user['Nombre'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>DNI: </td>
            <td>
                <?php
                    echo $user['DNI'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Sexo: </td>
            <td>
                <?php
                    echo $user['Sexo'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha de nacimiento: </td>
            <td>
                <?php
                    echo $user['fnac'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Edad: </td>
            <td>
                <?php
                    echo $user['Edad'];
                ?>
            </td>
            
        </tr>
        <td>Fecha de la reserva: </td>
            <td>
                <?php
                    echo $user['fecha_reserva'];
                ?>
            </td>
            
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Volver</a></p>
</div>