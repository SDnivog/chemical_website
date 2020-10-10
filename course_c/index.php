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
         table {
  font-family: verdana, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: #007bff;
  font-size: 14px;

}


td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(odd) {
  background-color: #dddddd;
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
<!-- main area start -->
<div class="container mt-3">
    <h4 class="text-primary py-3" style="font-weight: bold;">Departmental Courses offers</h4>
</div>
<section class="container py-2" id="btech">
    <h4 class="text-primary" style="font-weight: bold;">Undergraduate Program: B.Tech. in Chemical Engineering</h4>
    <ul class="text-primary py-2">
        <li>Program Education Objectives (PEOs)</li>
        <li>The educational objectives of the undergraduate programme of Chemical Engineering at NIT Jalandhar are:</li>
    </ul>
    <table>
        <tr>
            <th>PEOs</th>
            <th>Purpose</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>PEO 1</td>
            <td>Professional Competence</td>
            <td>To nurture young engineers with sound technical
fundamentals, training and problem solving skills
suitable for the need of industry.</td>
        </tr>
        <tr>
            <td>PEO 2</td>
            <td>Professional Growth</td>
            <td>Placement of graduates in reputed industries handling
production, projects and consultancy or life-long learning
demonstrated by pursuance of under-graduation in relevant
fields of engineering/management.</td>
        </tr>
        <tr>
            <td>PEO 3</td>
            <td>Design and Innovation</td>
            <td>Inculcating the chemical engineering principles and their
applications leading to the design and innovation.</td>
        </tr>
        <tr>
            <td>PEO 4</td>
            <td>Social and Professional Ethics</td>
            <td>Ability of graduates to demonstrate team spirit,
responsibility towards society and sound ethical behaviour.</td>
        </tr>
    </table>
    <ul class="py-2 text-primary">
        <li><a href="#">B.Tech. in Chemical Engineering Structure of the Curriculum</a><img src="../Images/New.gif"></li>
    </ul>
</section>
<section class="container py-2" id="mtech">
    <h4 class="text-primary" style="font-weight: bold;">Undergraduate Program: M.Tech. in Chemical Engineering</h4>
    <ul class="text-primary py-2">
        <li>Program Education Objectives (PEOs)</li>
        <li>The educational objectives of the Postgraduate programme of Chemical Engineering at NIT Jalandhar are:</li>
    </ul>
    <table>
        <tr>
            <th>PEOs</th>
            <th>Purpose</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>PEO 1</td>
            <td>Professional Competence</td>
            <td>Imparting knowledge to postgraduate students to enable them
for suitable placement in reputed industries, research and
development organizations, consultancy firms, academic
institutes and other organizations in the field of Chemical
Engineering.</td>
        </tr>
        <tr>
            <td>PEO 2</td>
            <td>Professional Growth</td>
            <td>Engagement of postgraduates in life-long learning
demonstrated through advanced learning and practical exposure.</td>
        </tr>
        <tr>
            <td>PEO 3</td>
            <td>Research, analysis, design and innovation</td>
            <td>Inculcating research, analysis, design and
innovation component.</td>
        </tr>
    </table>
    <ul class="py-2 text-primary">
        <li><a href="#">M.Tech. in Chemical Engineering Structure of the Curriculum</a><img src="../Images/New.gif"></li>
    </ul>
</section>
<!-- main area ending -->

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