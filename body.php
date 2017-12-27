<!-- Navbar (sit on top) -->
<nav class="hb-navbar-top" id="hb-nav">
  <!-- menu on desktop -->
  <div class="hb-menu-animate-opacity" id="hb-menu" >
    <a class="hb-menu-button w3-hover-black hb-menu-hide-large hb-menu-icon-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="hb-menu-icon-small"></i>
    </a>
    <a href="#home" class="hb-menu-button">Accueil</a>
    <a href="#about" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Bio</a>
    <a href="#xp" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Expériences</a>
    <a href="#skills" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Compétences</a>
    <a href="#projects" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Projets</a>
    <a href="#formations" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Formations</a>
  </div>

  <!-- menu on small screens -->
  <div id="hb-menu-small" class="w3-bar-block w3-white w3-hide hb-menu-hide-large">
    <a href="#about" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Bio</a>
    <a href="#xp" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">XP</a>
    <a href="#skills" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Compétences</a>
    <a href="#projects" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Projets</a>
    <a href="#formations" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Formations</a>
  </div>
</nav>

<!-- First Parallax Image with Logo Text -->
<div class="hb-home-bgimg w3-display-container" id="home">
  <div class="hb-home-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide hb-animate-opacity">HBASSINOT.COM</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h2 class="w3-center">Bio</h2>
  <p class="w3-center">
    <em>
      <blockquote>"We programmers spend our lives writing code so that our fellow human beings no longer need to write code"</blockquote>
      <cite>Jeff Atwood</cite>
    </em>
  </p>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <p class="w3-center">//TODO write a good story about me ;)</p>
  <div class="w3-third w3-section">
    <span class="w3-xlarge">6 ans+</span><br>
    d'expérience professionnelle
  </div>
  <div class="w3-third w3-section">
    <span class="w3-xlarge">15+</span><br>
    Projets réussis
  </div>
  <div class="w3-third w3-section">
    <span class="w3-xlarge">8+</span><br>
    Missions chez le client
  </div>
</div>

<!-- Second Parallax Image with code -->
<div class="hb-code-bgimg w3-display-container" id="xp">
  <div class="hb-home-display-middle" style="">
    <div class="w3-left w3-padding-large w3-black w3-xlarge w3-wide hb-animate-opacity">Consultant:<br> Liferay / Java / JEE</div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64">
  <h2 class="w3-center">Experiences professionnelle</h2>
  
  <p class="w3-center">
    <em>Voici ci-dessous les entreprises chez lesquelles j'ai travaillé.<br> Cliquez sur les logos pour plus de détails :</em>
  </p>

  <br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m1">
      <img src="img/logo-pixel.png" style="width:100%">
    </div>
    
    <div class="w3-col m2">
      <img src="img/logo-savoirfairelinux.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity hb-work-logo" alt="Savoir-faire Linux">
      <span class="hb-enterprise-name">Savoir-faire Linux</span>
      <div style="display:none" data-date-start="2015" data-date-end="now">
        
      </div>
    </div>

    <div class="w3-col m2">
      <img src="img/logo-obs.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity hb-work-logo" alt="Orange Business Services">
      <span class="hb-enterprise-name">Orange Business Services</span>
    </div>

    <div class="w3-col m2">
      <img src="img/logo-axileo.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity hb-work-logo" alt="Axileo">
      <span class="hb-enterprise-name">Axileo</span>
    </div>

    <div class="w3-col m2">
      <img src="img/logo-edf.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity hb-work-logo" alt="EDF">
      <span class="hb-enterprise-name">EDF</span>
    </div>
    
    <div class="w3-col m2">
      <img src="img/logo-orange.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity hb-work-logo" alt="Orange">
      <span class="hb-enterprise-name">Orange</span>
    </div>
    
    <div class="w3-col m1">
      <img src="img/logo-pixel.png" style="width:100%">
    </div>
  </div>

  <br><br>
  
  <p class="w3-center">
    <em>Voici ci-dessous les clients chez qui j'ai travaillé.<br> Cliquez sur les logos pour plus de détails :</em>
  </p>

  <br>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
    </div>

    <button class="hb-menu-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>

  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="hb-modal w3-black" onclick="this.style.display='none'">
  <span class="hb-menu-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="skills">
  <h2 class="w3-center">Compétences</h2>
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
 ABCD
  </div>
</div>


<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h2 class="w3-center">Contact</h2>
  <p class="w3-center"><em>Laissez moi un message</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Montréal, QC, CA<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Téléphone: +1 514 550 xxxx<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Email: herve (dot) bassinot (at) gmail (dot) com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="hb-menu-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<div id="hb-backtop" class="hb-backtop-hide">
  <a href="#home" class="hb-menu-button w3-light-grey" >
    <i class="fa fa-arrow-up w3-margin-right"></i>
    Haut de page
  </a>
</div>

<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCW19i8dbfrAI5A7k6MyJqk8GZG-kNiToM&callback=initMap"></script>



