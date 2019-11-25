<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="sidenav.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="content_jumbo.css">
  
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.js"></script>


    <script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

    <style type="text/css">

    	.vertical-center {
  min-height: 100%;
  min-height: 10vh;  /* Fallback for browsers do NOT support vh unit */
   /* These two lines are counted as one :-)       */
	background-color:#DCDCDC;
  display: flex;
  align-items: top;

}
    </style>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<?php
include('header.php');
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="jumbotron-fluid vertical-center"> <!-- 
                      ^--- Added class  -->
  <div  style="padding-left: 25px;">
    <h3>House Name</h3>
    <h5>vidoli</h5>
    <h3>House Place</h3>
    <h5>gandhi nagar</h5>
  </div>
</div>
<br>
<br>
<div class="jumbotron-fluid vertical-center"> <!-- 
                      ^--- Added class  -->
  <div  style="padding-left: 25px;">
    <h3>Amenities<h3>
    <h5>Air - conditioned living, dining and bedroom with split units<br>
Large format tiles in living, dining and bedroom<br>
Aluminium double glazed windows<br>
Designer tiles in toilets & kitchen<br>
Thoughtfully designed toilets with bathroom fittings<br>
Vanity unit below wash basin counters<br>
Superior quality geyser, exhaust fan and water purifiers<br>
Modular electrical switches<br>
Meticulously planned electrical layout by interior designer<br>
High-quality non-corrosive plumbing<br>
False ceiling with lights at select locations<br>
Sheer curtain with two tracks provided in living, dining & bedroom<br>
Wallpaper provided on one wall in bedroom and living room<br>
Main entrance door with veneer finish<br>
Modular kitchen cabinets with immaculate kitchen <br>
platform and sink along with white goods -<br>
1) Hob & Hood<br>
2) Refrigerator<br>
3) Washing machine cum dryer<br>
4) Microwave oven</h5>
    
  </div>
</div>

<br>
<br>
<div class="jumbotron-fluid vertical-center"> <!-- 
                      ^--- Added class  -->
  <div  style="padding-left: 25px;">
    <h3>Contact number</h3>
    <h5>7897377884</h5>
      </div>
</div>
<br>
<br>
<!-- <div id="googleMap" style="width:100%;height:400px;"></div>
 -->		
 <h2 style="padding-left:10px ">varing rate of houses</h2>
<img src="http://www.smh.com.au/cqstatic/12z7v7/InterestpaymentsAMP.jpg" width="350px">	
</div>
			<div class="col-sm-8">
				 <div class="row"  >
   				 <div class="col-lg-12 col-md-6 mb-4">
                 <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://images.unsplash.com/photo-1465778893808-9b3d1b443be4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1054&q=80" height="500px" alt=""></a>
              <div class="card-body" style="background-color: #d9d9d9">
                <h4 class="card-title">
                  <a href="#">Camp Site</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                <div style="padding-left: 550px ">
              <a href="login_page.php" class="btn btn-info" role="button" style="background-color:green">Write Review Now</a></div>
              </div>

              <div class="card-footer">
              	<div>
                    <small><i class="fa fa-star text-danger"></i></small>
                  
                    <small><i class="fa fa-star text-danger"></i></small>
                  
                    <small><i class="fa fa-star text-danger"></i></small>
                  
                    <small><i class="fa fa-star text-danger"></i></small>
                  
                    <small><i class="fa fa-star text-danger"></i></small>
                  
                  
                    
                
              </div>

                
              </div>
            </div>
            
          </div>
 <div>
          <h2 style="padding-left: 12px ">Map Location</h2>
          <br>

          <img src="https://images.indianexpress.com/2017/05/google-maps-759.jpg" width="750px" style="padding-left: 12px;padding-right:10px ">	
          <br>
          <br>
</div>
			</div>	
		</div>
	</div>
	

</body>
</html>