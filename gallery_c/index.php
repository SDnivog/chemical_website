<!DOCTYPE html>
<html>
<head>
	<title>Department of Chemical Engineering</title>
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