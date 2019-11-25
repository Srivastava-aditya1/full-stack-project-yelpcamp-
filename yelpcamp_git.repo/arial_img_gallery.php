<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="sidenav.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="content_jumbo.css">
  
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.js"></script>

	<style type="text/css">
    .zoom{
      zoom:80%;
    }

.header{
   margin-top:0px;
   width:100%;
   height:500px;
   opacity:.8;
   background-color:rgb(30, 173, 255);
   background-image:url('https://res.cloudinary.com/arpr/image/upload/v1541394028/architecture-building-campus-207684.jpg');
   background-size:relative;
   background-position:bottom;
}

@media (min-width: 1200px) {
    .container{
        max-width: 1500px;
        border-right: 1px;
        border-left:  1px;
    }
}
		.gallery {
-webkit-column-count: 3;
-moz-column-count: 3;
column-count: 3;
-webkit-column-width: 33%;
-moz-column-width: 33%;
column-width: 100%; }
.gallery .pics {
-webkit-transition: all 350ms ease;
transition: all 350ms ease; }
.gallery .animation {
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1); }

@media (max-width: 450px) {
.gallery {
-webkit-column-count: 1;
-moz-column-count: 1;
column-count: 1;
-webkit-column-width: 100%;
-moz-column-width: 100%;
column-width: 100%;
}
}

@media (max-width: 400px) {
.btn.filter {
padding-left: 1.1rem;
padding-right: 1.1rem;
}
}
	</style>
	<script type="text/javascript">
		$(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
	</script>
</head>
<body class="zoom" style="background: black">
  <?php
include("header.php")
?>
 <div class="header" >

</div>
<br>
<br><br>
		<!-- Grid row -->
		<div class="container" >
<div class="row" >

  <!-- Grid column -->
  
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

</div>
</div>

<!-- Grid row -->
</body>
</html>