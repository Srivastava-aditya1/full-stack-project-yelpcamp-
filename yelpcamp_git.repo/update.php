
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
         <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="sidenav.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="content_jumbo.css">
  
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.js"></script>

  <link href="bootstrap/css/style.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body style="background-image:url(update_bg.jpg);background-size:110%;background-position: center;background-repeat: no-repeat;zoom:80%" >
        <div class="container-fluid">
            <?php echo"<div style='width:1900px'>";
             include("header.php"); 
             echo"</div>";?>
            <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                     <div class="row">
                         <div class="col-sm-4"></div>
                         <div class="col-sm-4">
                             <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Record</h1><br>
                             <form class="form-group">
                                 <div class="row">
                                     <div class="col-sm-12"><input type="text" placeholder="Name" class="form-control" name="txt_name"  /></div>
                                 </div><br>
                                 <div class="row">
                                     <div class="col-sm-12"><input type="email" placeholder="Email ID" class="form-control" name="txt_email" /></div>
                                 </div><br>
                                 <div class="row">
                                     <div class="col-sm-12"><input type="password" placeholder="Password" class="form-control" name="txt_pwd"  /></div>
                                 </div><br>
                                 <div class="row">
                                     <div class="col-sm-12"><select name="gender" class="form-control">
                                             <option></option>
                                             <option>Male</option>
                                             <option>Female</option>
                                         </select></div>
                                 </div><br>
                                <div class="row">
                                     <div class="col-sm-12"><input type="number" placeholder="Mobile Number" class="form-control" name="txt_phone"  /></div>
                                 </div><br>
                                 <div class="row">
                                     <div class="col-sm-12"></div>
                                 </div>
                                 <div class="row">
                                     <div class="col-sm-12"><input type="submit" class="form-control btn btn-primary" value="update" name="btn_reg" /></div>
                                 </div>
                                 <div class="row">
                                     <div class="col-sm-12"><br><br></div>
                                 </div>
                             </form>
                         </div>
                         <div class="col-sm-4"></div>
                </div>
                </div>
            </div>
            
            
    </body>
</html>
