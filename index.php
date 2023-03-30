<!DOCTYPE html>

<?php 
  // this file loads functions and variables
  include("engine.php"); 
?>

<html>
  <head>
      <meta charset="utf-8" />
      
      <title><?php echo $lang_title ?></title>

      <meta name="viewport"     content="width=device-width, initial-scale=1">
      <meta name="keywords"     content="<?php echo $lang_keywords ?>">
      <meta name="category"     content="<?php echo $lang_category ?>">
      <meta name="Description"  content="<?php echo $lang_description ?>">

      <script src="js/main.js"></script>

      <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css"/>
      <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="/css/main.css" />

      <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
			<link rel="canonical" href="https://hbassinot.com"/>
			<link rel="alternate" href="https://hbassinot.com" hreflang="fr-fr">

      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9616193945098523"
			crossorigin="anonymous"></script>

      <?php include("analytics.php"); ?>
  </head>

  <body>
    <?php 
      //<!-- header -->
      include("content/header.php"); 

      //<!-- content -->
      include("content/content.php");

      //<!-- footer -->
      include("content/footer.php"); 
    ?>
  </body>
</html>
