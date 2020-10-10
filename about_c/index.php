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

<!-- Main section start -->
<section class="container py-3">
  <div>
  <h4 class="text-primary py-2"><b>Department of Chemical Engineering Vision & Mission</b></h4>
  </div><hr> </section>
<section class="container">
  <div id="vision">
    <h4 class="text-primary py-2"><b>Vision</b></h4>
  </div><hr>
  <p class="text-primary">The Department aspires to achieve excellence by providing best facilities in the entire spectrum of Chemical Engineering education, research and consultancy.</p>
  <div id="mission">
    <h4 class="text-primary py-2"><b>Mission</b></h4>
  </div><hr>
  <p class="text-primary">To become a pioneer Department of higher learning imparting state of the art education, training and research in the field of Chemical Engineering.</p>
</section>
<!--main section end -->

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