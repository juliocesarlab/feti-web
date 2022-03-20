const smallFontSize = document.querySelector('#smallFontSize') 
const regularFontSize = document.querySelector('#regularFontSize')
const bigFontSize = document.querySelector('#bigFontSize')
const root = document.querySelector(':root')

const themeButton = document.querySelector('.theme-adjust').children[0]
const bgElements = document.querySelectorAll('section,  main, body, aside')
const body = document.querySelector('body')

//Adjust font-size of all page

smallFontSize.addEventListener('click', () => root.style.fontSize = '14px')
regularFontSize.addEventListener('click', () => root.style.fontSize = '16px')
bigFontSize.addEventListener('click', () => root.style.fontSize = '18.5px')

//adjust light theme of page

function setDarkTheme() {
  bgElements.forEach(el => {
    el.style.backgroundColor = '#202124'
    const children = [...el.children]
    children.forEach(children => children.style.color = '#fff')
  })

  document.querySelectorAll('.section-title').forEach(title => title.style.color = '#fff')
  document.querySelectorAll('a, i').forEach(text => text.style.color = '#fff')
  document.querySelectorAll('.logo-area, .search-area').forEach(header => header.style.backgroundColor = '#171717')

  const footerArea = document.querySelector('.address')
  footerArea.style.backgroundColor = '#171717'

  const news = document.querySelectorAll('.news-details')
  news.forEach(news => {
    news.style.backgroundColor = '#171717'
    const children = [...news.children]
    children.forEach(child => child.style.color = '#fff')
  })
}

function resetTheme() {
  bgElements.forEach(el => {
    el.style.backgroundColor = '#fff'
    const children = [...el.children]
    children.forEach(children => children.style.color = '#001859')
  })

  document.querySelectorAll('.section-title, a, i').forEach(title => title.style.color = '#001859')

  const headerArea = document.querySelectorAll('.logo-area, .search-area')
  headerArea[0].style.backgroundColor = '#001859'
  headerArea[1].style.backgroundColor = '#00216c'

  const footerArea = document.querySelectorAll('.contacts, .address')
  footerArea[0].style.backgroundColor = '#00216c'
  footerArea[1].style.backgroundColor = '#001859'

  const accessibilityBar = document.querySelector('.pos-nav')
  accessibilityBar.style.backgroundColor = '#00bef2'
  const abClickable = [...accessibilityBar.children]
  abClickable.forEach(item => item.style.color = '#fff')

  document.querySelectorAll('i').forEach(icon => icon.style.color = '#fff')

  const news = document.querySelectorAll('.news-details')
  news.forEach(news => {
    news.style.backgroundColor = '#EEEEEE'
    const children = [...news.children]
    children.forEach(child => {
      if (child.tagName === 'SPAN') {
        child.style.color = '#00bef2'
      } else {
        child.style.color = '#001859'
      }
    })
  })

}

function switchThemeButtonClass(e) {
  e.target.className.includes('off') 
  ? e.target.classList = e.target.className.replace('off', 'on')
  : e.target.classList = e.target.className.replace('on', 'off')

  return e.target.className.includes('on') 
}

function handleTheme(e) {
  const isButtonActive = switchThemeButtonClass(e)
  
  if (isButtonActive) {
    setDarkTheme()
  } else {
    resetTheme()
  }
}

themeButton.onclick = handleTheme

