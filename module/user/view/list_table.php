<div id="contenido">
    <div class="container">
    	<div class="row">
    	    <h3>Lista de Reservas</h3>
    	</div>
    	<div class="row">
       <a class="Button_red" href="index.php?page=controller_user&op=create&id='.$row['DNI'].'">Crear</a>
       <a class="Button_red" href="&id='.$row['DNI'].'">Delete All</a>   
       <table id="table_crud">
                <thead>
                    <tr>
                    <td width=100><b>Personas</b></th>
                    <td width=100><b>Fecha de la Reserva</b></th>
                    <td width=100><b>Nombre</b></th>
                    <td width=100><b>DNI</b></th>
                    <th width=400><b>Accion</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($rdo->num_rows === 0){
                            echo '<tr>';
                            echo '<td align="center"  colspan="3">No existe ninguna reserva creada</td>';
                            echo '</tr>';
                        }else{
                            foreach ($rdo as $row) {
                                   echo '<tr>';
                                   echo '<td width=100>'. $row['num_personas'] . '</td>';
                                   echo '<td width=100>'. $row['fecha_reserva'] . '</td>';
                                   echo '<td width=100>'. $row['Nombre'] . '</td>';
                                   echo '<td width=100>'. $row['DNI'] . '</td>';
                                   echo '<td width=400>';
                            
                                print ("<div class='user' id='".$row['num_personas']."'>Read</div>");  //READ_modal
                                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                            //  echo '<a class="Button_blue" href="index.php?page=controller_user&op=read&id='.$row['DNI'].'">Leer</a>';
                              //  echo '&nbsp;';   
                                echo '<a class="Button_green" href="index.php?page=controller_user&op=update&id='.$row['DNI'].'">Modificar</a>';
                                echo '&nbsp;';
                                echo '<a class="Button_blue" href="index.php?page=controller_user&op=delete&id='.$row['DNI'].'">Borrar</a>';
                                echo '</td>';     
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
<!-- modal window -->
<section id="user_modal">
    <div id="details_user"hidden>
        <div id="details">
            <div id="container">
               Personas: <div id="num_personas"></div></br>
                Menores: <div id="num_menores"></div></br>
                Nombre: <div id="Nombre"></div></br>
                DNI: <div id="dni"></div></br>
                Sexo: <div id="Sexo"></div></br>
                Fecha de nacimiento: <div id="fnac"></div></br>
                Edad: <div id="Edad"></div></br>
                Fecha de la reserva: <div id="fecha_reserva"></div></br>
            </div>
        </div>
    </div>
</section>