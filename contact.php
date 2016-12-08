<?php
if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['user_email']; // this is the sender's Email address
    $name = $_POST['user_name'];
    $subject = "New message to Code Too Mutch";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['user_message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: thank_you.php');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
    </head>
    <body>

      <!-- Navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Code Too Mutch</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.html">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="matrix.html">Enter the Matrix</a></li>
                  <li><a href="kristoff.html">Photographer's Portfolio</a></li>
                </ul>
              </li>
              <li><a href="about.html">About</a></li>
              <li class="active"><a href="contact.html">Contact</a></li>
              <li><a href="https://github.com/peterpanning">Github</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
      <!-- TODO: Shouldn't have to manually insert breaks twice after every navbar-->
      <br><br>

      <!-- Contact Form -->
      <div class="container">
        <h1>Contact</h1>
          <div>
            <p>Fork me on <a href=https://github.com/peterpanning>Github</a></p>
            <p>Send me a message: </p>
            <!-- TODO: Input fields and text area should be aligned across the
            right side of their boxes -->
            <form action="" method="post">
              <div>
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="user_name" />
              </div>
              <div>
                  <label for="mail">E-mail:</label>
                  <input type="email" id="mail" name="user_email" />
              </div>
              <div>
                  <label for="msg">Message:</label>
                  <textarea id="msg" name="user_message"></textarea>
              </div>

              <div class="button">
                  <button type="submit">Send your message</button>
              </div>
            </form>
          </div>
      </div>
      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <!-- <script src="../../dist/js/bootstrap.min.js"></script>
      <script src="../../assets/js/docs.min.js"></script> <-->
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="bootstrap.js"></script>
      <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>