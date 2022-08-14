function validar(e){
    e.preventDefault();

    let fecha = document.getElementById('datefecha');
    let hora = document.getElementById('timehora');
    let nombre = document.getElementById('txtnombre');

    if (fecha.value == ""){
        fecha.style.borderColor ="red";

    }
    if (hora.value == ""){
        hora.style.borderColor ="red";
        
    }
    if (nombre.value == ""){
        nombre.style.borderColor ="red";
        
    }
}