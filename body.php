<!-- Navbar (sit on top) -->
<nav class="hb-navbar-top" id="hb-nav">
  <!-- menu on desktop -->
  <div class="hb-menu-animate-opacity" id="hb-menu" >
    <a class="hb-menu-button w3-hover-black hb-menu-hide-large hb-menu-icon-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="hb-menu-icon-small"></i>
    </a>
    <a href="#home" class="hb-menu-button">Accueil</a>
    <!-- <a href="#about" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Bio</a>-->
    <a href="#xp" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Consultant</a>
    <!-- <a href="#skills" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Compétences</a>-->
    <a href="#projects" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Projets</a>
    <!-- <a href="#formations" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Formations</a>-->
    <a href="#contact" class="hb-menu-button hb-menu-hide-small"><i class="hb-menu-item"></i>Contact</a>
  </div>

  <!-- menu on small screens -->
  <div id="hb-menu-small" class="w3-bar-block w3-white w3-hide hb-menu-hide-large">
    <!-- <a href="#about" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Bio</a>-->
    <a href="#xp" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Consultant</a>
    <!-- <a href="#skills" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Compétences</a>-->
    <a href="#projects" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Projets</a>
    <!-- <a href="#formations" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Formations</a>-->
    <a href="#contact" class="hb-menu-button hb-menu-item-small" onclick="toggleFunction()">Contact</a>
  </div>
</nav>

<!-- First Parallax Image with Logo Text -->
<div class="hb-home-bgimg w3-display-container" id="home">
  <div class="hb-home-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide">HERVÉ BASSINOT</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-48" id="about">
  <h1 class="w3-center">Bio</h1>
  <p class="w3-center">
    <em>
      <blockquote>"We programmers spend our lives writing code so that our fellow human beings no longer need to write code"</blockquote>  
    </em>
    <cite>-- Jeff Atwood</cite>
  </p>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <p class="w3-center">
    //TODO write a good story about me ;)
  </p>

  <p class="w3-justify w3-content w3-container">
    Analyste développeur et concepteur spécialisé dans les technologies Java.  
    Je possede plus de 6 ans d'expériences professionnelle en développement logiciel.
    J'ai participé à de nombreux projets en interne et pour plusieurs clients dans différents domaines (Publicité, Télécom, Assurance, Bancaire et Énergie).
    Je me suis spécialisé dans le développement d'applications Liferay.
  </p>
  
  <div class="w3-third w3-section">
    <span class="w3-xlarge">6+</span><br>
    Années d'expérience
  </div>
  <div class="w3-third w3-section">
    <span class="w3-xlarge">12+</span><br>
    Projets réussis
  </div>
  <div class="w3-third w3-section">
    <span class="w3-xlarge">6+</span><br>
    Missions chez le client
  </div>
</div>

<!-- Second Parallax Image with code -->
<div class="hb-code-bgimg hb-section-img w3-display-container" id="xp">
  <div class="hb-home-display-middle" style="">
    <div class="w3-left w3-padding-large w3-black w3-xlarge w3-wide hb-animate-opacity">Consultant:<br> Liferay / Java / JEE</div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-48">
  <h1 class="w3-center">Expériences professionnelle</h1>
  
  <h3 class="w3-center"><em>Entreprises</em></h3>
  <p class="w3-center">
    <em>Voici ci-dessous toutes les entreprises pour lesquelles j'ai travaillé.<br> 
    Cliquez sur les fleches pour plus de détails :</em>
  </p>

  <br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">

    <div class="hb-enterprise-block">
      <div class="hb-enterprise-left">
        <img src="img/logo-enterprise/logo-savoirfairelinux.png" class="hb-enterprise-logo" onclick="onClick(this)" class="w3-hover-opacity" alt="Savoir-faire Linux"/>
      </div>
      <div class="hb-enterprise-desc">
        <h4 class="hb-enterprise-poste">Consultant en logiciel libre</h4>
        <div class="hb-enterprise-name">Savoir-faire Linux</div>
        <div class="hb-enterprise-date">Sept. 2015 à aujourd'hui</div>
      </div>
    </div>
    <div class=" hb-enterprise-block-a">
      <img src="img/arrow-down.png" class="hb-enterprise-arrow" class="w3-hover-opacity" alt="arrow"/>
    </div>


    <div class="hb-enterprise-block">
      <div class="hb-enterprise-left">
        <img src="img/logo-enterprise/logo-obs.png" class="hb-enterprise-logo" onclick="onClick(this)" class="w3-hover-opacity" alt="Orange Business Services"/>
      </div>
      <div class="hb-enterprise-desc">
        <h4 class="hb-enterprise-poste">Ingénieur concepteur</h4>
        <div class="hb-enterprise-name">Orange Business Services</div>
        <div class="hb-enterprise-date">Oct. 2014 à Aout 2015</div>
      </div>
    </div>
    <div class=" hb-enterprise-block-a">
      <img src="img/arrow-down.png" class="hb-enterprise-arrow" class="w3-hover-opacity" alt="arrow"/>
    </div>


    <div class="hb-enterprise-block">
      <div class="hb-enterprise-left">
        <img src="img/logo-enterprise/logo-axileo.png" class="hb-enterprise-logo" onclick="onClick(this)" class="w3-hover-opacity" alt="Axileo">
      </div>
      <div class="hb-enterprise-desc">
        <h4 class="hb-enterprise-poste">Ingénieur d'études</h4>
        <div class="hb-enterprise-name">Axileo</div>
        <div class="hb-enterprise-date">Oct. 2012 à Sept 2014</div>
      </div>
    </div>
    <div class=" hb-enterprise-block-a">
      <img src="img/arrow-down.png" class="hb-enterprise-arrow" class="w3-hover-opacity" alt="arrow"/>
    </div>
  </div>

  <h3 class="w3-center"><em>Stages</em></h3>

  <div class="w3-row-padding w3-center">

    <div class="hb-enterprise-block">
      <div class="hb-enterprise-left">
        <img src="img/logo-enterprise/logo-edf.png" class="hb-enterprise-logo" onclick="onClick(this)" class="w3-hover-opacity" alt="EDF">
      </div>
      <div class="hb-enterprise-desc">
        <h4 class="hb-enterprise-poste">Stagiaire développeur Java/JEE</h4>
        <div class="hb-enterprise-name">EDF</div>
        <div class="hb-enterprise-date">Avri. 2012 à Sept. 2012</div>
      </div>
    </div> 
    <div class=" hb-enterprise-block-a">
      <img src="img/arrow-down.png" class="hb-enterprise-arrow" class="w3-hover-opacity" alt="arrow"/>
    </div>


    <div class="hb-enterprise-block">
      <div class="hb-enterprise-left">
        <img src="img/logo-enterprise/logo-edf.png" class="hb-enterprise-logo" onclick="onClick(this)" class="w3-hover-opacity" alt="EDF">
      </div>
      <div class="hb-enterprise-desc">
        <h4 class="hb-enterprise-poste">Stagiaire développeur Java/JEE</h4>
        <div class="hb-enterprise-name">EDF</div>
        <div class="hb-enterprise-date">Mai. 2011 à Sept. 2011</div>
      </div>
    </div> 
    <div class=" hb-enterprise-block-a">
      <img src="img/arrow-down.png" class="hb-enterprise-arrow" class="w3-hover-opacity" alt="arrow"/>
    </div>


    <div class="hb-enterprise-block">
      <div class="hb-enterprise-left">
        <img src="img/logo-enterprise/logo-orange.png" class="hb-enterprise-logo" onclick="onClick(this)" class="w3-hover-opacity" alt="Orange">
      </div>
      <div class="hb-enterprise-desc">
        <h4 class="hb-enterprise-poste">Stagiaire développeur</h4>
        <div class="hb-enterprise-name">Orange</div>
        <div class="hb-enterprise-date">Juin 2010 à Sept. 2010</div>
      </div>
    </div>
    <div class=" hb-enterprise-block-a">
      <img src="img/arrow-down.png" class="hb-enterprise-arrow" class="w3-hover-opacity" alt="arrow"/>
    </div>
  </div>

  <br>
  
  <h3 class="w3-center"><em>Clients</em></h3>

  <p class="w3-center">
    <em>Voici ci-dessous les clients chez qui j'ai effectué des missions en tant que consultant.</em>
  </p>

  <div class="hb-clients w3-row-padding w3-center w3-section">
    <div class="hb-client-block">
      <img src="img/logo-mission/mission-betc.png" style="width:100%" class="w3-hover-opacity" alt="BETC">
      <span class="hb-enterprise-name">BETC</span>
    </div>

    <div class="hb-client-block">
      <img src="img/logo-mission/mission-dgag.png" style="width:100%" class="w3-hover-opacity" alt="Desjardins Groupe d'Assurances Générales">
      <span class="hb-enterprise-name">Desjardins Groupe d'Assurances Générales</span>
    </div>

    <div class="hb-client-block">
      <img src="img/logo-mission/mission-touchtunes.png" style="width:100%" class="w3-hover-opacity" alt="Touchtunes">
      <span class="hb-enterprise-name">Touchtunes</span>
    </div>

    <div class="hb-client-block">
      <img src="img/logo-mission/mission-desjardins.png" style="width:100%" class="w3-hover-opacity" alt="Desjardins">
      <span class="hb-enterprise-name">Desjardins</span>
    </div>

    <div class="hb-client-block">
      <img src="img/logo-mission/mission-erdf.png" style="width:100%" class="w3-hover-opacity" alt="Enedis">
      <span class="hb-enterprise-name">Enedis (ex ERDF)</span>
    </div>

    <div class="hb-client-block">
      <img src="img/logo-mission/mission-edf.png" style="width:100%" class="w3-hover-opacity" alt="EDF">
      <span class="hb-enterprise-name">EDF</span>    
    </div>

    <!-- <button class="hb-menu-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>-->

  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.hb-clients').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });
    });
  </script>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="hb-modal w3-black" onclick="this.style.display='none'">
  <span class="hb-menu-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<hr/>

<!-- Container (Skill Section) -->
<div class="w3-content w3-container w3-padding-48" id="skills">
  <h1 class="w3-center">Compétences</h1>
  <p class="w3-center"><em>La liste de mes compétences</em></p>
  <div class="w3-row-padding w3-center w3-section">
//TODO
  </div>
</div>

<hr/>

<!-- Container (Formations Section) -->
<?php include("formation.php"); ?>

<!-- Container (Project Section) -->
<div class="hb-project-bgimg w3-display-container hb-section-img" id="projects">
  <div class="hb-home-display-middle" style="">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide hb-animate-opacity">PROJETS</span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-48">
  <h1 class="w3-center">Projets Perso</h1>

  <div class="w3-center">
    <em><a href="/koch">Flocon de Koch: HTML5 et JS</a></em><br/>
    <em><a href="https://github.com/HBassinot/Basic-Messenger">Micro Serveur de Messagerie: C et BASH</a></em><br/>
    <em><a href="https://github.com/HBassinot/T9-Console">T9 en mode console: C</a></em>
  </div>

  <h1 class="w3-center">Projets Pro</h1>

  <p class="w3-center">
    <em>Au cours de mes différentes missions, j'ai eu l'occasion de travailler sur de nombreux projets intéressants. 
    Voici ci-dessous une liste des projets et des sites publics sur lesquels j'ai pu travailler:</em>
  </p>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m6">
      <a href="https://www.lapersonnelle.com" title="La Personnelle" target="_blank">
        <img src="img/projet/capture-lptp.png" style="width:100%; box-shadow: 0px 0px 10px 3px rgba(0,0,0,0.5);" class="w3-hover-opacity" alt="Site La Personnelle">
        <span class="hb-enterprise-name">La Personnelle (2017)</span>
      </a>
    </div>

    <div class="w3-col m6">
      <a href="https://www.desjardinsassurancesgenerales.com" title="Desjardins Assurances" target="_blank">
        <img src="img/projet/capture-dadi.png" style="width:100%; box-shadow: 0px 0px 10px 3px rgba(0,0,0,0.5);" class="w3-hover-opacity" alt="Site Desjardins Assurances">
        <span class="hb-enterprise-name">Desjardins Assurances (2016)</span>
      </a>
    </div>

    <div class="w3-col m6">
      <a href="https://www.dan-on.com" title="DanOn" target="_blank">
        <img src="img/projet/capture-danon.png" style="width:100%; box-shadow: 0px 0px 10px 3px rgba(0,0,0,0.5);" class="w3-hover-opacity" alt="Site DanOn">
        <span class="hb-enterprise-name">DanOn (2014)</span>
      </a>
    </div>

    <div class="w3-col m6">
      <a href="https://mediateur.edf.fr/" title="EDF Médiateur" target="_blank">
        <img src="img/projet/capture-mediateur.png" style="width:100%; box-shadow: 0px 0px 10px 3px rgba(0,0,0,0.5);" class="w3-hover-opacity" alt="Site Médiateur EDF">
        <span class="hb-enterprise-name">EDF Médiateur (2013)</span>
      </a>
    </div>
  </div>
</div>


<!-- Container (Contact Section) -->
<?php include("contact.php"); ?>

<div id="hb-backtop" class="hb-backtop-hide">
  <a href="#home" class="hb-menu-button w3-light-grey" >
    <i class="fa fa-arrow-up w3-margin-right"></i>
    Haut de page
  </a>
</div>

