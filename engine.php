
<?php 
  function ClientSection($name, $logo) 
  {
    echo '<div class="hb-client-block">';
    echo '<img src="'. $logo .'" style="width:100%" class="w3-hover-opacity" alt="'. $name .'">';
    echo '<span class="hb-enterprise-name">'. $name .'</span>';
    echo '</div>';
  }


?>

