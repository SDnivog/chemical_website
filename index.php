<?php 
$Base_Address = "http://localhost/Chemical_f/";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Department of Chemical Engineering</title>
  <link rel = "icon" href ="favicon.ico" type = "image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <link rel="stylesheet" type="text/css" href="css/responsive.css">
     <style type="text/css">
     	*{
     		font-family: verdana;
     	}
     	.tab-pane ul li a{
     		text-decoration: none;
     		color: #007bff;
     	}
     	.download li a{
     		text-decoration: none;
     		font-size: 12px;

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
<?php include('header.php') ?>
<?php include('navbar.php') ?>

<div class="container">
<div class="row">
		<div class="col lg-12" style="">
		
		<!-- Slide image gallery start -->	
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Images/dept.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block bg-dark">
       <p>This is first image I am just testing that is right</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/nitj.png" alt="Second slide">
      <div class="carousel-caption d-none d-md-block bg-dark">
       <p>This is first image I am just testing that is right</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/Picture9.png" alt="Third slide">
      <div class="carousel-caption d-none d-md-block bg-dark">
       <p>This is first image I am just testing that is right</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
</div>   
       <!-- Slide image gallery ends -->
		</div> <!-- col lg-12 -->
		
	</div> <!-- Ending main row div -->
	</div> <!-- Ending main container div -->
</div>
	<div class="container" style="width: 100%; height: 50px; background-color: #fff; color: blue;" >
	<marquee scrollamount="5" direction="left" behavior="scroll"bgcolor="" onmouseover="this.stop()" onmouseout="this.start()"><p style="margin-top: 15px;color: blue;"><a href="#"target="_blank" ><img src="Images/New.gif"/>&nbsp;&nbsp;<b>TEQIP-III Sponsored One Week Short Term Course on “Emerging Technologies for Next-generation Bio-fuels and Bio-products” (February 21 - 25, 2020)&nbsp;<img src="Images/New.gif"/></b></a></p></marquee>
</div>
<!-- HOD Message start -->
<!-- Hod message -->
<div class="container" style="width: 100%;">
	<hr>
	<h4 class="text-primary text-center" style="text-transform: uppercase;"><b><i class="fas fa-spa"></i> Welcome Message From HOD <i class="fas fa-spa"></i></b></h4>
		<img align="left" class="ml-2 mr-2 rounded" style="width: 200px; height: 200px;" src="Images/sangeeta.jpg">
		<p class="text-primary" style="text-align: justify; font-size: 14px;">
		It is my pleasure and honour to introduce Department of Chemical Engineering at the NIT Jalandhar. Chemical Engineering has traditionally been thought as a professional discipline, applying principles from engineering, physics and maths, in design, analysis, manufacturing of chemical systems, and the associated transfer and flow of energies from one form to another. In the present era of technology marvel, It is at the centre of almost all application not only in core field like Oil,Petrochemical,Fertilizers,Cement etc. but ever in abstract fields like health services,infrastructure,auto sector etc. Chemical Engineers these days need to play proactive role working in multidisciplinary teams to solve the technical and societal problems in their respective domains.
        Department of Chemical Engineering at NITJ has been consistently expanding its reach from mere academics. This reflects in the continual effort of our academic, research and the quality of our students. We believe in a broad education which instils a sense of lifelong learning, community and leadership values in students, together with an appreciation of global issues. Apart from classroom teaching, our people indulge themselves in hands-on teaching-learning practice and that fruits in different recognitions at national and international levels.
	</p>
	<p class="text-primary" style=" text-align: left;margin-left: 0px;margin-top: 20px;"><b>Best Wishes,</b></p>
	<p class="text-primary" style="text-align: left;float: right;margin-top: -20px;margin-right: 10px; "><b> Dr. Sangeeta Garg<br>
      Head of the Department<br>Department of Chemical Engineering</b></p><br><br><br><hr>
	
</div>


<!--
<section class="container">
	<hr><h4 class="text-primary text-center" style="text-transform: uppercase;"><b><i class="fas fa-spa"></i> Welcome Message From HOD <i class="fas fa-spa"></i></b></h4>
		<div class="row">
                    <div class="col-lg-2">
                          <a href="Images/imag1.jpg" class="blog-author-img">
                              <img src="Images/imag1.jpg" style="width: 150px; height: 150px;" />
                          </a> </div>
                          <div class="col md-10">
                          <p style="color: blue;text-align: justify;font-size:13px;">
It is my pleasure and honour to introduce Department of Chemical Engineering at the NIT Jalandhar. Chemical Engineering has traditionally been thought as a professional discipline, applying principles from engineering, physics and maths, in design, analysis, manufacturing of chemical systems, and the associated transfer and flow of energies from one form to another. In the present era of technology marvel, It is at the centre of almost all application not only in core field like Oil,Petrochemical,Fertilizers,Cement etc. but ever in abstract fields like health services,infrastructure,auto sector etc. Chemical Engineers these days need to play proactive role working in multidisciplinary teams to solve the technical and societal problems in their respective domains.
Department of Chemical Engineering at NITJ has been consistently expanding its reach from mere academics. This reflects in the continual effort of our academic, research and the quality of our students.
We believe in a broad education which instils a sense of lifelong learning, community and leadership values in students, together with an appreciation of global issues. Apart from classroom teaching, our people indulge themselves in hands-on teaching-learning practice and that fruits in different recognitions at national and international levels.</p>
 </div>
                          
                </div>
                <hr>
</section> -->
<!-- HOD Mesaage end -->

<!-- Tabs section start -->
<section class="container">
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><b>Upcomming Events</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><b>Students Corner</b></a>
  </li>
   <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><b>Scholarship</b></a>
  </li>
   <li class="nav-item">
    <a class="nav-link" id="pills-gian-tab" data-toggle="pill" href="#pills-gian" role="tab" aria-controls="pills-gian" aria-selected="false"><b>GIAN</b></a>
  </li>
  </ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <ul>
  	<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
  	<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
  	<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
  </ul>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  	<ul>
  		<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
  		<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
  	</ul>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  	<ul>
  		<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
  		<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
  	</ul>
  </div>
  <div class="tab-pane fade" id="pills-gian" role="tabpanel" aria-labelledby="pills-gian-tab">
  	<ul>
  		<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
  		<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
  		<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
  	</ul>
  </div>
</div><hr>
</section>
<!--  Tabs section end here -->
<!-- Download start -->
<section class="container">
	<h4 class="text-primary"> <b>Downloads</b> <span style="float: right;"><i class="fas fa-download"></i></h4><hr>
		<ul class="download">
		<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
  		<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
  		<li><a href="#">TEQIP-III Sponsored Short Term Course on “Soft Computing Approach to Engineering Applications” (January 23 - 27, 2020)</a><img src="Images/new.gif"></li><hr>
		</ul>
		<hr>
</section>
<!-- Download ends -->
<!--  gallery start -->
<div class="container">
	<h4 class="text-primary"> <b>Gallery</b> <span style="float: right;"><i class="fas fa-camera"></i></h4><hr>
	​<picture>
  <source srcset="Images/imag2.jpg" type="image/svg+xml">
  <img src="Images/imag2.jpg" class="img-fluid img-thumbnail" alt="..." style="width: 150px; height: 150px;">
  <source srcset="Images/imag2.jpg" type="image/svg+xml">
  <img src="Images/imag2.jpg" class="img-fluid img-thumbnail" alt="..." style="width: 150px; height: 150px;">
  <source srcset="Images/imag2.jpg" type="image/svg+xml">
  <img src="Images/imag2.jpg" class="img-fluid img-thumbnail" alt="..." style="width: 150px; height: 150px;">
  <source srcset="Images/imag2.jpg" type="image/svg+xml">
  <img src="Images/imag2.jpg" class="img-fluid img-thumbnail" alt="..." style="width: 150px; height: 150px;">
  <a href="#" style="text-decoration: none; font-weight: bold;">Click here to see more..</a>
</picture>
</div>
<!-- gallery ends -->
<?php include('footer.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- SCRIPT FOR COPYRIGHT YEAR -->
<script>
	$('#year').text(new Date().getFullYear());
</script>
</body>
</html>