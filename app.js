/*VALIDACIONES EN EL LOGIN*/



let nombre
let formulario = document.forms
let input = document.getElementsByClassName('input');
console.log(input);
let icono = document.createElement('i')
icono.setAttribute('class', 'fas fa-check');
icono.setAttribute('style', 'color: #0eb911;')

let iconoX = document.createElement('i')
iconoX.setAttribute('class', 'fas fa-times')
iconoX.setAttribute('style', 'color: #f51414;')

let cardsProducto = document.getElementsByClassName('card');
let descripcionProducto = document.getElementsByClassName('descripcionProducto')

// let pass1 = formulario[0]['passw1']['value']
// let pass2 = formulario[0]['confirmar']['value']

let pass1 = document.getElementById('pass1');
let pass2 = document.getElementById('pass2');


function validar(name, num, validacion) {

    let valor = formulario[0][name]['value']

    if (input[num].classList.contains("valido")) {
        input[num].classList.remove("valido")
    } else if (input[num].classList.contains("invalido")) {
        input[num].classList.remove("invalido")
    }
    if (validacion.test(valor)) {
        input[num].classList.add("valido");
    } else {
        input[num].classList.add("invalido");
    }

}

function contraseñaCoincide(pass1v,pass2,name,num) {

    pass1v=pass1.value;
    console.log(pass1.value);
console.log(pass2);
    if (input[num].classList.contains("valido")) {
        input[num].classList.remove("valido")
    } else if (input[num].classList.contains("invalido")) {
        input[num].classList.remove("invalido")
    }
    if (pass1v === pass2) {
        input[num].classList.add("valido");
    } else {
        input[num].classList.add("invalido");
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

    if (ejeY > 550) {
        barraNav.classList.add('sticky');
        barraNav.classList.add('a:visited');

    } else {
        barraNav.classList.remove('sticky');
    }
}



