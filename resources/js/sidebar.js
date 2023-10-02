const navImage = document.querySelector('#navImage')
const navLinks = document.querySelectorAll('.nav-link')

const sidebarButton = document.querySelector('#sidebarButton')

// Collapse sidebar by default
navImage.classList.toggle('hidden')
navLinks.forEach((link) => {
  link.classList.toggle('hidden')
})

sidebarButton.addEventListener('click', () => {
  navImage.classList.toggle('hidden')
  navLinks.forEach((link) => {
    link.classList.toggle('hidden')
  })
})