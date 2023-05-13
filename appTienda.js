/********************TIENDA**********************/
let buscador, card, botonPaella, botonUtensilio, selectProducto,rangoPrecio, valorMaximo
buscador= document.getElementsByTagName('input')[0]
buscador.addEventListener('keyup',search)

card= document.getElementsByClassName('card')

botonPaella= document.getElementsByClassName('botonPaella')[0]
botonUtensilio= document.getElementsByClassName('botonUtensilio')[0]


botonPaella.addEventListener('click',mostrarPaellas)
botonUtensilio.addEventListener('click',mostrarUtensilios)

selectProducto= document.getElementById('selectProducto');


rangoPrecio=document.getElementById('barraPrecio');
valorMaximo= document.getElementsByClassName('valorMaximo')[0];
valorMaximo.textContent='Máx 0'

console.log(rangoPrecio.value);


function mostrarDescripcion(i) {

    descripcionProducto[i].classList.remove('descripcionProducto')
    descripcionProducto[i].classList.add('descripcionProducto2')
}

function search() {
    // inspeccionando he visto que outertext contiene todos los textos de las cards
    // rangoPrecio.value=0;
    // filtrarPrecio(0); se pisan 
    
    for (let i in card) {
        if(card[i].outerText.toLowerCase().includes(buscador.value.toLowerCase())){
            card[i].style.display='block';
        }else{
            card[i].style.display='none';
        }
    }

}

function mostrarUtensilios() {
    
    for (let i in card) {
        if(card[i].children[4].textContent.toLowerCase()=='utensilios'){
            card[i].style.display='block';
        }else{
            card[i].style.display='none';
        }
    }
}
function mostrarPaellas() {//lo suyo seria hacerlo en una unica funcion pero me da fallos con los param
    
    for (let i in card) {
        if(card[i].children[4].textContent.toLowerCase()=='paella'){
            card[i].style.display='block';
        }else{
            card[i].style.display='none';
        }
    }
}



function filtrarPrecio(valor) {

    valorMaximo.textContent='Máx '+valor;

    for (let i in card) {
        if (parseInt(card[i].childNodes[3].outerText) > valor) {
            card[i].style.display = 'block';
        } else {
            card[i].style.display = 'none';
        }
    }
    
}


