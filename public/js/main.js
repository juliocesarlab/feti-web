const menuBtn = document.querySelector('.hamb-button');
const closeMenuBtn = document.querySelector('.close-menu-button');
const menu = document.querySelector('.mobile-menu');
const overlay = document.querySelector('.overlay')
const searchButton = document.querySelector('.search-icon')
const searchNewsForm = document.querySelector('#search-news-form')


searchButton.addEventListener('click', (e) => searchNewsForm.submit())


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