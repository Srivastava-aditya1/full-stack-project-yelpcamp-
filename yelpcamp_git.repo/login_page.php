<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
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
  <link rel="stylesheet" href="login_page.css">
  <style type="text/css">
    .zoom{
      zoom:80%;
    }
  </style>
</head>
<body>
  <div class="zoom">
<?php
    include("header.php")
    ?>
</div>

<div class="height">
<section class="login">
  <h1 class="login__title">Sign in</h1>
  <form action="more_info1.php" class="form">
    <input class="form__input" type="email" placeholder="Your email" />
    <input class="form__input" type="password" placeholder="Your password" />
    <button class="form__submit" >GO</button>
  </form>
  <a href="#" class="login__action login__action--normal">Need help?</a>
  <a href="#" class="login__action">Sign up</a>
</section>
</div>
</body>
</html>>