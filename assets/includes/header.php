<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Specific Dynamics: Drones for the Future</title>
  <link rel="stylesheet" href="<?php echo($path)?>/assets/css/style.css">
</head>
<!--main body-->

<body>
  <header>
    <div class="name_logo">
      <img src="<?php echo($path)?>/assets/images/logo.png" alt="Specific Dynamics Logo">
      <h1>Specific Dynamics</h1>
    </div>
    <nav>
      <ul class="mainnav">
        <li class="layer1"><a href="<?php echo($path)?>/index.html" class="page" <?php if ($title === 'Home'){echo("id='currentpage'");}?>>Home</a></li>
        <li id="layer1sm">
          <div class="page">products</div>
          <ul class="subnav">
            <li class="layer2"><a href="<?php echo($path);?>/pages/products/recreational.html" class="page" <?php if ($title === 'HERMES Platform'){echo("id='currentpage'");}?>>Recreational Drones</a></li>
            <li class="layer2"><a href="<?php echo($path)?>/pages/products/agricultural.html" class="page" <?php if ($title === 'DEMETER Platform'){echo("id='currentpage'");}?>>Agricultural Drones</a></li>
            <li class="layer2"><a href="<?php echo($path)?>/pages/products/emergency_services.html" class="page" <?php if ($title === 'CHIRON Platform'){echo("id='currentpage'");}?>>Emergency Service Drones</a></li>
            <li class="layer2"><a href="<?php echo($path)?>/pages/products/military.html" class="page" <?php if ($title === 'ATLAS Platform'){echo("id='currentpage'");}?>>Military Drones</a></li>
          </ul>
        </li>
        <li class="layer1"><a href="<?php echo($path)?>/pages/about.html" class="page" <?php if ($title === 'About Us'){echo("id='currentpage'");}?>>About Us</a></li>
        <li class="layer1" id="layer1sm">
          <a href="<?php echo($path)?>/pages/staff/index.html" class="page" <?php if ($title === 'Meet the Team'){echo("id='currentpage'");}?>>Meet the Team</a>
          <ul class="subnav">
            <li class="layer2"><a href="<?php echo($path)?>/pages/staff/gabriel.html" class="page" <?php if ($title === 'Gabriel Nellis'){echo("id='currentpage'");}?>>Gabriel Nellis</a></li>
            <li class="layer2"><a href="<?php echo($path)?>/pages/staff/ravin.html" class="page" <?php if ($title === 'Ravin Looknauth'){echo("id='currentpage'");}?>>Ravin Looknauth</a></li>
            <li class="layer2"><a href="<?php echo($path)?>/pages/staff/anthony.html" class="page" <?php if ($title === 'Anthony Austin'){echo("id='currentpage'");}?>>Anthony Austin</a></li>
            <li class="layer2"><a href="<?php echo($path)?>/pages/staff/matt.html" class="page" <?php if ($title === 'Matt Marana'){echo("id='currentpage'");}?>>Matt Marana</a></li>
            <li class="layer2"><a href="<?php echo($path)?>/pages/staff/duncan.html" class="page" <?php if ($title === 'Duncan Priestley'){echo("id='currentpage'");}?>>Duncan Priestley</a></li>
          </ul>
        </li>
        <li class="layer1"><a href="<?php echo($path)?>/pages/contact.html" class="page"  <?php if ($title === 'Contact Us'){echo("id='currentpage'");}?>>Contact Us</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <h1><?php echo($title);?>/h1>