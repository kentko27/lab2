  function toggleMenu() {
    const menuIcon = document.querySelector('.menu-icon');
    const navLinks = document.querySelector('.nav-links');

    menuIcon.classList.toggle('active');
    navLinks.classList.toggle('show');
  }

  var title = {
    firstName: "Clart Kent",
    lastName: "Nailgas",
    country: "Philippines",
  };
  
  var titlehead = document.getElementById("text-8");
  titlehead.textContent = title.country();
  