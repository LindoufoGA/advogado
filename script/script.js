// MENU-HAMBURGUER
const menuMobile = document.getElementById("btn-mobile");

function abrirMenu() {
  const menu = document.getElementById("nav");
  menu.classList.toggle("ativo");
}
menuMobile.addEventListener("click", abrirMenu);


// ACORDDION PERGUNTAS
function initAccordion() {
  const accordionList = document.querySelectorAll(".js-accordion dt");
  const ativoClass = "ativo";

  if (accordionList.length) {
    accordionList[0].classList.add(ativoClass);
    accordionList[0].nextElementSibling.classList.add(ativoClass);

    function activeAccordion() {
      this.classList.toggle(ativoClass);
      this.nextElementSibling.classList.toggle(ativoClass);
    }

    accordionList.forEach((item) => {
      item.addEventListener("click", activeAccordion);
    });
  }
}
initAccordion();

// ANIMA SCROLL
function initAnimaScroll() {
  const sections = document.querySelectorAll(".js-content");
  if (sections.length) {
    const height = window.innerHeight * 0.6;

    function animaScroll() {
      console.log('anima scroll')
      sections.forEach((item) => {
        const distanciaTop = item.getBoundingClientRect().top;
        const secaoVisivel = distanciaTop - height < 0;
        if (secaoVisivel) {
          item.classList.add("ativo");
        }
      });
    }
    animaScroll();
    window.addEventListener("scroll", animaScroll);
  }
}
initAnimaScroll();

const elemento = document.getElementById('text')
const texto = elemento.innerText;
const intervalo = 100;

function mostrarTexto(elemento, texto, intervalo) {
  const char = texto.split("").reverse();
  const typer = setInterval(() => {
    if(!char.length) {
      return clearInterval(typer);
    }

    const next = char.pop();

    elemento.innerHTML += next;
  }, intervalo);
}
mostrarTexto(elemento, texto, intervalo)