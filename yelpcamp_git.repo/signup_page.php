  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="sidenav.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="content_jumbo.css">
  
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.js"></script>

  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link rel="stylesheet" href="signup_page.css">
  <style type="text/css">
    .zoom{
      zoom:80%;
    }
  </style>
  </head>
  <body class="zoom">

    <?php
    include("header.php")
    ?>


    <div class="header">
      <div class="container">
        <h1 style="font-family: cursive;color: #ff3333">Be a member of yelp camp family</h1>
      </div>
    </div>

    <div class="main">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="label1">Join Now</h1>
            <form role="form">
              <div class="form-group">
                <label for="first" class="label1">First name</label>
                <p class="first-name-error"></p>
                <input type="text" class="form-control" id="first" style="border-radius: 10px;opacity: .68">
              </div>
              <div class="form-group">
                <label for="last" class="label1">Last name</label>
                <p class="last-name-error"></p>
                <input type="text" class="form-control" id="last" style="border-radius: 10px;opacity: .68">
              </div>
              <div class="form-group">
                <label for="email" class="label1">Email</label>
                <p class="email-error"></p>
                <input type="email" class="form-control" id="email" style="border-radius: 10px;opacity: .68">
              </div>
              <div class="form-group">
                <label for="password" class="password-label" class="label1">Password</label> 
                <p class="password-error"></p>
                <input type="password" class="form-control" id="password" style="border-radius: 10px;opacity: .68">
              </div>
              <button type="submit" class="btn"style="border-radius:5px">Create account</button>
            </form>        
          </div>
        </div>
      </div>
    </div>


    <div class="footer">
      <div class="container">
        <ul>
          <li>Contact</li>
          <li>Help Center</li>
          <li>About</li>
        </ul>
      </div>
    </div>
  </body>
  </html>