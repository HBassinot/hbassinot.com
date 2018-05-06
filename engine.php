
<?php
  $lang_title = "Accueil - hbassinot.com";
  $lang_keywords = "parcours formations montreal expert liferay developpeur jee java paris spring desjardins savoir-faire linux herve bassinot";
  $lang_category = "expert liferay";
  $lang_description = "Expert Liferay analyste développeur et concepteur spécialisé dans les technologies Java";
  $lang_upPage = "Haut de page";

  function ClientSection($name, $logo) 
  {
    echo '<div class="hb-client-block">';
    echo '<img src="'. $logo .'" style="width:100%" class="w3-hover-opacity" alt="'. $name .'">';
    echo '<span class="hb-enterprise-name">'. $name .'</span>';
    echo '</div>';
  }

  function PageUp($txt)
  {
    echo '<div id="hb-backtop" class="hb-backtop-hide">';
    echo '<a href="#home" class="hb-menu-button w3-light-grey" >';
    echo '<i class="fa fa-arrow-up w3-margin-right"></i>';
    echo $txt;
    echo '</a>';
    echo '</div>';
  }
?>

