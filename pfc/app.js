/*VALIDACIONES EN EL LOGIN*/
let nombre
let formulario=document.forms
let span= document.getElementsByTagName('span')
let icono= document.createElement('i')
icono.setAttribute('class','fas fa-check');
icono.setAttribute('style','color: #0eb911;')

let iconoX= document.createElement('i')
iconoX.setAttribute('class','fas fa-times') 
iconoX.setAttribute('style', 'color: #f51414;')


//NOMBRE y APELLIDO SIN NUMEROS 
console.log(formulario[0]['nombre']['value']);


function letras( name , num) {
    
    let valor= formulario[0][name]['value'] // quiero hacerlo expansible a apellido sin dar ['nombre'] ni posicion span
    let validacion= /^[A-Za-z]*$/ //falta validar espacios

    if (validacion.test(valor)) {
        console.log('Bien');
        span[num].appendChild(icono)
        span[num].removeChild(iconoX)
    }else{
        console.log('Bad');
        span[num].removeChild(icono)
        span[num].appendChild(iconoX)
    }
}
