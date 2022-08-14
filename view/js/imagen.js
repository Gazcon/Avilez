

function resultado(){
    window.confirm('¿Desea Eliminar el usuario?'); //ventana de confirmacion
}

function resultado1(){
    window.confirm('¿Desea Inhabilitar el usuario?'); //ventana de confirmacion
}



 const img_boto = document.getElementById("icon_bot");//funcion para cambiar la imagen de un input tipo file por un icono 
 const img_input = document.getElementById("img_3");
 img_boto.addEventListener("click", () =>{
    img_input.click();
 });

 let vista_preliminar = (event) => { //funcion para ver la img de perfil subida desde el icono input 
    let leer_img = new FileReader();
    let id_img = document.getElementById('img-imagen');
    leer_img.onload = () =>{
        if(leer_img.readyState == 2){
            id_img.src = leer_img.result;
        }
    }
    leer_img.readAsDataURL(event.target.files[0]);
}




const img_perf = document.querySelector('.img_perf')
const imgns = document.querySelectorAll('.imgns')

imgns.forEach(imge =>{
    imge.addEventListener('click',function(){
        const active = document.querySelector('.active')
        active.classList.remove('active')
        img_perf.src = this.src
    })
})
                                                                                                                                                                                                            
