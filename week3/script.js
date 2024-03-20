  function toggleMenu() {
    const menuIcon = document.querySelector('.menu-icon');
    const navLinks = document.querySelector('.nav-links');

    menuIcon.classList.toggle('active');
    navLinks.classList.toggle('show');
  }

  var title = {
    country: "Philippines",
    call: function(){
      return this.country
    } 
  };
  
  var titlehead = document.getElementById("text-8");
  titlehead.textContent = title.call();
  
  const title2 = {
    firstName: "Clart Kent",
    lastName: "Nailgas",
    country: "Philippines",
    call2: function(){
      return this.country
    }
  };

  export default title2;

  import title from './title2.js'

  const title21 = document.getElementById("text-a");
  title21.textContent = title2.call2();