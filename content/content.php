<!-- Navbar (sit on top) -->
<nav class="hb-navbar-top" id="hb-nav">
  <!-- menu on desktop -->
  <div class="hb-menu-animate-opacity" id="hb-menu" >
    <a class="hb-menu-button w3-hover-black hb-menu-hide-large hb-menu-icon-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="hb-menu-icon-small"></i>
    </a>
    <a href="#home" class="hb-menu-button">Accueil</a>
    <a href="#enterprise" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Consultant</a>
    <a href="#projects" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Projets</a>
    <a href="#contact" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Contact</a>
  </div>

  <!-- menu on small screens -->
  <div id="hb-menu-small" class="w3-bar-block w3-white w3-hide hb-menu-hide-large">
    <a href="#enterprise" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Consultant</a>
    <a href="#projects" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Projets</a>
    <a href="#contact" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Contact</a>
  </div>
</nav>


<?php 
  //<!-- Container (Home Section) -->
  include("section-home.php");

  //<!-- Container (Enterprise Section) -->
  include("section-enterprise.php");

  //<!-- Container (Project Section) -->
  include("section-project.php");

  //<!-- Container (Contact Section) -->
  include("section-contact.php");

  PageUp($lang_upPage);
?>

