const typed = new Typed('.typed', {
//     strings: [
//     '<i class="escrito">Frond-End</i>',
//     '<i class="escrito">Back-End</i>'
// ],
    stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
	typeSpeed: 75, // Velocidad en mlisegundos para poner una letra,
	startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
	backSpeed: 75, // Velocidad en milisegundos para borrrar una letra,
	smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
	shuffle: false, // Alterar el orden en el que escribe las palabras.
	backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
	loop: true, // Repetir el array de strings
	loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
	showCursor: true, // Mostrar cursor palpitanto
	cursorChar: '|', // Caracter para el cursor
	contentType: 'html', // 'html' o 'null' para texto sin formato
});


// Boton menu
//media query en Javascript
const IPAD = window.matchMedia('screen and (max-width: 768px)');

const MENU = document.querySelector('.menu');
    // console.log(MENU);
const BURGER = document.querySelector('#burguer-menu');
    // console.log(BURGER);


IPAD.addListener(validation)

function validation(event){
    if(event.matches){
        BURGER.addEventListener('click',hideshow)
    }else{
        BURGER.removeEventListener('click',hideshow)
    }
}
validation(IPAD);

function hideshow(){
    if(MENU.classList.contains('is-active')){

        MENU.classList.remove('is-active');

    }else{
        MENU.classList.add('is-active');
    }
}

// boton ir arriba
document.querySelector('#buttonUp').addEventListener('click', scrollUp);

function scrollUp(){
    let currentScroll = document.documentElement.scrollTop || document.body.scrollTop;

    if(currentScroll > 0){
        window.scrollTo(0,0);
    }
}
buttonUp = document.querySelector('#buttonUp');
window.onscroll = function(){

    var scroll = document. documentElement.scrollTop;

    if(scroll > 250){
        buttonUp.style.transform = "scale(1)";
    }else if( scroll < 250){
        buttonUp.style.transform = "scale(0)";
    }
}
