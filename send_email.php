<?php

if(isset($_POST['submit'])) {



    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "peter2mutch@gmail.com";

    $email_subject = "New message from Code Too Mutch";

    function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }



    // validation expected data exists

    if(!isset($_POST['name']) ||

        !isset($_POST['mail']) ||

        !isset($_POST['msg'])) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');

    }



    $name = $_POST['name']; // required

    $mail_from = $_POST['mail']; // required

    $msg = $_POST['msg']; // required



    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$mail_from)) {

    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$name)) {

    $error_message .= 'The name you entered does not appear to be valid.<br />';

  }

  if(strlen($msg) < 2) {

    $error_message .= 'The message you entered do not appear to be valid.<br />';

  }

  if(strlen($error_message) > 0) {

    died($error_message);

  }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($mail_from)."\n";

    $email_message .= "Message: ".clean_string($msg)."\n";





// create email headers

$headers = 'From: '.$mail_from."\r\n".

'Reply-To: '.$mail_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

mail($email_to, $email_subject, $email_message, $headers);

}

?>



<!-- include your own success html here -->

<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
    </head>
    <body>

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
          </div>
        </div>
      </nav>

      <!-- TODO: Shouldn't have to manually insert breaks twice after every navbar-->
      <br><br>
    <div class="container">
      <h1>Whoops!</h1>
      Unfortunately, this is a placeholder page. Mail is broken on this site.
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
