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
<body style="background-image: url(https://images.unsplash.com/photo-1513151233558-d860c5398176?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80);">
<?php
include('header.php');
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="jumbotron-fluid vertical-center"> <!-- 
                      ^--- Added class  -->
  <div  style="padding-left: 25px;">
    <h3>Camp Name</h3>
    <h5>vidoli</h5>
    <h3>Nearest Place</h3>
    <h5>gandhi nagar</h5>
  </div>
</div>
<br>
<br>
<div class="jumbotron-fluid vertical-center"> <!-- 
                      ^--- Added class  -->
  <div  >
    <h2 style="padding-left: 12px ">Map Location</h2>
    <img src="https://images.indianexpress.com/2017/05/google-maps-759.jpg" width="350px" height="400px"> 
    
    
    
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
			<div class="col-sm-8" >
				 <div class="row"  >
   				 <div class="col-lg-12 col-md-6 mb-4">
                 <div class="card h-100" style="background-color: red">
                <a href="#"><img class="card-img-top" src="https://images.unsplash.com/photo-1464547323744-4edd0cd0c746?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" height="500px" alt=""></a>
              <div class="card-body" style="background-color: #ff4d4d">
                <h4 class="card-title">
                  <a href="#">luxury Site</a>
                </h4>
                <h5>$24.99</h5><div class="card-body">
                  <p class="card-text">Best place for camping.</p>
                  <p class="card-text">Give Us Feedback!</p>
                
                        <form class="needs-validation" action="/campgrounds/5b76880aaebcf900147d5ec2/comments" method="POST" novalidate="">
                          <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="comment[text]" rows="3" required=""></textarea>
                            <div class="invalid-feedback">
                              You cannot leave this part blank.
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="mr-2">Rating: </label>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadio1" name="comment[rating]" value="1" class="custom-control-input" required="">
                              <label class="custom-control-label" for="customRadio1">1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadio2" name="comment[rating]" value="2" class="custom-control-input" required="">
                              <label class="custom-control-label" for="customRadio2">2</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadio3" name="comment[rating]" value="3" class="custom-control-input" required="">
                              <label class="custom-control-label" for="customRadio3">3</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadio4" name="comment[rating]" value="4" class="custom-control-input" required="">
                              <label class="custom-control-label" for="customRadio4">4</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadio5" name="comment[rating]" value="5" class="custom-control-input" required="">
                              <label class="custom-control-label" for="customRadio5">5</label>
                            </div>
                            <div class="invalid-feedback">
                              Please provide a rating.
                            </div>
                          </div>
                          <!-- <button type="submit" class="btn btn-danger btn-sm">Submit</button> -->
                          <button type="reset" class="btn btn-secondary btn-sm float right">Reset</button>
                        </form>
                      
                <div style="padding-left: 550px ">
              <a href="login_page.php" class="btn btn-info" role="button" style="background-color:green">Review Now!</a></div>
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

			</div>	
		</div>
	</div>
	

</body>
</html>