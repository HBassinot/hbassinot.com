<!-- Second Parallax Image with code -->
<div class="hb-code-bgimg hb-section-img w3-display-container" id="enterprise">
  <div class="hb-home-display-middle">
    <div class="w3-left w3-padding-large w3-black w3-xlarge w3-wide hb-animate-opacity">Consultant:<br> Liferay / Java / JEE</div>
  </div>
</div>

<!-- Container (Pro Section) -->
<?php include("subsection-pro.php"); ?>

<hr/>

<!-- Container (Skill Section) -->
<?php include("subsection-skill.php"); ?>

<hr/>

<!-- Container (Formations Section) -->
<?php include("subsection-formation.php"); ?>

<!-- 
<div class="w3-center">
  <a href="/cv.pdf" class="hb-menu-button w3-padding-large w3-light-grey" style="margin-top:64px;">
    Télécharger mon C.V. au format PDF
  </a>
</div>
-->

<?php
$path = "."; 

$latest_ctime = 0;
$latest_filename = '';    

$d = dir($path);
while (false !== ($entry = $d->read())) {
  $filepath = "{$path}/{$entry}";
  // could do also other checks than just checking whether the entry is a file
  if (is_file($filepath) && filectime($filepath) > $latest_ctime) {
    $latest_ctime = filectime($filepath);
    $latest_filename = $entry;
  }
}
?>

<p style="text-align:right; padding:5px;">Mis à jour le<?php echo ": ".date("d-M-Y", $latest_ctime) ?></p>






