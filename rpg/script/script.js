// Animação do click em apertar as imagens
function slider(anything) {
    document.querySelector('.one').src = anything;

};

// fim

//Texto na frente das imagens 
var typingInterval = null; // Variável global para armazenar o intervalo de digitação

function showTextWithTypingEffect(personagem) {
  var texto = '';

  if (personagem === 'personagem1') {
    texto = "Neste cenário repleto de maravilhas e desafios, aventure-se por florestas ancestrais, ruínas esquecidas e cidades majestosas em busca de tesouros lendários e poderosas relíquias. Forje alianças com companheiros de jornada, cada um com habilidades únicas, e juntos enfrentem ameaças sombrias que espreitam nos recantos mais obscuros.";
  } else if (personagem === 'personagem2') {
    texto = " Bem-vindo ao mundo implacável do Velho Oeste, onde homens valentes e mulheres destemidas se aventuram nas vastas terras selvagens, em busca de fama, fortuna e justiça. No horizonte, o sol escaldante banha as cidades empoeiradas, onde foras da lei tramam seus planos, e xerifes corajosos estão prontos para manter a ordem.";
  } else if (personagem === 'personagem3') {
    texto = "Prepare-se para mergulhar em um mundo onde os limites entre o humano e o artificial se desvaneceram, onde a jornada pela verdade e justiça irá desafiar sua perspectiva sobre o futuro da humanidade. Seja bem-vindo(a), suas escolhas definirão o futuro!";
  }
  var textElement = document.getElementById('textoPersonagem');
  textElement.textContent = ''; // Limpa o conteúdo anterior

  if (typingInterval) {
    clearInterval(typingInterval);
  }

  var index = 0;

  function typeNextChar() {
    if (index < texto.length) {
      textElement.textContent += texto[index];
      index++;
      typingInterval = setTimeout(typeNextChar, 50);
    }
  }

  typeNextChar();
}

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

function checkScroll() {
  var header = document.getElementById('main-header'); // Seletor do header
  var scrollPosition = window.scrollY; // Posição atual da rolagem

  // Verifica se a posição de rolagem é maior que 0
  if (scrollPosition > 0) {
      header.classList.add('dark-header'); // Adiciona a classe para escurecer o header
  } else {
      header.classList.remove('dark-header'); // Remove a classe
  }
}

// Define um ouvinte de evento para a rolagem da janela
window.addEventListener('scroll', checkScroll);
    


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
  


