/*VALIDACIONES EN EL LOGIN*/


/*correo:
1ª: no puede haber @ ni espacios
@
2ª: no espacios 
.
3ª: no numeros 

passwd
+una mayuscula
+una minuscula
+dos digitos seguidos
+un signo de los siguientes [-_.+@]
*/
let nombre
let formulario = document.forms
let span = document.getElementsByTagName('span')
let icono = document.createElement('i')
icono.setAttribute('class', 'fas fa-check');
icono.setAttribute('style', 'color: #0eb911;')

let iconoX = document.createElement('i')
iconoX.setAttribute('class', 'fas fa-times')
iconoX.setAttribute('style', 'color: #f51414;')


//NOMBRE y APELLIDO SIN NUMEROS 

/*
Funcion que recibe por parametro el name del input y el numero del span a modificar
*/

function correo(name) {

    let valor = formulario[0][name]['value'] // quiero hacerlo expansible a apellido sin dar ['nombre'] ni posicion span
    // let validacion= /^[a-zA-Z0-9-_.%+]+[@][a-zA-Z0-9]+\.[a-zA-Z]{2,}*$/ //falta validar espacios
    let validacion = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{1,}$/;

    if (validacion.test(valor)) {
        console.log('Bien');
        span[3].appendChild(icono)
        span[3].removeChild(iconoX)
    } else {
        console.log('Bad');
        span[3].removeChild(icono)
        span[3].appendChild(iconoX)
    }

}

function letras(name, num) {

    let valor = formulario[0][name]['value'] // quiero hacerlo expansible a apellido sin dar ['nombre'] ni posicion span
    let validacion = /^[A-Za-z]*$/ //falta validar espacios

    if (validacion.test(valor)) {
        console.log('Bien');

        span[num].appendChild(icono)
        if (span[num].hasChildNodes) {
            span[num].removeChild(iconoX)
        }
    } else {
        console.log('Bad');
        span[num].appendChild(iconoX)
        if (span[num].hasChildNodes) {
            span[num].removeChild(icono)
        }
    }
}

function tupac(name) {

    let valor = formulario[0][name]['value'] // quiero hacerlo expansible a apellido sin dar ['nombre'] ni posicion span
    // let validacion= /^[A-Za-z]*$/
    let validacion = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[-.@?!%])(?=.*[0-9])$/ //falta validar espacios

    if (validacion.test(valor)) {
        console.log('Bien');
        span[4].appendChild(icono)
        span[4].removeChild(iconoX)
    } else {
        console.log('Bad');
        span[4].removeChild(icono)
        span[4].appendChild(iconoX)
    }
}

/***************HAMBURGUESA*********************/
let barraNav, logo, abrir, header, imheader, body

barraNav = document.getElementsByClassName('barraNav')[0];
logo = document.getElementsByClassName('logoHeader')[0];
abrir = document.getElementsByClassName('abrir')[0];
imheader = document.getElementsByClassName('imHeader')[0];
body = document.getElementsByTagName('body')[0];


function abrirHamburguesa() {

    barraNav.classList.add('visible');
    logo.classList.add('logoHeaderMobile');
    abrir.classList.add('esconder');
    imheader.classList.add('opacidad');

}

function cerrarHamburguesa() {

    barraNav.classList.remove('visible');
    logo.classList.remove('logoHeaderMobile');
    abrir.classList.remove('esconder');
    imheader.classList.remove('opacidad');
}

/**********Funcion que detecta la posicion del scroll y cambia el background del nav******/
let barrasiete
barrasiete = document.getElementsByClassName('barrasiete')[0];

function sticky() {

    let ejeY = window.scrollY;

    if (ejeY > 610) {
        barraNav.classList.add('sticky');
        barraNav.classList.add('a:visited');

    } else {
        barraNav.classList.remove('sticky');
    }
}

