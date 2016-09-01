<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>"Webpage of Brent Bender"</title>
    <meta name = "description" content = ""California based designer | Web development, Photography, Leathercraft and other projects"">
    <meta name = "author" content = "Brent Bender">
    <meta name = "viewport" content = "width = device-width, initial-scale= 1">
    <link rel = "stylesheet" href = "simple-slideshow-styles.css">
    <link rel="stylesheet" type="text/css" href="/csstest.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400">
  </head>

  <body>

<!-- Header -->
    <header class="primary-header" role="banner">

      <h1 class="logo">
        <a href="homeTest.html">Brent <br> Bender</a>
      </h1>
      <nav class="navbar" role="navigation">
        <a href="index.php">Home</a>
        <a href="webdesign.php">Web Design</a>
        <a href="leather.php">Leather Design</a>
        <a href="photos.php">Photography</a>
        <a href="projects.php">Other Projects</a>
      </nav>
    </header>

<section class="hero">

  <h2>Dedicated to the Craft of Construction and Design</h2>

  <p>Displaying my creations for your inspiration and enjoyment</p>

</section>

<!-- Teasers -->
<div class="bss-slides">
  <figure>
    <img src="img/VFYW-TK.jpg" width="50%" />
      <figcaption>Istanbul, Turkey</figcaption>
  </figure>
  <figure>
    <img src="img/VFYW-DC.jpg" width="50%" />
      <figcaption>Washington, D.C.</figcaption>
  </figure>
       <!-- more figures here as needed -->

</div>
<script src="better-simple-slideshow.js"></script>
<script>
var opts = {
            //auto-advancing slides? accepts boolean (true/false) or object
            auto : false,
            // show fullscreen toggle? accepts boolean
            fullScreen : true,
            // support swiping on touch devices? accepts boolean, requires hammer.js
            swipe : false
        };
makeBSS('.bss-slides', opts);
</script>
<?php include("inc/footer.php");?>
