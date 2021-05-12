function menuToggler() {
  var x = document.getElementById('mainMenu')
  if (x.style.display === 'block') {
    x.style.display = 'none'
  } else {
    x.style.display = 'block'
  }
}

$(document).ready(function () {
  $(window).resize(function () {
    var mainMenu = document.getElementById('mainMenu')
    var y = document.getElementById('navbar')
    var yHeight = y.offsetHeight
    if ($('body').width() >= 768) {
      mainMenu.style.display = 'flex'
    } else {
      mainMenu.style.display = 'none'
    }
  })
})
