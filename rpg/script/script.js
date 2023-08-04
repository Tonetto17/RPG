// Animação do click em apertar as imagens
function slider(anything) {
    document.querySelector('.one').src = anything;

};

// fim

//Texto na frente das imagens 
function showText(personagem) {
    var texto = '';
  
    if (personagem === 'personagem1') {
      texto = 'Medieval';
    } else if (personagem === 'personagem2') {
      texto = 'Faroeste';
    } else if (personagem === 'personagem3') {
      texto = 'Futurista';
    }
  
    document.getElementById('textoPersonagem').textContent = texto;
  }
  // Final


// Menu
let darkmode = document.querySelector ('#darkmode');

darkmode.onclick = () => {
    if(darkmode.classList.contains('bx-moon')){
        darkmode.classList.replace ('bx-moon', 'bx-sun');
        document.body.classList.add ('color');
    } else{
        darkmode.classList.replace('bx-sun','bx-moon');
        document.body.classList.remove('color');
    }
};
let menu = document.querySelector('#menu-icon');
let Links = document.querySelector ('.Links');

menu.onclick = () => {
    menu.classList.toggle ('bx-x');
    Links.classList.toggle ('open');
};

window.onscroll = () => {
    menu.classList.remove ('bx-x');
    Links.classList.remove('open');
};


// FIM
 
// letras conteudo
const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["jornada ⬇", "aventura ⬇"];
const typingDelay = 200;
const erasingDelay = 100;
const newTextDelay = 2000; 
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    setTimeout(erase, newTextDelay);
  }
}

function erase() {
  if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // load infinito
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});
  


