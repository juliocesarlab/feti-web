const menuBtn = document.querySelector('.hamb-button');
const closeMenuBtn = document.querySelector('.close-menu-button');
const menu = document.querySelector('.mobile-menu');
const overlay = document.querySelector('.overlay')


const handleMenu = (e) => {
  e.stopPropagation()
  menu.classList.toggle('show') 
  overlay.classList.toggle('show') 
}

closeMenuBtn.onclick = handleMenu
menuBtn.onclick = handleMenu

overlay.addEventListener('click', (e) => {
   {
    menu.classList.toggle('show') 
    overlay.classList.toggle('show')
  } 
})