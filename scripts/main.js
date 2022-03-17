const menuBtn = document.querySelector('.hamb-button');
const closeMenuBtn = document.querySelector('.close-menu-button');
const menu = document.querySelector('.mobile-menu');
const body = document.querySelector('body')


function handleMenu(e) {
  menu.classList.toggle('show')
  return
}

menuBtn.addEventListener('click', handleMenu)
closeMenuBtn.addEventListener('click', handleMenu)

/* create a background, so event target is more specifically. In the way are u doing, u is calling handleMenu 2 times by click