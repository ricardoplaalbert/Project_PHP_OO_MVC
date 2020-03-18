function validate_pers(texto){
    if (texto.length > 0){
        var reg=/^[0-9]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_menores(texto){
    if (texto.length > 0){
        var reg=/^[0-9]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_nombre(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_DNI(dni){  
  var numero = dni.substr(0,dni.length-1);
  var let = dni.substr(dni.length-1,1);
  numero = numero % 23;
  var letra='TRWAGMYFPDXBNJZSQVHLCKET';
  letra=letra.substring(numero,numero+1);
  if (letra!=let){
      return false;
  }else{
      return true;
  }
}

function validate_sexo(texto){
    var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_fnac(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_edad(texto){
    if (texto.length > 0){
        var reg=/^[0-9]{1,2}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_fecha(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }


function validate(){
    var check=true
    
    var v_personas=document.getElementById('num_personas').value;
    var v_menores=document.getElementById('num_menores').value;
    var v_nombre=document.getElementById('Nombre').value;
    var v_DNI=document.getElementById('DNI').value;
    var v_sexo=document.getElementsByName('Sexo');
    var v_fnac=document.getElementById('fecha').value;
    var v_edad=document.getElementById('Edad').value;
    var v_fecha=document.getElementById('fecha_reserva');
    
    var r_personas=validate_pers(v_personas);
    var r_menores=validate_menores(v_menores);
    var r_nombre=validate_nombre(v_nombre);
    var r_DNI=validate_DNI(v_DNI);
    var r_sexo=validate_sexo(v_sexo);
    var r_fecha_nacimiento=validate_fnac(v_fnac);
    var r_edad=validate_edad(v_edad);
    var r_fecha=validate_fecha(v_fecha);
  
    
    if(!r_personas){
        document.getElementById('error_personas').innerHTML = " * El numero introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_personas').innerHTML = "";
    }
    if(! r_menores){
        document.getElementById('error_menores').innerHTML = " * El numero introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_menores').innerHTML = "";
    }
    if(!r_nombre){
        document.getElementById('error_nombre').innerHTML = " * El nombre introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_nombre').innerHTML = "";
    }
    if(!r_DNI){
        document.getElementById('error_DNI').innerHTML = " * El DNI introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_DNI').innerHTML = "";
    }
    if(!r_sexo){
        document.getElementById('error_sexo').innerHTML = " * No has seleccionado ningun genero";
        check=false;
    }else{
        document.getElementById('error_sexo').innerHTML = "";
    }
    if(!r_fecha_nacimiento){
        document.getElementById('error_fecha_nacimiento').innerHTML = " * No has introducido ninguna fecha válida";
        check=false;
    }else{
        document.getElementById('error_fecha_nacimiento').innerHTML = "";
    }
    if(!r_edad){
        document.getElementById('error_edad').innerHTML = " * La edad introducida no es valida";
        check=false;
    }else{
        document.getElementById('error_edad').innerHTML = "";
    }
    if(!r_fecha){
        document.getElementById('error_fecha').innerHTML = " * No has introducido ninguna fecha válida";
        check=false;
    }else{
        document.getElementById('error_fecha').innerHTML = "";
    }
    return check;
}
   document.reservas.submit();
   document.reservas.action="index.php?page=controller_user&op=create";
  
 