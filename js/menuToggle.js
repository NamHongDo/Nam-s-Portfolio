function toggleMenu() {
    document.getElementById("primaryNav").classList.toggle("open");
}

window.onclick = function(event) {
  if (!event.target.matches('.hamburgerBtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('open')) {
        openDropdown.classList.remove('open');
      }
    }
  }
}

var x = document.getElementsByClassName('hamburgerBtn');
x.onclick =toggleMenu;
