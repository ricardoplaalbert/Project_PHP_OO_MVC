$(document).ready(function(){
    $("#table_crud").DataTable();
    $('body').on('click', '.user', function () {
        var id = this.getAttribute('id');
        console.log(id);
        $.ajax({
            type: "GET",
             dataType: "json",
            url: "module/user/controller/controller_user.php?op=read_modal&modal=" + id, 
        })////end-ajax
        .done(function(data) {
            console.log(data);
            $("#details_user").empty();
            $('<div></div>').attr('id','Div1').appendTo("#user_modal");
            
            $("#Div1").html(
                '<br><span>Numero de personas:  <span id="num_personas">'+data.num_personas+'</span></span></br>'+
                '<br><span>Menores:     <span id="num_menores">'+data.num_menores+'</span></span></br>'+
                '<br><span>Nombre:  <span id="Nombre">'+data.Nombre+'</span></span></br>'+
                '<br><span>DNI:     <span id="dni">'+data.dni+'</span></span></br>'+
                '<br><span>Sexo:     <span id="Sexo">'+data.Sexo+'</span></span></br>'+
                '<br><span>Fecha de Nacimiento:     <span id="fnac">'+data.fnac+'</span></span></br>'+
                '<br><span>Edad:    <span id="Edad">'+data.Edad+'</span></span></br>'+
                '<br><span>Fecha reserva:   <span id="fecha_reserva">'+data.fecha_reserva+'</span></span></br>' 
            )
            modal();

        })///////end-done
        .fail(function( Hello, textStatus, errorThrown) {
            if ( console && console.log ) {
                console.log( "(fail): " +  textStatus + "," + errorThrown);
            }////end-if
        });//////end-fail
    });
});//end-document
function modal(data){
    $("#details_user").show();
    $("#user_modal").dialog({
        width: 850, //<!-- ------------- ancho de la ventana -->
        height: 500, //<!--  ------------- altura de la ventana -->
        //show: "scale", <!-- ----------- animación de la ventana al aparecer -->
        //hide: "scale", <!-- ----------- animación al cerrar la ventana -->
        resizable: "false", //<!-- ------ fija o redimensionable si ponemos este valor a "true" -->
       // position: "down",//<!--  ------ posicion de la ventana en la pantalla (left, top, right...) -->
        modal: "true", //<!-- ------------ si esta en true bloquea el contenido de la web mientras la ventana esta activa (muy elegante) -->
        buttons: {
            Ok: function () {
                $(this).dialog("close");
            }
        },
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
    });
}