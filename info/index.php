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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<?php include('../header.php') ?>
<?php include('../navbar.php') ?>
<!-- 
<div class="container">
    <h2 class=" py-2 text-center">This is info page</h2>
    
    <div class="row">  
       

        <div class="col-lg-3" style="min-height: 300px; background: #ddd;">
         <h1 class="py-4 text-center" style=""><i class="fas fa-users text-primary" style="font-size: 100px;"></i></h1>
         <h1 class="text-center " style="font-size:80px; font-weight: bold;">200</h1>
        </div>
    </div>
</div> -->

<div class="container-fluid">
  <h4 class="py-2" style="font-weight: bold;">Total Admissions</h4>
    <div class="row py-2">
       <div class="col-lg-6 " style="min-height: 2px;">
          <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th class="table-info" scope="col">#</th>
      <th class="table-warning" scope="col">Admissions</th>
      <th class="table-success">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="table-info" scope="row">1</th>
      <td class="table-warning" >UG Admissions</td>
      <td class="table-success">300</td>
    </tr>
  </tbody>
</table>
        </div>
        <div class="col-lg-6" style="overflow: auto; overflow-y: hidden;"> 
            <div id="piechart" class="" style="width: 100%; height: 500px;"></div>
        </div>
       
    </div><hr>
    <h4 class="py-2" style="font-weight: bold;">Peoples</h4>
    <div class="row">
      <div class="col-lg-6 ">
            <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th class="table-info" scope="col">#</th>
      <th class="table-warning" scope="col">Admissions</th>
      <th class="table-success">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="table-info" scope="row">1</th>
      <td class="table-warning" >UG Admissions</td>
      <td class="table-success">300</td>
    </tr>
  </tbody>
</table>
         </div>
         <div class="col-lg-6" style="overflow: auto;overflow-y: hidden;">
            <div id="donutchart" style="width:100%; height:500px;"> </div> 
        </div>
         
    </div><hr>
<h4 class="py-2" style="font-weight: bold;">Total sponsored projects</h4>
    <div class="row">
      <div class="col-lg-12" style="overflow: auto; overflow-y: hidden;">
        <div id="columnchart_material" style="width:100%; height: 500px;"></div>
      </div>
    </div><hr>

</div>

<!-- gallery ends -->
<?php include('../footer.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- SCRIPT FOR COPYRIGHT YEAR -->
<script>$('#year').text(new Date().getFullYear());</script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Research scholar admissions', 270],
          ['PG Admissions',  443],
          ['UG Admissions',  1100],
          // ['Watch TV', 2],
          // ['Sleep',    7]
        ]);

        var options = {
          title: 'Total Admissions'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

     <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Faculty',   300],
          ['Academic staff',    250],
          ['Non-Academic staff', 310],
          ['Faculty fellows under CEP', 270],
          // ['Sleep',    7]
        ]);

        var options = {
          title: 'Peoples',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

     <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['months', 'Funds', 'Expenses', 'Profit'],
          ['January', 1000, 400, 200],
          ['February', 1170, 460, 250],
          ['March', 660, 1120, 300],
          ['April', 1030, 540, 350],
          ['May', 1030, 540, 350],
          ['June', 1030, 540, 350],
          ['July', 1030, 540, 350],
          ['August', 1030, 540, 350],
          ['September', 1030, 540, 350],
          ['October', 1030, 540, 350],
          ['November', 1030, 540, 350],
          ['December', 3030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Total sponsored projects',
            subtitle: 'Funds, Expenses, and Profit: January-December',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</body>
</html>