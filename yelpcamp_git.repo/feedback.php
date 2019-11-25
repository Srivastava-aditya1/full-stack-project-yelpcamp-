
<!DOCTYPE html>
<html lang="en">

<head>
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="sidenav.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="content_jumbo.css">
  
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.js"></script>
    <div style="zoom:100%">
<?php
        include("header.php");

    ?>
  </div>
 
<div class="container" >
  
	<style>input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */  
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}


/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: blue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: darkblue;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f8d1f8;
    
  margin-top: 150px;
  padding: 30px;
  width: 800px;
  margin-bottom: 150px;
}
body
{
    background-image: url(feedback_bg.jpg);
    background-size: 100%;
    background-position: center;
    background-repeat: no-repeat;
}
</style>
</head>
<body style="zoom:75%">


       
      <h1> We value your feedback</h1>
      <h4>Please complete the following form and help us to improve.</h4>
      <form action="action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="usa">Australia</option>
    </select>

    <label for="subject">Feel free to suggest suggestions.</label>
    <textarea id="subject" name="subject" placeholder="write here" style="height:200px"></textarea>

    <input type="submit" value="Send Feedback">

  </form>
</div>



</body>
</html>