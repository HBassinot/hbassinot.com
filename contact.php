<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container" id="contact">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide hb-animate-opacity">CONTACT</span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64">
  <h1 class="w3-center">Vous pouvez me joindre ici</h1>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large" style="width:100%;height:400px;"></div>
    </div>

    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Adresse: Montréal, QC, CA<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Téléphone: +1 514 550 xxxx<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Email: herve (dot) bassinot (at) gmail (dot) com<br>
        <div class="hb-contact-social">
          <ul class="inlineList">
            <li>
              <a href="https://github.com/HBassinot" target="_blank">
                <img alt="Black Github Icon" data-type="image" class="contact-icon" title="GitHub" src="img/social/github.svg">
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/hbassinot/" target="_blank">
                <img alt="Black Linkedin Icon" data-type="image" class="contact-icon" title="LinkedIn" src="img/social/linkedin.svg">
              </a>
            </li>
            <li>
              <a href="https://twitter.com/hbassinot" target="_blank">
                <img alt="Black Twitter Icon" data-type="image" class="contact-icon" title="Twitter" src="img/social/twitter.svg">
              </a>
            </li>
          </ul>
        </div>
      </div>

      <p>Laissez moi un message:</p>
      <form action="/mail.php" target="_blank" method="post">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="hb-menu-button w3-black w3-right w3-section" name="envoi" type="submit">
          <i class="fa fa-paper-plane"></i>ENVOYER UN MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCW19i8dbfrAI5A7k6MyJqk8GZG-kNiToM&callback=initMap"></script>

