function validar(){

    let nombre = document.getElementById("nombre").value;
    let apellidos = document.getElementById("apellidos").value;
    let pais = document.getElementById('pais').value;
    let hm = document.getElementById('hm').value;
    let email = document.getElementById('email').value;
    let archivo = document.getElementById('subir').value;
 

    // Para que sea obligatorio el nombre
    if (nombre == ''){
        alert('Debes introducir un nombre');
        return false;
    }
    // Para que sea obligatorio el apellido
    if (apellidos == ''){
        alert('Debes introducir un apellido');
        return false;
    }

    // Para que seleccione un país y no permita dejar la opción por defecto
    if(pais == 'default'){
        alert('Debes seleccionar un país');
        return false;
    }

    //Para que seleccione un sexo
    if(hm ==''){
        alert('Debes seleccionar un sexo');
        return false;
    }

    if(archivo ==''){
        alert('No has introducido ningún archivo');
        return false;
    }
    
    let expresionRegularEmail = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    if (!expresionRegularEmail.test(email)){
        alert ("El email no es correcto");
        return false;
    }
}