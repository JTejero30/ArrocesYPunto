/*VALIDACIONES EN EL LOGIN*/



let nombre
let formulario = document.forms
let span = document.getElementsByTagName('span')
let icono = document.createElement('i')
icono.setAttribute('class', 'fas fa-check');
icono.setAttribute('style', 'color: #0eb911;')

let iconoX = document.createElement('i')
iconoX.setAttribute('class', 'fas fa-times')
iconoX.setAttribute('style', 'color: #f51414;')


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

passwd repeticion que coincida con el anterior password
nombre y apellidos sin numeros ni caracteres especiales
*/
/*
Funcion que recibe por parametro el name del input y el numero del span a modificar y la validacion Regex
*/


function validar(name, num, validacion) {

    let valor = formulario[0][name]['value'] 
    if (validacion.test(valor)) {
        console.log('Bien');

        span[num].appendChild(icono)
        if (span[num].hasChildNodes) {
            span[num].removeChild(iconoX)
        }
    } else {
        span[num].appendChild(iconoX)
        if (span[num].hasChildNodes) {
            span[num].removeChild(icono)
        }
    }
}
function contraseñaCoincide() {

    let passw1=formulario[0]['passw1']['value']
    let passw2=formulario[0]['passw2']['value']

    console.log(passw1);
    console.log(passw2);
    if (passw1===passw2) {
        span[5].appendChild(icono)
        if (span[5].hasChildNodes) {
            span[5].removeChild(iconoX)
        }
    } else {
        span[5].appendChild(iconoX)
        if (span[5].hasChildNodes) {
            span[5].removeChild(icono)
        }
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

