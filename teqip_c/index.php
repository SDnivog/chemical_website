<!DOCTYPE html>
<html>
<head>
	<title>Department of Chemical Engineering</title>
  <link rel = "icon" href ="../favicon.ico" type = "image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="../css/main.css">
     <link rel="stylesheet" type="text/css" href="../css/responsive.css">
     <style type="text/css">
     	*{
     		font-family: verdana;
     	}
        .teqip li{
            font-size: 13px;
        }
     </style>
     <!-- Script for Date -->
              <script type="text/javascript">
              var fxn = function() {
var now = new Date(), // current date
        months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']; // you get the idea
        time = now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds(), // again, you get the idea

        // a cleaner way than string concatenation
        date = [now.getDate(),
                months[now.getMonth()],
                now.getFullYear()].join(' ');

  document.getElementById('time').innerHTML = [date, time].join(' / ');
}
setInterval(fxn, 1000);
              </script>

</head>
<body>
<?php include('../header.php') ?>
<?php include('../navbar.php') ?>

<section class="container py-3 text-primary">
    <h4 class="text-primary py-2"><b>Projects Under TEQIP</b></h4>
    <ul class="teqip">
          <li>Synthesis and Characterization of Doped Zinc Oxide Nanoparticles for Degradation of Chlorophenol.</li>
          <li>Synthesis and Characterization of Catalyzed for Decomposition of 4-NP</li>
          <li>Studies on the Fabrication of Dye-Sensitized Solar Cell</li>
          <li>Preparation of Cement Composites using Waste Biomass Ash</li>
          <li>Effect of Surface Tension and Foaming on Mass Transfer in packed Bed Reactor</li>
          <li>Mass Transfer Studies in Lab Scale Airlift Reactor</li>
          <li>Preparation of activated carbon from biomass and its absorption studies for water and air pollutants removal</li>
          <li>Preparation of Cement composites using waste biomass ash</li>
          <li>Conversion of waste biomass to biofuels, biochemicals by hydrolysis technique</li>
          <li>Preparation, characterization and application of magnetic nano composites in removal of chromium from industrial waste water</li>
          <li>Design and performance of personalized comfort for  industrial workers</li>
          <li>Coloured wastewater treatment by using spiral wound nanofiltration membrane</li>
          <li>Coloured wastewater treatment by using Photochemical reactor</li>
          <li>Modelling and Simulation of Spiral Wound Nanofiltration Membrane</li>
          <li>Study on lead removal and model development for spiral wound nanofiltration membrane</li>
          <li>Preparation and Characterization of Activated Carbon</li>
          <li>TiO2Photocatalysis in Cementitious System</li>
          <li>Development of starch/cellulose based edible coating on fresh fruits/vegetables using waste biomass</li>
          <li>Catalytic Co-pyrolysis studies of biomass and plastics in producing bio-fuels and value added products</li>
          <li>Experimental studies on fire behaviour inside the confined area</li>
          <li>Passive mixing in microfluidic devices</li>
          <li>Development of novel catalysts system for the conversion of glycerol</li>
    </ul>
</section>
<!-- gallery ends -->
<?php include('../footer.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- SCRIPT FOR COPYRIGHT YEAR -->
<script>
	$('#year').text(new Date().getFullYear());
</script>
</body>
</html>